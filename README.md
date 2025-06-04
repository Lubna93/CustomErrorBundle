# CustomErrorBundle

**Beautiful and customizable error pages for Symfony 7+.**  
This bundle replaces Symfony’s default error pages (404, 403, 500, etc.) with user-friendly Twig templates.

## Features

- Handles 404, 403, 500, 401 and other HTTP errors  
- Shows a login prompt for 401 errors  
- Custom Twig templates  

## Installation

Require the bundle via Composer:

    composer require lubna/custom-error-bundle

## 🔧 Configuration

### 1. Register the bundle

In `config/bundles.php`:

    return [
        CustomError\Bundle\CustomErrorBundle::class => ['all' => true],
    ];

### 2. Register the error controller

In `config/services.yaml`:

    services:
        CustomError\Bundle\Controller\ErrorController:
            tags: ['controller.service_arguments']

    framework:
        error_controller: CustomError\Bundle\Controller\ErrorController::show

### 3. Register the bundle views (Twig path)

In `config/packages/twig.yaml`:

    twig:
        paths:
            '%kernel.project_dir%/vendor/lubna/custom-error-bundle/src/Resources/views': CustomError

## Author

Made with ❤️ by [Lubna Altungi](https://github.com/Lubna93)  
Feel free to contribute, fork, or open issues.
