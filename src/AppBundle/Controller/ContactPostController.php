<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactPostController extends Controller
{
    /**
     * @Route("/contact/post/{id}", name="contactPost")
     */
    public function indexAction($id)
    {
        list($emailSent, $errName, $errEmail, $errMessage) = $this->sendEmail();

        if ($emailSent) {
            return $this->render('posted.html.twig', [
                'id' => $id
            ]);
        }

        return $this->redirectToRoute('contact', [
            'id' => $id,
            'errName' => $errName,
            'errEmail' => $errEmail,
            'errMessage' => $errMessage
        ]);

    }

    public function sendEmail()
    {
        if (isset($_POST["submit"])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $from = $email; 
            $to = "alicia.sedarski@dominionenterprises.com"; 
            $subject = "Message from Alicia's Motor Sales ";

            $body = "From: $name\n E-Mail: $email\n Message:\n $message";

            $errName = '';
            $errEmail = '';
            $errMessage = '';

            // Check if name has been entered
            if (!$_POST['name']) {
                $errName = 'Please enter your name';
            }

            // Check if email has been entered and is valid
            if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errEmail = 'Please enter a valid email address';
            }

            //Check if message has been entered
            if (!$_POST['message']) {
                $errMessage = 'Please enter your message';
            }

            $success = false;
            // If there are no errors, send the email
            if ($errName == '' && $errEmail == '' && $errMessage == '') {
                if (mail ($to, $subject, $body)) {
                    $success = true;
                } else {
                    $errMessage = 'Message failed to send';
                }
            }
        }

        return [$success, $errName, $errEmail, $errMessage];
	}
}
