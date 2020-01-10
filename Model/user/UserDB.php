<?php

namespace Model\UserDB;

use Model\database\DBConnect;
use Model\User\User;

class UserDB
{
    protected $conn;

    public function __construct()
    {
        $db = new DBConnect();
        $this->conn = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $user = new User($item['name'], $item['sectors'],$item['price'],$item['quantity'],$item['date'],$item['description']);
            $user->setId($item['id']);
            array_push($arr, $user);
        }
        return $arr;
    }

    public function destroy($id)
    {
        $sql = "DELETE FROM users WHERE id = $id";
        $stmt = $this->conn->query($sql);
    }

    public function create()
    {
        $name = $user->getName();
        $sectors = $user->getSectors();
        $price = $user->getPrice();
        $quantity = $user->getQuantity();
        $date = $user->getDate();
        $description = $user->description();

        $sql = "INSERT INTO users (name , sectors , price, quantity , date ,description) value (?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $secters);
        $stmt->bindParam(3, $price);
        $stmt->bindParam(4, $quantity);
        $stmt->bindParam(5, $date);
        $stmt->bindParam(6, $description);
        $stmt->execute();
    }
}