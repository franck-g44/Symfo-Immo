<?php

namespace App\Controller;

use App\Entity\Property;
use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{
    /**
     * @var PropertyRepository
     */
    private $repository;

    public function __construct(PropertyRepository $repository)
    {

        $this->repository = $repository;
    }

    /**
     * @Route("/biens", name="property.index.html.twig")
     * @return Response
     */

    public function index(): Response
    {
        return $this->render('property/index.html.twig', [
            'current_menu' => 'properties'
        ]);
    }

    /**
     * @Route("/biens/{id}", name="property/show.html.twig", requirements={"id": "[a-z0-9\-]*"})
     * @param Property $property
     * @return Response
     */
    public function show(Property $property): Response
    {

        return $this->render('property/show.html.twig', [
            'property' => $property,
            'current_menu' => 'properties'
]);
    }
}