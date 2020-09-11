<?php

namespace App\Controller;

use App\Entity\Phone;
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
            'phones' => $phoneRepository->findAll(),
        ]);
    }

    /**
     * @Route("/phone/{id}", name="phone")
     */
    public function phone(Phone $phone)
    {
        return $this->render('front/phone.html.twig', [
            'phone' => $phone,
        ]);
    }
}
