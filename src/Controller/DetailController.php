<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DetailController extends Controller
{
    /**
     * @Route("/view", name="view")
     */
    public function index()
    {
        $image = 'summer_3.jpg';

        return $this->render('detail/index.html.twig', [
            'image' => $image,
        ]);
    }
}
