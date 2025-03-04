<?php
    $p = $_POST['p'];
    
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into payment(res) values(?)");
        $stmt->bind_param("s",$p);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }
?>