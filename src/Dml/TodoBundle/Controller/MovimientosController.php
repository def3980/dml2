<?php

namespace Dml\TodoBundle\Controller;

use Dml\TodoBundle\Util\Util;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MovimientosController extends Controller {
    
    public function indexAction(Request $request) {
        $em = $this->getDoctrine();
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
        $em2 = $this->getDoctrine()->getEntityManager();
        $q2 = $em2->getRepository('TodoBundle:Movimientos')->moTable()
                ->select('count(mo)')
                ->getQuery()
                ->getSingleScalarResult();
        Util::getMyDump($q2);
        $filas_por_pagina = 5;
        $pagina_actual = 1;
        
        $q = $em->getRepository('TodoBundle:Movimientos')->moTable()
                ->select($fields)
                ->join('mo.ahorrosAh', 'ah')
                ->andWhere('ah.ahId = :id')                
                ->orderBy('mo.moFecha','desc')
                ->setParameter('id', $request->get('id') != NULL ? $request->get('id') : 1)
            ->setFirstResult(0)
            ->setMaxResults(5)
                ->getQuery()
                ->getArrayResult();
//        Util::getMyDump($q);
        return $this->render('TodoBundle:Movimientos:index.html.twig', array('movimientos' => $q));
    }
    
    public function cuentasAhorrosAction(Request $request) {
        $em = $this->getDoctrine();
        $q = $em->getRepository('TodoBundle:Ahorros')->ahTable()
                ->select('ah.ahId, ah.ahNumeroCuenta')
                ->getQuery()
                ->getArrayResult();
//        echo '<textarea rows="4" cols="100">';
//        print_r($q->getSQL());
//        echo '</textarea>';
//        die();
//        Util::getMyDump($q);
        return new Response(Util::getJSON($q));
    }
    
}