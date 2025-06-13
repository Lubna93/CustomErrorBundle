<?php

namespace CustomError\Bundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CustomErrorBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
