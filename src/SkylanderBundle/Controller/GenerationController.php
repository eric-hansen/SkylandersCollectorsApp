<?php

namespace SkylanderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class GenerationController
 * @author Eric Hansen
 *
 * @Route("/generation", name="generation")
 */
class GenerationController extends Controller
{
    /**
     * @param int $skylanderId
     * @param int $generationId
     *
     * @Route("/skylander-exists", name="generation.skylander_exists")
     */
    public function skylanderExistsAction($skylanderId, $generationId)
    {
    }

    /**
     * @param int $generationId
     *
     * @Route("/info", name="generation.information")
     */
    public function infoAction($generationId)
    {
    }
}