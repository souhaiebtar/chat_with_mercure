<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mercure\Publisher;
use Symfony\Component\Mercure\Update;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;

/**
 * Class PublisherController
 * @package App\Controller
 */
class PublisherController extends AbstractController
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    /**
     * @Route("/publish/{topic}", name="publisher", methods={"POST"})
     * @param Publisher $publisher
     * @param $topic
     * @param Request $request
     * @return Response
     */
    public function index(Publisher $publisher, $topic, Request $request)
    {
        $this->logger->info('run publisher controller');
        $publisher(new Update($topic, $request->getContent(), true));
        return new Response('success');
    }
}
