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
                         ->setParameter('bMoFecha', "%{$request->get('bMoFecha')}%");
        elseif ($request->get('bMoConcepto') !== NULL):
            $repo = $repo->andWhere('mo.moConcepto LIKE :bMoConcepto')
                         ->setParameter('bMoConcepto', "%{$request->get('bMoConcepto')}%");
        elseif ($request->get('bMoDocumento') !== NULL):
            $repo = $repo->andWhere('mo.moDocumento LIKE :bMoDocumento')
                         ->setParameter('bMoDocumento', "%{$request->get('bMoDocumento')}%");
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
        $this->listaDMovimientos($request);
//        $res = $this->pager;
//        Util::getMyDumpSQL($res->getSumQuery('moMonto', 'moTipo <> :tipo', 'tipo', array('D')));
//        Util::getMyDump($res->getSumQuery('moMonto', 'moTipo <> :tipo', 'tipo', array('D')));
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