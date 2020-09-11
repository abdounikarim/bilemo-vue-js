<?php

namespace App\Controller;

use App\Repository\PhoneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('front/index.html.twig');
    }

    /**
     * @Route("/phones", name="phones")
     */
    public function phones(PhoneRepository $phoneRepository)
    {
        return $this->render('front/phones.html.twig', [
            'phones' => $phoneRepository->findAll()
        ]);
    }
}
