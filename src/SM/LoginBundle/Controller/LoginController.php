<?php

namespace SM\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SM\LoginBundle\Entity\Fonctions;
use Symfony\Component\HttpFoundation\Request;
use SM\LoginBundle\Modeles\Login;

class LoginController extends Controller
{
    public function indexAction(Request $request)
    {

        $session = $this->container->get('request_stack')->getCurrentRequest()->getSession();
        $myLogin = new Login();
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('SMLoginBundle:Users');
        if ($request->getMethod() == 'POST') {

            $session->clear();
            $login = $request->get('login');
            $mdp = $request->get('password');
            $souvenir = $request->get('sesouvenir');


            $user = $repository->findOneBy(array('login' => $login, 'password' => $mdp));

            if ($user) {
                if ($souvenir == 'sesouvenir') {

                    $myLogin->setLogin($login);
                    $myLogin->setPassword($mdp);
                    $session->set('myLogin', $myLogin);

                }
               if($user->getFonction()->getFonction()=='secretaire')
                    return $this->render('SMLoginBundle:Login:index.html.twig', array('name' => $user->getPrenom()));
                if($user->getFonction()->getFonction()=='chefDeDep')
                    return $this->render('SMLoginBundle:Login:index.html.twig', array('name' => $user->getPrenom()));
                if($user->getFonction()->getFonction()=='administrateur')
                    return $this->render('SMLoginBundle:Login:index.html.twig', array('name' => $user->getPrenom()));
                if($user->getFonction()->getFonction()=='enseignant')
                    return $this->render('SMLoginBundle:Login:index.html.twig', array('name' => $user->getPrenom()));
                return $this->render('SMLoginBundle:Login:index2.html.twig', array('name' =>'vous êtes '.$user->getFonction()->getFonction().'.'));

            }
            else {
                return $this->render('SMLoginBundle:Login:loginForm.html.twig', array('name' => 'Attention, le login ou le mot de passe est incorrect.'));
            }
        }
        else {
            if ($session->has('myLogin')) {
                $myLogin = $session->get('myLogin');
                $login = $myLogin->getLogin();
                $mdp = $myLogin->getPassword();
                $user = $repository->findOneBy(array('login' => $login, 'password' => $mdp));
                if ($user) {
                    return $this->render('SMLoginBundle:Login:index.html.twig', array('name' => $user->getPrenom()));
                }

                if($user->getFonction()->getFonction()=='secretaire'){
                    return $this->render('SMLoginBundle:Login:loginForm.html.twig');
                }
                else {
                    return $this->render('SMLoginBundle:Login:loginForm.html.twig', array('name' => 'Attention, le login ou le mot de passe est incorrect.'));
                }
            }

        }

        return $this->render('SMLoginBundle:Login:loginForm.html.twig');

    }

    public function deconnexionAction(Request $request)
    {
        $session=$this->container->get('request_stack')->getCurrentRequest()->getSession();
        $session->clear();
        return $this->render('SMLoginBundle:Login:loginForm.html.twig');
    }
}
