<?php

/* This class contains controller, method, & params. 
This attributes are initialized with default values. */
class App
{
    // Initializes an object properties when the object is created.
    public function __construct()
    {
        $router = new Router();
        $this->controller = $router->route(filter_var($_REQUEST['url'], FILTER_SANITIZE_URL));
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->params = array_slice($_REQUEST, 1);

        call_user_func_array([$this->controller, $this->method], [$this->params]);
    }
}
