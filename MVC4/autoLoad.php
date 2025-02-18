<?php
class autoLoad{
    public static function autoLoad($class){
    $className=$class.".php";
    if($class=='builder'){
        $className="app/builder/$class.php";
    }
    if($class=='app'||$class=='vaset'){
        $className="app/$class.php";
    
    }
    if($class=='ertebat'){
         $className="app/$class.php";
    
    }
    if($class=='userController'||$class=='productController'||$class=='categoryController'){
        $className="controller/$class.php";
    }
    if($class=='userModel'||$class=='mainDb'){
        $className="model/$class.php";
    }
    if($class=='loadView'||$class=='view'||$class=='userForm'){
        $className="view/$class.php";
    }
    if(file_exists($className)){
        // var_dump($className);
        include "$className";
    }else{
        die("class** $class **notfound!!!!");
    }

    }

    }
spl_autoLoad_register(['autoload','autoLoad']);
?>