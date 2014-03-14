<?php

namespace Dml\TodoBundle\Controller;

use Dml\TodoBundle\Util\Util;
use Dml\TodoBundle\Paginador\Paginador;
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
        $repo = $em->getRepository('TodoBundle:Movimientos')
                   ->moTable()
                   ->select($fields)
                   ->join('mo.ahorrosAh', 'ah')
                   ->andWhere('ah.ahId = :id')
                   ->setParameter('id', $request->get('id') != NULL ? $request->get('id') : 1);
        $this->pager = new Paginador('TodoBundle:Movimientos', 5);
        $this->pager->setSelect($repo);
        $this->pager->setPage($request->get('page') != NULL ? $request->get('page') : 1);
        $this->pager->init();
        Util::getMyDumpSQL($this->pager->getResults());
        
        return $this->render('TodoBundle:Movimientos:abstract.html.twig', array('pager' => $this->pager));
    }
    
    public function cuentasAhorrosAction(Request $request) {
        $em = $this->getDoctrine();
        $q = $em->getRepository('TodoBundle:Ahorros')->ahTable()
                ->select('ah.ahId, ah.ahNumeroCuenta')
                ->getQuery()
                ->getArrayResult();
        return new Response(Util::getJSON($q));
    }
    
}