<?php
class routerList{
  public static function getRout($id,$data){
      return [
        "/MVC4/user"=>[router::getObj(),"all"],
        "/MVC4/userForm"=>[router::getObj(),"insert",$data],
        "/MVC4/deleteUser/{id}"=>[router::getObj(),"delete",$id],
        "/MVC4/editUserForm/{id}"=>[router :: getObj() , "edit" , $id],
        "/MVC4/updateUser" =>[router :: getObj() , "send4"],
        "/MVC4/profile/{user}" =>[router :: getObj() , "send5"],
      ]; 
    }
}