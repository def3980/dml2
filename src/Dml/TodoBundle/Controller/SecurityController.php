<?php

namespace Dml\TodoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

/**
 * Description of SecurityController
 *
 * @author Oswaldo
 */
class SecurityController extends Controller {

    public function loginAction(Request $peticion) {
        $sesion = $peticion->getSession();
        
        // obtener, si existe, el error producido en el último intento de login        
        if ($peticion->attributes->has(SecurityContext::AUTHENTICATION_ERROR))
            $error = $peticion->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        else
            $error = $sesion->get(SecurityContext::AUTHENTICATION_ERROR);
            $sesion->remove(SecurityContext::AUTHENTICATION_ERROR);

        return $this->render('TodoBundle:Security:login.html.twig', 
                                array(
                                    'last_username' => $sesion->get(SecurityContext::LAST_USERNAME),
                                    'error' => $error
                                )
                            );
    }

}