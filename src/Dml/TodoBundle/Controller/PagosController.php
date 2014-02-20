<?php

namespace Dml\TodoBundle\Controller;

use Dml\TodoBundle\Util\Util;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of PagosController
 *
 * @author Oswaldo
 */
class PagosController extends Controller {
    
    public function indexAction(Request $request) {
        $em = $this->getDoctrine();
        $fields = array(
                        'pa.paNumeroFactura',
                        'pa.paFecha',
                        'pa.paDetalle',
                        'pa.paValorTotal'
                       );
        $q = $em->getRepository('TodoBundle:Pagos')->paTable()
                ->select($fields)
                ->join('pa.personaPe', 'pe')
                ->join('pa.tipoConsumoTc', 'tc')
                ->andWhere('pa.paId = :id')                
                ->orderBy('pa.paFecha','desc')
                ->setParameter('id', $request->get('id') != NULL ? $request->get('id') : 1)                
                ->getQuery()//->getSQL();
                ->getArrayResult();
//        Util::getMyDump($q);
//        Util::getMyDumpSQL($q);
        return $this->render('TodoBundle:Pagos:index.html.twig', array('pagos' => $q));
    }
    
}