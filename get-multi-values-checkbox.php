<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title></title>
</head>                                             
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>how to get multiple values from DB in checkbox in php</h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                        <?php
                                $con=mysqli_connect("localhost","root","","phptutorials");

                                $brands_query="SELECT * FROM demo0";
                                $query_run=mysqli_query($con,$brands_query);

                                if($query_run->num_rows > 0)
                                {
                                   foreach($query_run as $brand){                                  
                                        ?>
                                        <input type="checkbox" name="brands[]" value="<?= $brand['name'];?>"/><?=$brand['name'];?><br/> 
                                        <?php
                                   }
                                }
                                else
                                {
                                    echo " No Record Found";
                                }
                            ?>
                            <div class="form-group">
                                <button name="save-multiple-checkbox" class="btn btn-primary">Save multiple checkbox</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
                            