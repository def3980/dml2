<?php

namespace Dml\TodoBundle\Controller;

use Dml\TodoBundle\Util\Util;
use DoctrineExtensions\Query\Mysql;
use Dml\TodoBundle\Paginador\Paginador;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MovimientosController extends Controller {
    
    protected 
        $fields = array(
                        'mo.moId',
                        'mo.moFecha',
                        'mo.moConcepto',
                        'mo.moTipo',
                        'mo.moDocumento',
                        'mo.moOficina',
                        'mo.moMonto',
                        'mo.moSaldo',
                        'ah.ahNumeroCuenta'
                       );

    private function listaDMovimientos(Request $request) {
        $em = $this->getDoctrine();
        $repo = $em->getRepository('TodoBundle:Movimientos')
                   ->moTable()
                   ->select($this->fields)
                   ->join('mo.ahorrosAh', 'ah')
                   ->andWhere('ah.ahId = :id');
        if ($request->get('bMoFecha') !== NULL):
            $repo = $repo->andWhere('mo.moFecha LIKE :bMoFecha')
                         ->setParameter('bMoFecha', array("%{$request->get('bMoFecha')}%"));
        elseif ($request->get('bMoConcepto') !== NULL):
            $repo = $repo->andWhere('mo.moConcepto LIKE :bMoConcepto')
                         ->setParameter('bMoConcepto', array("%{$request->get('bMoConcepto')}%"));
        elseif ($request->get('bMoDocumento') !== NULL):
            $repo = $repo->andWhere('mo.moDocumento LIKE :bMoDocumento')
                         ->setParameter('bMoDocumento', array("%{$request->get('bMoDocumento')}%"));
        else:
            $repo = $repo->andWhere('MONTH(mo.moFecha) = MONTH(CURDATE())');
        endif;
        $repo = $repo->setParameter('id', $request->get('id') != NULL ? $request->get('id') : 1);
        $this->pager = new Paginador('TodoBundle:Movimientos', $this->container->getParameter('dml.filas_x_pagina'));
        $this->pager->setSelect($repo);
        $this->pager->setPage($request->get('page') != NULL ? $request->get('page') : 1);
        $this->pager->init();
    }

    private function cuentasDAhorros(Request $request) {
        $em = $this->getDoctrine();
        return $em->getRepository('TodoBundle:Ahorros')->ahTable()
                  ->select('ah.ahId, ah.ahNumeroCuenta');
    }

    public function indexAction(Request $request) {
        /* @var $em \Doctrine\ORM\EntityManager */ // Para que funcione el autocompletar en NetBeans >= 7.0. (OJO: Siempre en una sola linea)
        $q1 = $this->cuentasDAhorros($request)
                   ->addSelect('cb.cbId, cb.cbFechaContrato, es.esAlias')
                   ->join('ah.contratarBCb', 'cb')
                   ->join('cb.entidadesEs', 'es')
                   ->groupBy('es.esAlias')
                   ->getQuery();
        $contenedor = array(); $entidadBCuentas = array();
        foreach ($q1->getArrayResult() as $ahCbEs):
            $entidadBCuentas['banco'] = $ahCbEs['esAlias'];
            $q2 = $this->cuentasDAhorros($request)
                   ->join('ah.contratarBCb', 'cb')
                   ->join('cb.entidadesEs', 'es')
                    ->andWhere("ah.contratarBCb = {$ahCbEs['cbId']}")
                        ->getQuery();
            $cuentas = array();
            foreach($q2->getArrayResult() as $ah):
                $cuentas[] = array('ahId' => $ah['ahId'], 'ahNumeroCuenta' => $ah['ahNumeroCuenta']);
            endforeach;
            $entidadBCuentas['cuentas'] = $cuentas;
            $contenedor[] = $entidadBCuentas;
        endforeach;
//        Util::getMyDump($this->cuentasDAhorros($request)->getQuery()->getScalarResult());
        $this->listaDMovimientos($request);
        $ahorros = $contenedor;
        return $this->render('TodoBundle:Movimientos:index.html.twig', array('pager' => $this->pager, 'ahorros' => $ahorros));
    }
    
    public function moListAction(Request $request) {
        $this->listaDMovimientos($request);
        return $this->render('TodoBundle:Movimientos:mo_list.html.twig', array('pager' => $this->pager));
    }
    
    public function moPagerAction(Request $request) {
        $this->listaDMovimientos($request);
        return $this->render('TodoBundle:Movimientos:mo_pager.html.twig', array('pager' => $this->pager));
    }
    
    public function pasteAction(Request $request) {
        $persona = $this->get('security.context')->getToken()->getUser(); // obtengo la info. de la clase Persona que esta asociada a la sesion
        foreach (preg_split('/[\r\n]+/', $request->get('txta'), -1, PREG_SPLIT_NO_EMPTY) as $k => $v):
            $field = explode('|', $v);
            $campos = array(
                            'mo_fecha'      => implode('-', array_reverse(explode('/', trim($field[0])))),
                            'mo_concepto'   => trim($field[1]),
                            'mo_tipo'       => trim($field[2]),
                            'mo_documento'  => trim($field[3]),
                            'mo_oficina'    => trim($field[4]),
                            'mo_monto'      => trim($field[5]),
                            'mo_saldo'      => trim($field[6]),
                            'mo_quien_crea' => $persona->getPeId()
                           );
            $contenedor[] = $campos;
        endforeach;
        array_push($contenedor, $request->get('ica')); // id_cuenta_ahorros = ica
        $repo = $this->getDoctrine()
                     ->getRepository('TodoBundle:Movimientos')
                     ->moInsert($contenedor);

        return new Response(Util::getJSON($repo));
    }
    
}