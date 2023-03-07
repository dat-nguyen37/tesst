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
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>How to Filter or Find or Get data between TWO Dates in php </h4>
                    <div class="card-body">
                      <form action="" method="GET">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <lable>From Date</lable>
                                    <input type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){echo $_GET['from_date'];}?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <lable>To Date</lable>
                                    <input type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){echo $_GET['to_date'];}?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <lable>Click to Filter</lable>
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                </div>
                            </div>
                        </div>
                      </form>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-borderd">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                        
                        <?php
                           $con=mysqli_connect("localhost","root","","phptutorials");
                           
                           if(isset($_GET['from_date']) && isset($_GET['to_date']))
                           {
                               $from_date=$_GET['from_date'];
                               $to_date =$_GET['to_date'];

                               $query="SELECT* FROM demo4 WHERE creat_at BETWEEN '$from_date' AND '$to_date'";
                               $query_run= mysqli_query($con,$query);

                               if(mysqli_num_rows($query_run)>0)
                               {
                                    foreach($query_run as $row)
                                    {
                                      //  echo $row['firstname'];
                                      ?>
                                       <tr>
                                        <td><?= $row['id']; ?></td>
                                        <td><?= $row['firstname']; ?></td>
                                        <td><?= $row['lastname']; ?></td>
                                       </tr>
                                      <?php
                                    }
                                }
                                else{
                                    echo "No Record Found";
                                }
                               
                           }
                        ?>
                        
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>