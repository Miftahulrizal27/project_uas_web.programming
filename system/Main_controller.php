<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Main_controller
{
    public $base_url;
    public $apppath;
    public function __construct()
    {
        $this->base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $this->base_url .= "://" . @$_SERVER['HTTP_HOST'];
        $this->base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
        $this->apppath = $_SERVER['DOCUMENT_ROOT'];
    }

    public function load_views($file = null,$data=[])
    {
        if(!empty($data)&& is_array($data)){
            foreach($data as $key => $value){
                $$key=$value;
            }
        }
        require_once('./views/' . $file . '.php');
    }
    public function base_url($url=''){
        return $this->base_url.$url;
    }
}
