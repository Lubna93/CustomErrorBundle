# CustomErrorBundle

**Customizable error pages for Symfony 6.2 and 7+**  
This bundle replaces Symfony’s default error pages (404, 403, 500, etc.) with user-friendly Twig templates.

## Features

- Handles 404, 403, 500, 401 and other HTTP errors  
- Shows a login prompt for 401 errors  
- Custom Twig templates  

## Installation

Install the bundle via Composer:

    composer require lubna/custom-error-bundle

## 🔧 Configuration

### 1. Register the bundle

In `config/bundles.php`:

    return [
        CustomError\Bundle\CustomErrorBundle::class => ['all' => true],
    ];

If you want the bundle to be active only in production, you can use:

    return [
        CustomError\Bundle\CustomErrorBundle::class => ['prod' => true],
    ];

### 2. Register the error controller

In `config/services.yaml`:

    services:
        CustomError\Bundle\Controller\ErrorController:
            tags: ['controller.service_arguments']

## Author

Made with ❤️ by [Lubna](https://github.com/Lubna93)  
Feel free to contribute, fork, or open issues.
