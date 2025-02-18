<?php
class mainDb{
    public $conn;
    protected $server='localhost';
    protected $user='root';
    protected $password='';
    protected $dbName='mvc';
    public $table;
    function __construct(){
        $this -> conn = new mysqli($this -> server , $this -> user , $this -> password , $this -> dbName);
    }
    public function select(){
        $query = "SELECT * FROM {$this->table}";
        $selectQ = $this ->conn -> query($query);
        $array;
        while($row = $selectQ -> fetch_assoc()){
            $array[] = $row;

        }
        return $array;
    }
    public function delete($id){
        var_dump($id);
        $query = "DELETE FROM {$this->table} WHERE id=$id";
        // var_dump($query);
       return  $this ->conn -> query($query);
}
public function find($id){
    $query="SELECT * FROM {$this->table} WHERE id=$id";
    return $this->conn->query($query);
}

}