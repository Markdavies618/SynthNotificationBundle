<?php

namespace Synth\NotificationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('SynthNotificationBundle:Default:index.html.twig', array('name' => $name));
    }
}
