<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Model\Listing as Listing;

class HomeController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $listing = new Listing();
        return $this->render('home.html.twig', [
            'testVar' => $listing->testVar,
            'id' => $listing->getId(),
            'sellerId' => $listing->getSellerId(),
            'type' => $listing->getType(),
            'year' => $listing->getYear(),
            'make' => $listing->getMake(),
            'model' => $listing->getModel(),
            'description' => $listing->getDescription(),
            'price' => $listing->getPrice(),
            'color' => $listing->getColor(),
            'transmissionType' => $listing->getTransmissionType(),
            'bodyStyle' => $listing->getBodyStyle(),
            'options' => $listing->getOptions()
        ]);
    }
}
