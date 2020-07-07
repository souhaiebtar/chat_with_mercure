<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;

/**
 * Class ChatController
 * @package App\Controller
 */
class ChatController extends AbstractController
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    /**
     * @Route("/chat", name="chat")
     */
    public function index()
    {
        $this->logger->info('run chat controller');
        return $this->render('chat/index.html.twig', [
            'config' => [
                'topic' => 'chat',
                'publishRoute' => $this->generateUrl('publisher', ['topic' => 'chat'])
            ]
        ]);
    }
}
