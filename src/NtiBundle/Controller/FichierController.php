<?php

namespace NtiBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use NtiBundle\Entity\Fichier;
use NtiBundle\Form\FichierType;

/**
 * Fichier controller.
 *
 * @Route("/fichier")
 */
class FichierController extends Controller
{
    /**
     * Lists all Fichier entities.
     *
     * @Route("/", name="fichier_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fichiers = $em->getRepository('NtiBundle:Fichier')->findAll();

        return $this->render('fichier/index.html.twig', array(
            'fichiers' => $fichiers,
        ));
    }

    /**
     * Creates a new Fichier entity.
     *
     * @Route("/new", name="fichier_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $fichier = new Fichier();
        $form = $this->createForm('NtiBundle\Form\FichierType', $fichier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            //modif pour upload
            $entity->upload();
            $em->persist($fichier);
            $em->flush();

            return $this->redirectToRoute('fichier_show', array('id' => $fichier->getId()));
        }

        return $this->render('fichier/new.html.twig', array(
            'fichier' => $fichier,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Fichier entity.
     *
     * @Route("/{id}", name="fichier_show")
     * @Method("GET")
     */
    public function showAction(Fichier $fichier)
    {
        $deleteForm = $this->createDeleteForm($fichier);

        return $this->render('fichier/show.html.twig', array(
            'fichier' => $fichier,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Fichier entity.
     *
     * @Route("/{id}/edit", name="fichier_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Fichier $fichier)
    {
        $deleteForm = $this->createDeleteForm($fichier);
        $editForm = $this->createForm('NtiBundle\Form\FichierType', $fichier);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fichier);
            $em->flush();

            return $this->redirectToRoute('fichier_edit', array('id' => $fichier->getId()));
        }

        return $this->render('fichier/edit.html.twig', array(
            'fichier' => $fichier,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Fichier entity.
     *
     * @Route("/{id}", name="fichier_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Fichier $fichier)
    {
        $form = $this->createDeleteForm($fichier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($fichier);
            $em->flush();
        }

        return $this->redirectToRoute('fichier_index');
    }

    /**
     * Creates a form to delete a Fichier entity.
     *
     * @param Fichier $fichier The Fichier entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Fichier $fichier)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fichier_delete', array('id' => $fichier->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
