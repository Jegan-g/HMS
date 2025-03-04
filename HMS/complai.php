<?php

    $a=$_POST['aoc'];
    $c=$_POST['comment'];
    $b=$_POST['b'];



    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into comment(category,description,block) values(?,?,?)");
        $stmt->bind_param("sss",$a,$c,$b);
        $stmt->execute();
        echo "Request submitted";
        $stmt->close();
        $conn->close();
    }

?>