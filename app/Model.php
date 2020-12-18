<?php

class Model{

    public function createLine($uid,$name,$age,$email,$phone,$gender){
        $conn = new mysqli('localhost','root','root','my-csv-table');
        $sql = "INSERT INTO `csv-table`(`uid`, `name`, `age`, `email`, `phone`, `gender`) VALUES ($uid,$name,$age,$email,$phone,$gender)";
        if($conn->query($sql) === TRUE){
            echo 'created';
        }
        $conn->close();
    }

    public function getAllLine(){
        $conn = new mysqli('localhost','root','root','my-csv-table');
        $sql = "SELECT * FROM csv-table";
        $all_line = $conn->query($sql);
    }

    public function removeAllLine(){
        $conn = new mysqli('localhost','root','root','my-csv-table');
        $sql = "REMOVE FROM csv-table";
        if($conn->query($sql) === TRUE){
            echo 'removed';
        }
    }

}