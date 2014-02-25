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
        $filas_por_pagina = 10;
        $pagina_actual = (int) $request->get('pag');
        switch ($pagina_actual):
            case 0: 
            case 1: $pagina_actual = 0; break;
            default: $pagina_actual = ($pagina_actual - 1) * $filas_por_pagina;
        endswitch;
        $total_filas = $em->getRepository('TodoBundle:Movimientos')->moCount(1);
        $total_paginas = ceil($total_filas/$filas_por_pagina);
        $array = array();
        for ( $i = 1 ; $i <= $total_paginas ; $i += 1):
            $array[$i] = $i;
        endfor;
        $aux = (int) $request->get('pag');
        $ref = 3;
        $ini = $aux == 0 || $aux == 1 ? 1 : $aux;
        $fin = $aux == $ref ? $ref : $aux + $ref;
        $myrange = range($ini, $fin);
        $output = array_intersect($array, $myrange);

        Util::getMyDump($output);
        $q = $em->getRepository('TodoBundle:Movimientos')->moTable()
                ->select($fields)
                ->join('mo.ahorrosAh', 'ah')
                ->andWhere('ah.ahId = :id')
                ->setParameter('id', $request->get('id') != NULL ? $request->get('id') : 1)
                ->setFirstResult($pagina_actual)
                ->setMaxResults($filas_por_pagina);
//        Util::getMyDumpSQL($q->getQuery()->getSQL());
        $params = array(
                        'movimientos'   => $q->getQuery()->getArrayResult(),
                        'pagina_actual' => $request->get('pag'),
                        'total_paginas' => $total_paginas,
                       );
        return $this->render('TodoBundle:Movimientos:index.html.twig', $params);
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