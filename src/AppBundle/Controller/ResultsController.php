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
        $listings = $this->getDoctrine()
            ->getRepository('AppBundle:Listing')
            ->findAll();

        $listingsToDisplay = [];
        $index = 0;

        foreach ($listings as $entity) {
            $imgUrl = 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRGKq6w-seqKAJfQ8-_ngZ5r_teUTnsm6RzhnY409upplVstd2oLCWHTA';
            if ($entity->getImgUrl()) {
                $imgUrl = $entity->getImgUrl();
            }
            $listingsToDisplay[$index] = [
                'id' => $entity->getId(),
                'year' => $entity->getYear(),
                'make' => $entity->getMake(),
                'model' => $entity->getModel(),
                'description' => $entity->getDescription(),
                'imgUrl' => $imgUrl
            ];

            $index += 1;
        }

        return $this->render('results.html.twig', [
            'listings' => $listingsToDisplay
        ]);
    }
}
