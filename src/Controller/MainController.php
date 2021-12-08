<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Repository\CategoriesRepository;
use App\Repository\SeriesRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main_home")
     */
    public function index(SeriesRepository $repository): Response
    {
        $series = $repository->findAll();

        return $this->render('main/list.html.twig', [
            'series' => $series,
        ]);
    }

    /**
     * @Route("/detail/{id}", name="main_detail")
     */
    public function details(SeriesRepository $repository, int $id): Response
    {
        $serie = $repository->find($id);

       return $this->render('main/detail.html.twig', [
            'serie' => $serie,
        ]);
    }
}
