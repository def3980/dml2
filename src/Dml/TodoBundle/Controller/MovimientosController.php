<?php

namespace Dml\TodoBundle\Controller;

use Dml\TodoBundle\Util\Util;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class MovimientosController extends Controller {
    
    public function indexAction() {
        $em = $this->getDoctrine();
        $movimientos = $em->getRepository('TodoBundle:Movimientos')
                            ->moAlias()
                                ->addSelect('ah')
                                ->join('mo.ahorrosAh', 'ah')
                                ->where('ah.ahId = 1')
                                ->addOrderBy('mo.moFecha','desc')
                                    ->getQuery()
                                        ->getArrayResult();
//        Util::getMyDump($movimientos);
        return $this->render('TodoBundle:Movimientos:index.html.twig', array('movimientos' => $movimientos));
    }
    
    public function combosAction(Request $request) {
        $em = $this->getDoctrine();
        if ($request->get('id') != NULL):
            $q = $em->getRepository('TodoBundle:Movimientos')
                        ->moAlias()
                            ->addSelect('ah')
                            ->join('mo.ahorrosAh', 'ah')
                            ->where('ah.ahId = :id')
                            ->addOrderBy('mo.moFecha','desc')
                            ->setParameter('id', $request->get('id'));
        else:
            $q = $em->getRepository('TodoBundle:Ahorros')->ahAlias();
        endif;
        $q = $q->getQuery()->getArrayResult();
//        Util::getMyDump($q);
        return new Response(Util::getJSON($q));
    }
    
}