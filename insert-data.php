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
    <title>Insert data</title>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-12">
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
        <div class="card">
            <div class="card-header">
                <h4>how to insert data into database in php</h4>
            </div>
        <div class="card-body">
            <form action="code.php" method="post">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name">
                </div>
                <div class="form-group">
                <label for="">Phone number</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter your phone number">
                </div>
                <div class="form-group">
                <label for="">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter your email">
                </div>
                <div class="form-group">
                <label for="">Designation</label>
                    <input type="text" name="designation" class="form-control" placeholder="Enter your designation">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="insert-data">Save data</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
</body>
</html>