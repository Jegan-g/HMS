<?php
    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $email = $_POST['email'];
    $yos = $_POST['yos'];
    $pn = $_POST['pn'];
    $ps = $_POST['ps'];
    $regno = $_POST['regno'];
    $dep = $_POST['dep'];
    $mn = $_POST['mn'];
    $fn = $_POST['fn'];

    //database connection

    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(firstname,lastname,fathersname,motherssname,department,regno,email,yos,password,number) values(?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssssssi",$fn,$ln,$fn,$mn,$dep,$regno,$email,$yos,$ps,$pn);
        $stmt->execute();
        echo "Registeration successful";
        $stmt->close();
        $conn->close();
    }
?>