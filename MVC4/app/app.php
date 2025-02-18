<?php
class app{
  public $vaset; 
  function __construct(){
    $this -> reset();
  }
  public  function reset(){
    // $this -> vaset = new vaset();
    $vaset = container::$container['vaset']();
    $vaset -> callUri();
  }
}