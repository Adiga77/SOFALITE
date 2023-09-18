<?php 
class Users{
    public function insertIntoUsers($name, $address){
        include "../config/db_connect.php";
        $sql = "INSERT INTO users (name, address) VALUES(?,?)";
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute([$name, $address]);
        return $result;
    }

    // public function selectFromUsersAndOrders(){
    //     include "config/db_connect.php";
    //     $sql = "SELECT users.*, orders.* FROM users, orders";
    //     $stmt = $pdo->prepare($sql);
    //     $stmt->execute();
    //     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     return $result;
    // }

    public function deleteUsers(){
        include "../config/db_connect.php";
        $sql = "DELETE * FROM users";
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute();
        return $result;
    }
}

?>