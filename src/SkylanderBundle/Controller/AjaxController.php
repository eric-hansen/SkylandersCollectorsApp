<?php

namespace SkylanderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class AjaxController
 * @author Eric Hansen
 *
 * @Route("/ajax-requests", name="ajax_requests")
 */
class AjaxController extends Controller
{
    /**
     * @param string $name
     */
    public function searchTypeAction($name = '')
    {
    }

    /**
     * @param int $skylanderId
     *
     * @Route("/has-skylander", name="ajax_requests.has_skylander")
     */
    public function hasSkylanderAction($skylanderId)
    {
    }
}