<?php
namespace App\Controller;

use Twig\Environment;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController {
//Routing avec attributes
    /**
     * @Route("/", name="home")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('pages/home.html.twig');
    }

//Routing avec service.yaml
    /**
     * @var twig\Environment
     */
    /**private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }
    public function index(): Response
    {
        return new Response($this->twig->render('pages/home.html.twig'));
    }*/
}