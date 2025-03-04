<?php

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
}else{
    $sql="select count(res) from payment where res='yes'";
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>paid count</title>
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
                            <h2 class="text-center">Paid students count</h2>
                        </div>
                        <div class="card-body">
            <table class="table table-bordered text-center">

            <tr>
                <td>
                    number of students paid the fee
                </td>
                <td>
                    <?php
                        $sql="select count(res) from payment where res='yes'";
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