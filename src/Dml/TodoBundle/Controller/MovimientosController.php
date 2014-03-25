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
        if ($request->get('bMo') == NULL):
//                   ->andWhere("MONTH(mo.moFecha) = MONTH(DATE_ADD(NOW(), :num, 'MONTH'))") // Funciona asi para el query builder
            $repo = $repo->andWhere('MONTH(mo.moFecha) = MONTH(CURDATE())');
        else:
//            $repo = $repo->andWhere("mo.moFecha LIKE '%{$request->get('bMo')}%'");
            $repo = $repo->andWhere('mo.moFecha LIKE :bMo')
                         ->setParameter('bMo', "%{$request->get('bMo')}%");            
        endif;
        $repo = $repo->setParameter('id', $request->get('id') != NULL ? $request->get('id') : 1);
        $this->pager = new Paginador('TodoBundle:Movimientos', 5);
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
        $this->listaDMovimientos($request);
//        $res = $this->pager;
//        Util::getMyDumpSQL($res->getSqlQuery());
//        Util::getMyDump($res->getResults());
        $ahorros = $this->cuentasDAhorros($request)->getQuery()->getArrayResult();
        return $this->render('TodoBundle:Movimientos:index.html.twig', array('pager' => $this->pager, 'ahorros' => $ahorros));
    }
    
//    public function cuentasAhorrosAction(Request $request) {
//        $em = $this->getDoctrine();
//        $q = $em->getRepository('TodoBundle:Ahorros')->ahTable()
//                ->select('ah.ahId, ah.ahNumeroCuenta')
//                ->getQuery()
//                ->getArrayResult();
//        return new Response(Util::getJSON($q));
//    }
    
    public function moListAction(Request $request) {
        $this->listaDMovimientos($request);
        return $this->render('TodoBundle:Movimientos:mo_list.html.twig', array('pager' => $this->pager));
    }
    
    public function moPagerAction(Request $request) {
        $this->listaDMovimientos($request);
        return $this->render('TodoBundle:Movimientos:mo_pager.html.twig', array('pager' => $this->pager));
    }
    
}