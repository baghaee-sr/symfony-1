<?php


namespace App\Controller;


//use http\Env\Response;
use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController
{

    public function home()
    {
        $articles=$this->getDoctrine()
            ->getRepository(Article::class)
            ->findAll();

        $namep="first project";
        return $this->render('index.html.twig', ["namepro"=>$namep , "Articles"=>$articles]);
    }

}