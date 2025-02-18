<?php
class loadView{
    public static function view ($fileName , $data = null){
        // $fileName=$fileName.".php";
        // var_dump($fileName);
        if($fileName){
            include "menue.php";

            include "$fileName";
        }
    }
}