<?php

    $lunch = $_POST['lunch'];
    $snacks = $_POST['snacks'];
    $dinner = $_POST['dinner'];
    $bf = $_POST['bf'];
    /*echo "$lunch";
    echo "$snacks";
    echo "$dinner";
    echo "$bf";
    */

    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into messpoll(lunch,snacks,dinner,bf) values(?,?,?,?)");
        $stmt->bind_param("ssss",$lunch,$snacks,$dinner,$bf);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }
?>