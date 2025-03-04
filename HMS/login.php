<?php
    $email = $_POST['email'];//store the email data from html to email in php
    $password = $_POST['password'];
    //connecting database
    $con = new mysqli("localhost","root","","test");
    if($con->connect_error){
        die("Failed to connect : ".$con->connect_error); 
    }else{
        $stmt = $con->prepare("select * from registration where email = ?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc(); 
            if($data['password']==$password){
                
                header("Location: adminInterface.html");
            }
            else{
               echo "<h2>Invalid email and password</h2>";
            }
        }else{
            echo "<h2>Invalid email or password</h2>";
        }
    }
?>