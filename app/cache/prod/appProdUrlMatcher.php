<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // sm_login_homepage
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'SM\\LoginBundle\\Controller\\LoginController::indexAction',  '_route' => 'sm_login_homepage',);
        }

        // sm_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sm_homepage');
            }

            return array (  '_controller' => 'SM\\LoginBundle\\Controller\\LoginController::indexAction',  '_route' => 'sm_homepage',);
        }

        // sm_login_deconnexion
        if ($pathinfo === '/deconnexion') {
            return array (  '_controller' => 'SM\\LoginBundle\\Controller\\LoginController::deconnexionAction',  '_route' => 'sm_login_deconnexion',);
        }

        // sm_inscription_homepage
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'SM\\InscriptionBundle\\Controller\\InscriptionController::loginAction',  '_route' => 'sm_inscription_homepage',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
