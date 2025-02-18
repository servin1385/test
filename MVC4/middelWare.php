<?php
class middleWare{
    public $token;
    public static function handleCookie(){
        $token=$_COOKIE['token'];
        if($token){
        echo"وارد شودید";
        }else{
            echo"واردنشدید";
            loadView::view("logForm.php");
        }
    }
}
container::bind(middleWare::class,middleWare::class);
$middelWare=container::resolve('middleWare');
$middelWare->handleCookie();