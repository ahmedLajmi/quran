<?php


namespace App\Controller;


use App\Entity\Page;
use App\Entity\Soura;
use Doctrine\Common\Collections\ArrayCollection;
use League\Csv\Reader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class indexController extends AbstractController
{


    /**
     * @Route("/",name="index")
     */
    public function index()
    {
        return $this->render("index.html.twig");
    }


    /**
     * @Route("/test",name="test")
     * @throws \League\Csv\Exception
     */
    public function execute ()
    {




        return $this->render("index.html.twig");

    }





//$this->em->flush();


}