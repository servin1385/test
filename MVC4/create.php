<?php
// include "request.php";
class create{
    public function getData(request $objRequ){
      $data=$objRequ->getData();
      // var_dump($objRequ);
  userController::sendData($data);
      //  $this->sendData($data);
    }
  //   public function sendData($data){
  // //  $userModel=new userModel();
  // //  $userModel->insert($data);
  //   }
}
$create=new create();
$create->getData(new request);
