<?php

namespace Dml\TodoBundle\Listener;

use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;
use Doctrine\ORM\EntityManager;

/**
 * Description of LoginListener
 *
 * @author Oswaldo
 */
class LoginListener {
    
    private $em, $router, $email = null;
    
    public function __construct(Router $router, EntityManager $em) {
        $this->router = $router; $this->em = $em;
    }

    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event) {
        $persona = $event->getAuthenticationToken()->getUser();
        $persona->setPeOnline(TRUE);
        $persona->setPeInicioSesion(new \DateTime('NOW'));
        $this->em->persist($persona);
        $this->em->flush();
        $this->email = $persona->getEmail();
    }
    
    public function onKernelResponse(FilterResponseEvent $event) {
        if (null != $this->email)
            $event->setResponse(new RedirectResponse('index'));
    }
    
}