<?php

namespace Dml\TodoBundle\Listener;

use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use Dml\TodoBundle\Entity\Persona;
use Doctrine\ORM\EntityManager;

/**
 * Description of LogoutListener
 *
 * @author Oswaldo
 */
class LogoutListener implements LogoutSuccessHandlerInterface {

    private $em, $security;

    public function __construct(SecurityContext $security, EntityManager $em) {
        $this->security = $security; $this->em = $em;
    }

    public function onLogoutSuccess(Request $request) {
        $persona = $this->security->getToken()->getUser();
//        $persona = new Persona();
        $persona->setPeApellidos($persona->getPeUltimoIngreso()->format('Y-m-d H:i:s'));
        $persona->setPeUltimoIngreso(new \DateTime());
        $this->em->persist($persona);
        $this->em->flush();
        
        return new RedirectResponse('login');

//        return new RedirectResponse('login');
    }

}