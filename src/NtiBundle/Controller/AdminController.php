<?php

namespace NtiBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Admin controller.
 *
 * @Route("/admin")
 */
class AdminController extends Controller
{
	/**
     * @Route("/", name="admin_index")
	 */
    public function indexAction()
    {
        return $this->render('NtiBundle:Admin:index.html.twig');
	}
	 }
