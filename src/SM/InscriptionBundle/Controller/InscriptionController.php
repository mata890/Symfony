<?php

namespace SM\InscriptionBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InscriptionController extends Controller
{
    public function loginAction()
    {
        return $this->render('SMInscriptionBundle:Inscription:login.html.twig');
    }
}
