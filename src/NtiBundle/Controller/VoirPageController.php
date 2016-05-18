<?php

namespace NtiBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use NtiBundle\Entity\Page;
use NtiBundle\Form\PageType;

/**
 * Page controller.
 *
 * @Route("/page")
 */
class VoirPageController extends Controller
{
    /**
     * @Route("/{id}", name="voir_page")
     * @Method("GET")
     */
    public function indexAction(Page $page)
    {
        return $this->render('NtiBundle:Default:page.html.twig', array(
            'page' => $page
        ));
    }
}
