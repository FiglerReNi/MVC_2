<?php

class Core{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params =  [];
    protected $url =  [];

    public function __construct()
    {
        $this->getUrl();

        if(!empty($this->url)){
             $this->doController();
        }

        require_once '../app/controllers/' . $this->currentController . '.php';
        $this->currentController = new $this->currentController;

        if(isset($this->url[1])){
           $this->doMethod();
        }

        $this->doParams();

        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $this->url = explode('/', $url);
        }
    }


    public function doController(){
        if(file_exists('../app/controllers/' . ucwords($this->url[0]) . '.php')){
            $this->currentController = ucwords($this->url[0]);
            unset($this->url[0]);
        }
    }

    public function doMethod(){
        if(method_exists($this->currentController, $this->url[1])){
            $this->currentMethod = $this->url[1];
            unset($this->url[1]);
        }
    }

    public function doParams(){
        $this->params = $this->url ?  array_values($this->url) : [];
    }
}