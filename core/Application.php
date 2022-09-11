<?php

namespace app\core;

class Application {
    public Router $router;

    public function __construct()
    {
        return $this->router = new Router();
    }
}