<?php
class userController {
    public static $objModel;
    public static function getObj(object $model){
        self :: $objModel =$model;
    }
    public function all() {
        $allData=self :: $objModel->select();
        // var_dump($allData);
        loadView :: view("view.php" , $allData);
    }
    public function insert($data){
        $result=self :: $objModel->insert($data);
        if($result){
        loadView::view("userForm.php");
        }
    }
    // public function send1($adress){
    //     if($adress=="create"){
    //     loadView::view("create.php");
    //     }
    // }
    public function delete($id){
        // var_dump($id);
        $result=self :: $objModel->delete($id);
        if($result){
        loadView::view("deleteResult.php");
        }
    }
    public function edit($id){
        $result=self :: $objModel->find($id);
        if($result){
        loadView::view("editUserForm.php");
        }
    }
    public function send4($adress){
        if($adress=="updateUser"){
        
        loadView::view("updateUser.php");
        }
    }
    public function send5($adress){
        if($adress=="profile"){
        loadView::view("middelWare.php");
        }
    }
    // public function send6($adress){
    //     if($adress=="logForm"){
        
    //     loadView::view("logForm.php");
    //     }
    // }
    public  static function sendData($data){
        // var_dump($data);
        self::$objModel -> insert($data);
        echo"inserted";
    }

}
$userModel=new userModel();
userController :: getObj($userModel);