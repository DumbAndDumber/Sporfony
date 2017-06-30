<?php

namespace SporFonyBundle\Controller;

use SporFonyBundle\Entity\Slot;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Slot controller.
 *
 */
class SlotController extends Controller
{
    /**
     * Lists all slot entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $slots = $em->getRepository('SporFonyBundle:Slot')->findAll();

        return $this->render('slot/index.html.twig', array(
            'slots' => $slots,
        ));
    }

    /**
     * Creates a new slot entity.
     *
     */
    public function newAction(Request $request)
    {
        $slot = new Slot();
        $form = $this->createForm('SporFonyBundle\Form\SlotType', $slot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($slot);
            $em->flush();

            return $this->redirectToRoute('slot_show', array('id' => $slot->getId()));
        }

        return $this->render('slot/new.html.twig', array(
            'slot' => $slot,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a slot entity.
     *
     */
    public function showAction(Slot $slot)
    {
        $deleteForm = $this->createDeleteForm($slot);

        return $this->render('slot/show.html.twig', array(
            'slot' => $slot,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing slot entity.
     *
     */
    public function editAction(Request $request, Slot $slot)
    {
        $deleteForm = $this->createDeleteForm($slot);
        $editForm = $this->createForm('SporFonyBundle\Form\SlotType', $slot);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('slot_edit', array('id' => $slot->getId()));
        }

        return $this->render('slot/edit.html.twig', array(
            'slot' => $slot,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a slot entity.
     *
     */
    public function deleteAction(Request $request, Slot $slot)
    {
        $form = $this->createDeleteForm($slot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($slot);
            $em->flush();
        }

        return $this->redirectToRoute('slot_index');
    }

    /**
     * Creates a form to delete a slot entity.
     *
     * @param Slot $slot The slot entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Slot $slot)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('slot_delete', array('id' => $slot->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
