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

    public function menuAction() {
        $em = $this->getDoctrine()->getManager();
        $query = $em->getConnection()->prepare('SELECT c.id,c.nom,p.id,p.titre FROM page p
        INNER JOIN categorie c ON c.id = p.categorie_id');
        $query->execute();

        $categories = array();
        foreach ($query->fetchAll() as $row) {
            if(! array_key_exists($row["nom"], $categories)) {
                $categories[$row["nom"]] = array();
            }

            array_push($categories[$row["nom"]], $row);
        }

        return $this->render('NtiBundle:Default:menu.html.twig', array('categories' => $categories));
    }
}
