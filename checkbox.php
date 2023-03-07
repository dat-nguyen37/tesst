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
    <title>checkbox</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <?php
           if(isset($_SESSION['status']))
           {
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                   <strong>Hey!</strong><?php echo $_SESSION['status'];?>
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            unset($_SESSION['status']);
           }
        ?>
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>how to insert checkbox value into database in php</h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="form-group">
                                <label for="">name</label>
                                <input type="text" name="name" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree" value="I agree to it"/>I agree to this term and codition.
                            </div>
                            <div class="form-group">
                                <button type="submit" name="save-checkbox" class="btn btn-primary">Save Radio Data</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>