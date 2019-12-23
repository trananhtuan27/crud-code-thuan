<?php


class UserDB
{
protected $userDB;
public function __construct($conn)
{
    $this->conn = $conn;
}
public function getList(){
     $sql = "SELECT * FROM users";
     $stmt = $this->conn->query($sql);
     $result = $sql->fetchAll();
     $arr = [];
     foreach ($result as $item){
         $user = new User($item['id'],$item['name'],$item['age'],$item['address']);
         array_push($arr,$user);
     }
     return $arr;
}
public function create($user){

    $id = $this->conn->lastInsertID();
    $name = $user->getName();
    $age = $user->getAge();
    $address = $user->getAddress();
    $sql = "INSERT INTO users (id, name, age, address) VALUE (?, ?,?,?)";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(1, $id);
    $stmt->bindParam(2, $name);
    $stmt->bindParam(3, $age);
    $stmt->bindParam(4, $address);
    $stmt->execute();

}

}