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

        $template = match ($code) {
            404 => '@CustomError/Bundles/TwigBundle/Exception/error404.html.twig',
            403 => '@CustomError/Bundles/TwigBundle/Exception/error403.html.twig',
            default => '@CustomError/Bundles/TwigBundle/Exception/error.html.twig',
        };

        $response = $this->render($template, [
            'exception' => $exception,
            'code' => $code,
        ]);

        $response->setStatusCode($code);

        return $response;
    }
}
