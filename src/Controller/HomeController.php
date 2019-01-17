<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $images = [
            'summer.jpg',
            'summer_2.jpg',
            'summer_3.jpg',
            'summer_4.jpg',
            'summer_5.jpg',
            'summer_6.jpg',
            'summer_7.jpg',
            'summer_8.jpg',
        ];

        $images_1 = [
            'summer.jpg',
            'summer_2.jpg',
            'summer_3.jpg',
        ];

        $images_2 = [
            'summer_4.jpg',
            'summer_5.jpg',
            'summer_6.jpg',
        ];

        $randomImages = array_merge($images_1,$images_2);

        shuffle($randomImages);

        return $this->render('home/index.html.twig', [
            'images_1' => $images_1,
            'images_2' => $images_2,
            'random_images' => $randomImages,
        ]);
    }
}
