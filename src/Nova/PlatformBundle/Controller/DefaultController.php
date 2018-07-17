<?php

namespace Nova\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@NovaPlatform/Default/index.html.twig');
    }
}
