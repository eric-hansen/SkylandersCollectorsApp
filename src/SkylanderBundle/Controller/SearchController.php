<?php

namespace SkylanderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class SearchController
 * @author Eric Hansen
 *
 * @Route("/search", name="search")
 */
class SearchController extends Controller
{
    /**
     * @param string $type
     *
     * @Route("/type", name="search.skylander_type")
     */
    public function skylanderTypeAction($type = '')
    {
    }

    /**
     * @param string $name
     *
     * @Route("/name", name="search.skylander_names")
     */
    public function skylanderNameAction($name)
    {
    }
}