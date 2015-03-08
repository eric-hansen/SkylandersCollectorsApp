<?php

namespace SkylanderBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class DefaultController
 * @author Eric Hansen
 *
 * @Route("/")
 */
class IndexController extends Controller
{
    /**
     * @Route(name="welcome_page")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }
}
