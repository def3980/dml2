<?php

namespace Dml\TodoBundle\Listener;

use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use Dml\TodoBundle\Entity\Persona;
use Doctrine\ORM\EntityManager;
use Dml\TodoBundle\Util\Util;

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
        $persona->setPeOnline(FALSE);
        $persona->setPeFinSesion(new \DateTime('NOW'));
        $formatoFecha = $persona->getPeInicioSesion();
        $persona->setPeDuracionSesion(abs(Util::sessionTimeCalculation($formatoFecha->format('Y-m-d H:i:s'))));
        $this->em->persist($persona);
        $this->em->flush();

        return new RedirectResponse('login');
    }

}