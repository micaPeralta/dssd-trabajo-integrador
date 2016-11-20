<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Documento;
use AppBundle\Entity\Trabajo;

/**
 * Documento controller.
 *
 * @Route("/documento")
 */
class DocumentoController extends Controller
{
    /**
     * Lists all Documento entities.
     *
     * @Route("/", name="documento_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $documentos = $em->getRepository('AppBundle:Documento')->findAll();

        return $this->render('documento/index.html.twig', array(
            'documentos' => $documentos,
        ));
    }

    /**
     * Finds and displays a Documento entity.
     *
     * @Route("/{id}", name="documento_show")
     * @Method("GET")
     */
    public function showAction(Documento $documento)
    {

        return $this->render('documento/show.html.twig', array(
            'documento' => $documento,
        ));
    }

       /**
     * Muestra los datos del trabajo y un boton para finalizar
     *
     * @Route("/{id}/finalizar", name="documento_show_finalize")
     * @Method("GET")
     */
   public function showFinalizeAction($id){
    
        $em = $this->getDoctrine()->getManager();
        $doc = $em->getRepository('AppBundle:Documento')
        ->find($id);

        $doc->getFinalizado()==false? $finalizado=false:$finalizado=true;

       
        return $this->render('documento/finalize.html.twig', array(
            'documento' => $doc, 'finalizado'=>$finalizado));
        
    }

       /**
     * Finaliza un documento
     *
     * @Route("/{id}/finalizar", name="documento_finalize")
     * @Method("POST")
     */
    public function finalizeAction($id){

        $em = $this->getDoctrine()->getManager();
        $doc = $em->getRepository('AppBundle:Documento')
        ->find($id);
        $doc->setFinalizado(1);
        $em->persist($doc);
        $em->flush();
        return $this->redirect($this->generateUrl('documento_show_finalize',array('id'=>$id)));
    }
}
