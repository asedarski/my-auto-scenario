<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Model\Listing as Listing;

class ListingController extends Controller
{
    /**
     * @Route("/listing", name="listing")
     */
    public function indexAction(Request $request)
    {
        $listing = new Listing();
        return $this->render('listing.html.twig', [
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
