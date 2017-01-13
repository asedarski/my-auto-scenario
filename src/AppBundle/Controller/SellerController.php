<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SellerController extends Controller
{
    /**
     * @Route("/seller/{sellerId}", name="seller")
     */
    public function indexAction(Request $request, $sellerId)
    {
        $seller = $this->getDoctrine()
            ->getRepository('AppBundle:Seller')
            ->find($sellerId);

        if (!$seller) {
            throw $this->createNotFoundException(
                'No seller found for id '.$sellerId
            );
        }

        return $this->render('seller.html.twig', [
            'id' => $seller->getId(),
            'type' => $seller->getType(),
            'name' => $seller->getName(),
            'street' => $seller->getStreet(),
            'city' => $seller->getCity(),
            'state' => $seller->getState(),
            'zip' => $seller->getZip(),
            'phoneNumber' => $seller->getPhoneNumber(),
            'email' => $seller->getEmail(),
            'website' => $seller->getWebsite()
        ]);
    }
}
