<?php
$request=new request;
$data=$request->getData();
$usermodel=new userModel();
$result=$usermodel->update($data);
var_dump($result);
if($result){
    echo"user updated*-*";
}