<?php

namespace NtiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->getConnection()->prepare('SELECT a.*,u.nom,u.prenom FROM actualite a INNER JOIN user u ON u.id = a.user_id ORDER BY a.date DESC LIMIT 1');
        $query->execute();

        return $this->render('NtiBundle:Default:index.html.twig', array('actu' => $query->fetch()));
    }
}
