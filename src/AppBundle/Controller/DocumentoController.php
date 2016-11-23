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
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $documentos = $em->getRepository('AppBundle:Documento')->findAll();

        return $this->render('documento/index.html.twig', array(
            'documentos' => $documentos,
        ));
    }
     */
    /**
     * Finds and displays a Documento entity.
     *
     * @Route("/{id}", name="documento_show")
     * @Method("GET")
     
    public function showAction(Documento $documento)
    {

        return $this->render('documento/show.html.twig', array(
            'documento' => $documento,
        ));
    }
    */
       /**
     * Muestra los datos del trabajo y un boton para finalizar
     *
     * @Route("/{idD}/finalizar/{idDrive}", name="documento_show_finalize")
     * @Method("GET")
     */
   public function showFinalizeAction($idD,$idDrive){
    
        $em = $this->getDoctrine()->getManager();
        $doc = $em->getRepository('AppBundle:Documento')
        ->find($idD);

        $doc->getFinalizado()==false? $finalizado=false:$finalizado=true;
       
       
        return $this->render('documento/finalize.html.twig', array(
            'documento' => $doc, 'finalizado'=>$finalizado,
            'Driveid'=>$idDrive));
        
    }
       /**
     * Finaliza un documento
     *
     * @Route("/{idD}/finalizar/{idDrive}", name="documento_finalize")
     * @Method("POST")
     */
    public function finalizeAction($idD,$idDrive){

        $em = $this->getDoctrine()->getManager();
        $doc = $em->getRepository('AppBundle:Documento')
        ->find($idD);
        $doc->setFinalizado(1);
        $em->persist($doc);
        $em->flush();
       
        $url="https://script.google.com/macros/s/AKfycbwrnQZvKghG1pEMJalGA_HJEuh3XDNLo4JI42eILdc1ojEBWAXY/exec?id=".urldecode($idDrive);
          $curl_request = curl_init($url);
         curl_setopt($curl_request, CURLOPT_FOLLOWLOCATION, true);
        $result = curl_exec($curl_request); // execute the request


        curl_close($curl_request);
        return $this->redirect($this->generateUrl('documento_show_finalize',array('idD'=>$idD,'idDrive'=>$idDrive)));
      ;
    }

    /**
     * Genera pdf de todos los documentos
     *
     * @Route("/generarpdf", name="generar_pdf")
     * @Method("GET")
     */
    public function showgeneratePdfAction(){

       $urls="https://script.google.com/macros/s/AKfycbyULV56uZrikYMBxFmf_ZREZK7wks6GHDEama2b9rofMmPQSbfK/exec";
         
       $result= file_get_contents($urls);
         return $this->render('documento/desc.html.twig', array('link' => $result));
        
    }

      /**
     * Genera pdf de todos los documentos
     *
     * @Route("/generarpdf", name="action_generar_pdf")
     * @Method("post")
     */
    public function generatePdfAction(){

        
     return $this->redirectToRoute('generar_pdf');
        
    }


   
}
