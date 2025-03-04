<?php

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
}else{
    $sql="select count(lunch) from messpoll where lunch='yes'";
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>mess count</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <style>
            body {
              background-image: url('IMAGES/bg.png');
            }
            tr:hover {background-color: coral;}
        </style>
    </head>
    <body>
    <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h2 class="text-center">Mess response from students</h2>
                        </div>
                        <div class="card-body">
            <table class="table table-bordered text-center">
                <tr>
                    <th>pariculars</th>
                    <th>count</th>
                </tr>
            <tr>
                <td>
                    number of students want to have lunch in mess
                </td>
                <td>
                    <?php
                        $sql="select count(lunch) from messpoll where lunch='yes'"; 
                        $result = mysqli_query($conn,$sql);
                        $out = mysqli_fetch_array($result);
                        print($out[0]);                       
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    number of students want to have snacks in mess
                </td>
                <td>
                    <?php
                        $sql="select count(snacks) from messpoll where snacks='yes'"; 
                        $result = mysqli_query($conn,$sql);
                        $out = mysqli_fetch_array($result);
                        print($out[0]);                       
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    number of students want to have dinner in mess
                </td>
                <td>
                    <?php
                        $sql="select count(dinner) from messpoll where dinner='yes'"; 
                        $result = mysqli_query($conn,$sql);
                        $out = mysqli_fetch_array($result);
                        print($out[0]);                       
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    number of students want to have breakfast for tommorow<br> morning in mess
                </td>
                <td>
                    <?php
                        $sql="select count(bf) from messpoll where bf='yes'"; 
                        $result = mysqli_query($conn,$sql);
                        $out = mysqli_fetch_array($result);
                        print($out[0]);                       
                    ?>
                </td>
            </tr>
            </table>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>