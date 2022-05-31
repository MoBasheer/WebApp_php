<?php

class App
{
    /* This class contains controller, method, & params. 
    This attributes are initialized with default values. */
    var $controller = 'HomeController';
    var $method = 'get';
    var $params = [];



    // Initializes an object properties when the object is created.
    public function __construct()
    {
        $router = new Router();

        $this->controller = $router->route($_REQUEST['url']);
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->params = array_slice($_REQUEST, 1);


        call_user_func_array([$this->controller, $this->method], [$this->params]);

        // //Get the user input from the url and parse it.
        // $url = $this->parseURL();

        // echo 'bla';

        // var_dump($url);
        // //Based on user input (url), check if controller exist
        // if (file_exists(APPLICATION_PATH . '/controllers/' . $url[0] . 'Controller.php')) {
        //     $this->controller = $url[0] . 'Controller';
        //     unset($url[0]);
        // } else if ($url[0] == '') {
        //     unset($url[0]);
        // } else {
        //     //return page not found
        //     header('location:/notfound');
        //     return;
        // }
        // echo 'bla';


        // require_once APPLICATION_PATH . '/controllers/' . $this->controller . '.php';
        // $this->controller = new $this->controller();
        // echo 'bla';

        // //check exist method 
        // if (isset($url[1]) && method_exists($this->controller, $url[1])) {
        //     $this->method = $url[1];
        //     unset($url[1]);
        // } else {
        //     //return 403 error
        //     http_response_code(403);
        // }

        // $this->params = $url ? array_values($url) : [];
        // call_user_func_array([$this->controller, $this->method], $this->params);


        // var_dump($url);
        // echo '<br />';
        // var_dump($this->controller);
        // echo '<br />';
        // var_dump($this->method);
        // echo '<br />';
        // var_dump($this->params);
        // echo '<br />';
        //     var_dump($this->parseUrl());
        //     echo '<br />';
        // }
    }
    // private function parseUrl()
    // {
    //     if (isset($_GET['url'])) {
    //         return [
    //             explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL))[0],
    //             $_SERVER['REQUEST_METHOD'],
    //             array_slice($_REQUEST, 1)
    //         ];
    //     }
    // }
}
