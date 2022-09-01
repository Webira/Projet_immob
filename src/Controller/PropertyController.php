<?php
namespace App\Controller;

use App\Entity\Property;
use App\Repository\PropertyRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PropertyController extends AbstractController
 {
            //virsion 2
    /**
     * @var PropertyRepository
     */
    private $repository;
    public function __construct(PropertyRepository $repository){
        $this->repository = $repository;
    }

    /**
     * @Route("/biens", name="property.biens")
     * @return Response
     */  
     // pour recuperermon bien de bdd utiliser Repository:         
             //version 2
    public function index(): Response
    {
        $property=$this->repository->find(1);
     
             //version 1
    /*public function index(): Response
    {
         $repository = $this->getDoctrine()->getRepository(Property::class);
        dump($repository); }-- fin vers 1*/
                     

     //pour faire insert new bien:
      /*   $property = new Property();
        $property->setTitle('Mon bien')
                ->setPrice(200000)
                ->setRooms(4)
                ->setBedrooms(3)
                ->setDescription('Une petite bien')
                ->setSurface(60)
                ->setFloor(4)
                ->setHeat(1)
                ->setCity('Montreuil')
                ->setAddress('15 rue ABD')
                ->setPostalCode('93100');
        $em=$this->getDoctrine()->getManager();
        $em->persist($property);
        $em->flush();*/
    
        return $this->render('property/index.html.twig');
    }

}