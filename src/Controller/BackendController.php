<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class BackendController extends AbstractController
{
    #[Route('/admin', name: 'backend')]
    public function index(Request $request) {
        return $this->render('backend/index.html.twig', [
            'controller_name' => 'BackendController',
            'title' => 'Backend',
            'loggedIn' => false,
//            'loggedUser' => $this->getUser()
        ]);
    }

    public function dataManagement(Request $request) {

    }
}