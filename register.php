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
    <title>Document</title>
</head>
<body>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Đăng kí
</button>
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
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Đăng kí</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form action="code.php" method="POST">
      <div class="modal-body">
          <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Enter your name">
          </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="text" name="email" class="form-control" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="text" name="password" class="form-control" placeholder="Enter your password">
            </div>
            <div class="form-group">
              <label for="">Confirm Password</label>
              <input type="text" name="confirmpassword" class="form-control" placeholder="Enter your password">
            </div>
          </div>
       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="register">Register</button>
       </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>