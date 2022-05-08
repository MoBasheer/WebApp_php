<?php

class App{

    var $controller = 'HomeController';
    var $method = 'index';
    var $params = [];

    //This class contains controller, method, & params
    //attributes, initialized with default values.
    public function __construct(){
        $url = $this->parseURL();


        if(file_exists('./controllers/' . $url[0] . 'Controller.php')){
            $this->controller = $url[0] . 'Controller';
            unset($url[0]);
        }
        
        
        require_once 'controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller();
        
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }


        $this->params = $url ? array_values($url) : [];

        // var_dump($this->controller);
        // echo '<br />';
        // var_dump($this->method);
        // echo '<br />';
        // var_dump($this->params);
        // echo '<br />';

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function parseUrl(){
        if(isset($_GET['url'])){
            return $url = [
                explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL))[0],
                $_SERVER['REQUEST_METHOD'],
                array_shift($_REQUEST)
            ];
        }
    }
}
?> 