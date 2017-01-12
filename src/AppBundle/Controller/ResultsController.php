<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Model\Listing as Listing;

class ResultsController extends Controller
{
    /**
     * @Route("/listings", name="listings")
     */
    public function indexAction(Request $request)
    {
        return $this->render('results.html.twig', [
        ]);
    }
}
