<?php

namespace Dml\TodoBundle\Controller;

use Dml\TodoBundle\Util\Util;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MovimientosController extends Controller {
    
    public function indexAction() {
        $movimientos = $this->getDoctrine()
                            ->getRepository('TodoBundle:Movimientos')
                                ->allRows()
                                    ->join('mo.ahorrosAh', 'ah')
                                    ->where('ah.ahId = 1')
                                    ->addOrderBy('mo.moFecha','desc')
                                        ->getQuery()
                                            ->getArrayResult();
//        Util::getMyDump($movimientos);
        return $this->render('TodoBundle:Movimientos:index.html.twig', array('movimientos' => $movimientos));
    }
    
}