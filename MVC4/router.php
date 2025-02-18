<?php
class router{
  public static $rout;
  public static function getObj(){
    return  new userController;
  }

  public static function callMethod($url ,$id , $data){
  $rout = routerList::getRout($id,$data);
  // $rout = routerList:: getRout();
  //  echo $string = json_encode($routes);
  //  router :: get_string($routes);
  // var_dump($implode);
  // echo $y = strpos($string , "}");

 

  foreach($rout as $key => $value){
    $x = str_contains($key, "{");
    if($x){
      $singleRouteArray = explode('/' , $key);
      foreach($singleRouteArray as $array){
        $c = str_contains($array , "{");
        echo "</br>";
        if($c){
           $z = strpos($array , "{");
          $zz = strpos($array , "}");
          echo substr($array , $z+1 , -1);
      
        }

      }
    }
    if($url == $key){
      $class = $value[0];
      $method = $value[1];
      // var_dump($value[1]);
      $class -> $method();
    }
  
  }

  
}
  // public static function get_string($routes){
  //   echo join($routes[$key]);
  // }
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  // public static function callMethod($url,$id,$data){
  // $x=router::post($id,$data);
  // switch($url){
  //   case $x[$url][0]:
  //     echo "sa";
  //     // var_dump($url);
  //     // $routes[$key][0];
  //     break;
  //     // case'/MVC4/user':
        // echo"kh";
  //     //   break;
  // }
  // }







// public static function callMethod($url,$id,$data){
//   $routes=self::post($id,$data);
//   if (array_key_exists($url,$routes)){
//     // var_dump($url);
//     $class=$routes[$url][0];
//     $method=$routes[$url][1];
//     // $class->$method();
//     if($routes[$url][1]){
//       $class->$method($data);
//     }
//     if($routes[$url][2]||$routes[$url][3]){
//       // var_dump($routes[$url][2]);
//       // var_dump($id);
//       $class->$method($id);
//     }
//     }
//   }

  }










  //   $routes = [
  //   "user" => [new userController , "all"], 
  //   "product" => [new productController , "all"],
  //   "category" => [new categoryController , "all"]  
  // ];
  // if(self ::$url[2]=="userForm"){
  //   self::getObj()->send($url[2]);
  // }
  // if(self ::$url[2]=="create"){
  //   self::getObj()->send1($url[2]);
  // }
  // if(self ::$url[2]=="deleteUser"){
  //   self::getObj()->send2($url[2]);
  // }
  // if(self ::$url[2]=="editUserForm"){
  //   self::getObj()->send3($url[2]);
  // }
  // if(self ::$url[2]=="updateUser"){
  //   self::getObj()->send4($url[2]);
  // }
  // if(self ::$url[2]=="profile"){
  //   self::getObj()->send5($url[2]);
  // }
  // if(self ::$url[2]=="logForm"){
  //   self::getObj()->send6($url[2]);
  // }
  // if (array_key_exists($url[2],$routes)){
  //   $class=$routes[$url[2]][0];

  //   $method=$routes[$url[2]][1];
    
  //   $class->$method();
  //   }
  // foreach($routes as $key => $value){
  //   if(self :: $url[2] == $key){
  //     $class = $routes[$key][0];
  //     $method = $routes[$key][1];
  //     $class -> $method();
  //   }
  // }
 
   
  

