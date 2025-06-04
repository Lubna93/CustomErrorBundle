<?php

namespace CustomError\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\ErrorHandler\Exception\FlattenException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Attribute\AsController;

#[AsController]
class ErrorController extends AbstractController
{
    #[Route('/_error/{code}', name: 'custom_error_show')]
    public function show(FlattenException $exception): Response
    {
        $code = $exception->getStatusCode();

        if ($code === 404) {
            return $this->render('@CustomError/Bundles/TwigBundle/Exception/error404.html.twig', [], new Response('', 404));
        }

        return $this->render('@CustomError/Bundles/TwigBundle/Exception/error.html.twig', ['code' => $code], new Response('', $code));
    }
}
