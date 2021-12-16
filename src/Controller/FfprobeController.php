<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use FFMpeg;

class FfprobeController extends AbstractController
{
    private $ffprobe;

    public function __construct(LoggerInterface $logger){
        $this->ffprobe = FFMpeg\FFProbe::create();
        $this->logger = $logger;
    }

    #[Route('/ffprobe', name: 'ffprobe', methods: ['POST'])]
    public function index(Request $request): Response
    {
        $data = $request->getContent();
        $url = json_decode($data)->url;
        $metadata = $this->ffprobe->streams($url);
        return new Response(serialize($metadata));
    }
}
