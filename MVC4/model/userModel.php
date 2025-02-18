<?php
class userModel extends mainDb{
    public $table='user';
    public function insert($data){
        // var_dump($data);
        $name=$_POST['name'];
        $age=$_POST['password'];
        $query="INSERT INTO {$this->table} (name , password) VALUES ('$name' , '$password')";
        return $insert=$this->conn->query($query);


    }
    public function update($data){
        $id=$data['id'];
        $name=$data['name'];
        $age=$data['password'];
        $query="UPDATE user SET name='$name', password='$password' WHERE id=$id";
        return $this->conn->query($query);

    }
}
$userModel=new userModel;
?>