<?php
class vaset implements ertebat{
  public $request;
  public $url;
  // function __construct(){
  //   $this -> reset();
  //   // $this -> callUri();
  // }
  // public function reset(){
    // $this -> request = new request();
  // }
  // میتونیم استاتیک کلاس رو تو وسظ اینا قرار بدیم
  public function getUri(request $obj){
    return $obj -> get();
  }
  public function callUri(){
    $this->request=container::$container['request']();
    $this -> url = $this -> getUri( $this->request);
    router :: callMethod($this -> url,$this->request->getId(),$this->request->getData());
  }
  

}