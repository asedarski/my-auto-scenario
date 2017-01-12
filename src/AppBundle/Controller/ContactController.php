<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends Controller
{
    /**
     * @Route("/contact/{id}", name="contact")
     */
    public function indexAction(Request $request, $id)
    {
        return $this->render('contact.html.twig', [
            'id' => $id,
            'errName' => $request->query->get('errName'),
            'errEmail' => $request->query->get('errEmail'),
            'errMessage' => $request->query->get('errMessage')
        ]);
    }
}
