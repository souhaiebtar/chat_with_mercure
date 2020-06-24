<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mercure\Publisher;
use Symfony\Component\Mercure\Update;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PublisherController
 * @package App\Controller
 */
class PublisherController extends AbstractController
{
    /**
     * @Route("/publish/{topic}", name="publisher", methods={"POST"})
     * @param Publisher $publisher
     * @param $topic
     * @param Request $request
     * @return Response
     */
    public function index(Publisher $publisher, $topic, Request $request)
    {
        $publisher(new Update($topic, $request->getContent(), true));
        return new Response('success');
    }
}
