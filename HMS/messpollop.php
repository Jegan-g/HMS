<?php

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
}else{
/*
    $stmt = $conn->prepare("select count(lunch) from messpoll where lunch='yes'");
    $stmt->execute();
    $stmt->close();
    $conn->close();
*/
    //$result = mysqli_query($conn,"select count(lunch) from messpoll where lunch='yes'" ) or die(mysqli_error($this->dblink));

    //echo "$result";

    //echo implode(" ",$result);

    $sql="select count(lunch) from messpoll where lunch='yes'";
    /*
    if ($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("Result set has %d rows.\n",$rowcount);
  }

echo "<br>number of students want to have lunch in mess :";
$result = mysqli_query($conn,$sql);
$out = mysqli_fetch_array($result);
print($out[0]); // or print($out[0]);


$sql="select count(snacks) from messpoll where snacks='yes'";

echo  "<br>number of students want to have snacks in mess :";
//echo $'test statement \n to separate sentences';
//printf ("test statement \n to separate sentences");
//print "\n number of student : ";
$result = mysqli_query($conn,$sql);
$out = mysqli_fetch_array($result);
print($out[0]); // or print($out[0]);

echo  "<br>number of students want to have dinner in mess :";
$sql="select count(dinner) from messpoll where dinner='yes'";
$result = mysqli_query($conn,$sql);
$out = mysqli_fetch_array($result);
print($out[0]);


echo  "<br>number of students want to have breakfast for tommorow in mess :";
$sql="select count(bf) from messpoll where bf='yes'";
$result = mysqli_query($conn,$sql);
$out = mysqli_fetch_array($result);
print($out[0]);

*/
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>mess count</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    </head>
    <body style="background-color: lightgray;">
    <br><br><br><br><br><br><br><br><br>
        <center>
            <table class="table table-bordered text-center" style="width:50%">
            <thead>
                <tr>
                    <th>pariculars</th>
                    <th>count</th>
                </tr>
            </thead>
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
        </center>
    </body>
</html>