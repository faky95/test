<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdvertController extends Controller
{
    public function addAction()
    {
        return $this->render('OCPlatformBundle:Advert:add.html.twig', array(
            'NOM'=>'FAKY LOUCAR'
        ));
    }

}
