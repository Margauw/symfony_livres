<?php

namespace Devschool\BiblioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('BiblioBundle:Default:index.html.twig');
    }

    /**
     * @Route("/livres", name="page_livres")
     */
    public function listAction()
    {
        $livres = $this->getDoctrine()->getRepository('BiblioBundle:Livre')->findAll();
        $titre_de_la_page = 'Livres de la bibliothèques';


        return $this->render(
            'BiblioBundle:Livre:list.html.twig',
            ['livres' => $livres, 'titre' => $titre_de_la_page]
        );
    }

    /**
     * @Route("/livre/{id}", requirements={"id": "\d+"}, name="page_livre")
     */
    public function showAction($id)
    {
        $livre = $this->getDoctrine()->getRepository('BiblioBundle:Livre')->find($id);

        return $this->render(
            'BiblioBundle:Livre:show.html.twig',
            ['livre' => $livre]
        );
    }
}
