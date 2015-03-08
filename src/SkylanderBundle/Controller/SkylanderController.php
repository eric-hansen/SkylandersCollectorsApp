<?php

namespace SkylanderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class SkylanderController
 * @author Eric Hansen
 *
 * @Route("/skylander", name="skylander")
 */
class SkylanderController extends Controller
{
    /**
     * @param int $skylanderId
     *
     * @Route("/view", name="skylander.view")
     */
    public function viewAction($skylanderId = 0)
    {
    }

    /**
     * When we get a SKylander we want to know that we have it, so we check it off here.
     *
     * @param int $skylanderId
     * @param int $generationId
     *
     * @Route("/check-off", name="skylander.check_off")
     */
    public function checkOffAction($skylanderId, $generationId)
    {
    }

    /**
     * @param int $skylanderId
     *
     * @Route("/get-type", name="skylander.get_type")
     */
    public function getSkylanderTypeAction($skylanderId)
    {
    }
}