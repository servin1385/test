<?php
// به کلاسی که اینترفیس رو پیاده سازی کرده concreate classمیگیم 
class container extends singleton{
    public static $container;
    public static function bind($key, $value){
        $closure = self::getClosure($value);
        self::$container[$key] = $closure;
    }
    public static function getClosure($funcName){
        return function() use ($funcName){return new $funcName;};
    }
    public static function resolve(string $instanceName){
            //  bind::getBind();
     return parent::getInstance($instanceName);
    }
}



























    //    if(self::$container[$instanceName]==null){
    //         return $instance=container::bind($instanceName,$instanceName);
    //     } 
    //     else{
    //         return self::$container[$instanceName]();
    //     }
    
    // public static function resolve(string $instanceName){
    //     if(isset(self::$container[$instanceName])){
    //         return self::$container[$instanceName]();
    //     }
    //     else{
    //         $instance=container::bind($instanceName,$instanceName);
    //         return $instance;
    //     }
    // }
// }
container::bind(app::class ,app::class);

// $x=container::bind(app::class ,app::class);

// $y=container::bind(app::class ,app::class);
// if($x===$y){
//     echo "1";
// }
container::bind(vaset::class ,vaset::class);
container::bind(request::class ,request::class);