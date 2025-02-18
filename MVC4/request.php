<?php
class request{
  public  $url;
  public  $urlArray;
  public  $uri;
  // public $data;
  // function __construct(){
  //   $this -> get();
  // } 
  public function get(){
   return $this -> url = $_SERVER['REQUEST_URI'];
    // $this -> getData();
    // $this -> parsUrl();
    // $this -> call();
  }
  public  function parsUrl(){
    return $this -> urlArray = explode('/' , $this -> url);
  }
  public function getData(){
     return  $_POST;
  }
  public function getId(){
   $this->uri=$this->parsUrl();
   return $this->uri[count($this->uri)-1] ? $this->uri[count($this->uri)-1]:null;
  }
  // public function call(){
  //  $adress = $this -> urlArray[2];
  // }
}
$request=container::$container['request']();