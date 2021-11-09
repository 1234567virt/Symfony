<?php

namespace App\Controller;
use App\Entity\Request;
use App\Repository\RequestRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route ("/request")
 */
class RequestController extends AbstractController
{
    /**
     * @Route ("/list", name="request.list")
     */
    public function getListAction(RequestRepository $requestRepository): Response
    {

        $requestList = $requestRepository->findAll();

    return $this->render('request/list.html.twig', [
        'requestList' => $requestList
    ]);
    }

    /**
     * @Route ("/show/{id}", name="request.show")
     */
    public function showAction(int $id, RequestRepository $requestRepository) : Response
    {
        $request = $requestRepository->findById($id);
        return $this->render('request/show.html.twig', [
           'request'=> $request
        ]);
    }
}