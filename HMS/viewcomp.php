<?php
    require_once('compdb.php');
    $query = "select * from comment";  
    $result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Complaints
        </title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    </head>
    <body style="background-color: lightgray;">
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h2 class="text-center">Complaints from students</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <tr>
                                    <td>Category</td>
                                    <td>Description of the problem</td>
                                    <td>Block</td>
                                </tr>
                                <tr>
                                    <?php
                                        while($row = mysqli_fetch_assoc($result)){
                                    ?>

                                    <td>
                                        <?php
                                            echo $row['category'];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            echo $row['description'];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            echo $row['block'];
                                        ?>
                                    </td>
                                </tr>
                                    <?php


                                        }
                                    ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>