<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class GalleryController extends Controller
{
    /**
     * @Route("/gallery", name="gallery")
     */
    public function index(Request $request)
    {
        $images = [
            'summer.jpg',
            'summer_2.jpg',
            'summer_3.jpg',
            'summer_4.jpg',
            'summer_5.jpg',
        ];

        /* @var $paginator \Knp\Component\Pager\Paginator */
        $paginator  = $this->get('knp_paginator');

        // Paginate the results of the query
        $images_data = $paginator->paginate(
            // Data
            $images,
            // Define the page parameter
            $request->query->getInt('diff', 1),
            // Items per page
            3
        );

        return $this->render('gallery/index.html.twig', [
            'images' => $images_data
        ]);
    }
}
