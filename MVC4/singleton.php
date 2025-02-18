<?php
class singleton{
    private static $instance=[];
    private function __construct(){}
    public static function getInstance(string $instanceName){

        if(!isset(self :: $instance[$instanceName])){
            
          return  self::$instance[$instanceName]= new $instanceName();
        }
        else{
            echo "$instanceName not exist";

        }
    }
}






























// interface singleInterface{
//     public static function getInstance();} 
// class singleton implements singleInterface{
//     private static $instance;
//     private function __construct(){}
//     public static function getInstance(){
//         $class = static::class;
//         if(self :: $instance == null){
//             self::$instance[$class]= new static();
//         }
//     }
// }
?>
