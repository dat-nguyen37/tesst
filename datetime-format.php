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
    <title>tets</title>
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
                        <h4>how to idate and time funcion (get curent date time) & show in diffrent format in php</h4>
                    </div>
                    <div class="card-body">
                        <?php date_default_timezone_set('Asia/Kolkata'); ?>
                        <!-- Current Date -->
                       <h4>Current date: <?=date('Y-m-d');?></h4>
                       <h4>C-Year<?=date('Y');?></h4>
                       <h4>C-Month<?=date('m');?></h4>
                       <h4>C-Date<?=date('d');?></h4>
                       <hr>

                       <h4>Current date <?=date('h:i:s A');?></h4>
                       <h4>Hour<?=date('h');?></h4>
                       <h4>Minute<?=date('i');?></h4>
                       <h4>Seconds<?=date('s');?></h4>
                       <h4>AM/PM:<?=date('a');?></h4>
                        <hr>
                        <!-- Date fomat -->
                        <?php
                           $date="2021-03-25";
                        ?>
                        <h4>Date Format for: <?= $date; ?></h4>
                        <h5><?= date('d-m-y', strtotime($date)) ?></h5>
                        <h5><?= date('d/m/y', strtotime($date)) ?></h5>
                        <h5><?= date('d:m:y', strtotime($date)) ?></h5>
                        <h5><?= date('m-d-Y', strtotime($date)) ?></h5>
                        
                        <!-- Time fomat -->
                        <?php 
                          $time="01:10 PM";
                        ?>
                        <h4>Time format for: <?=$time; ?></h4>
                        <h5><?= date('h:i A', strtotime($date)) ?></h5>
                        <h5><?= date('h:i', time()) ?></h5>

                        <h5>Time for 12 hour format: <?=date('h:i A', strtotime($time)) ?></h5>
                        <h5>Time for 12 hour format: <?=date('h:i', strtotime($time)) ?></h5>

                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>