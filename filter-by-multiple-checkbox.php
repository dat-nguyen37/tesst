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
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h4>How to filter/find data from DB using Multiple Checkbox in PHP MySQL</h4>
                    </div>
                </div>
            </div>
            <!--brandlist -->
            <div class="col-md-3">
                <form action="" method="GET">
                    <div class="card shadow mt-3">
                        <div class="card-header">
                            <h5>Filter
                                <button class="btn btn-primary btn-sm float-end">Search</button>
                            </h5>
                        </div>
                        <div class="card-body">
                            <h6>Brand list</h6>
                            <hr>
                            <?php
                                $con=mysqli_connect("localhost","root","","phptutorials");

                                $brand_query="Select * from demo0";
                                $brand_query_run= mysqli_query($con,$brand_query);

                                if(mysqli_num_rows($brand_query_run)>0)
                                {
                                    foreach($brand_query_run as $brandlist)
                                    {
                                        ?>
                                        <input type="checkbox" name="brands[]" value="<?=$brandlist['id']; ?>">
                                        <?=$brandlist['name']; ?>
                                        <?php
                                    }
                                }else{
                                    echo"No brands Found";
                                }
                            ?>
                        </div>
                    </div>
                </form>
            </div>

            <!-- brand items- product -->
             <div class="col-md-9 mt-3">
                <div class="card">
                    <div class="card-body">
                        <?php
                            if(isset($_GET['brands'])){
                                $branchecked=[];
                                $branchecked=$_GET['brands'];
                                foreach($branchecked as $rowbrand)
                                {
                                    $products="Select * from demo0_product WHERE brand_id IN ($rowbrand) ";
                                    $products_run=mysqli_query($con,$products);
                                    if(mysqli_num_rows($products_run)>0)
                                    {
                                        foreach($products_run as $proditems) :
                                            ?>
                                               <div class="col-md-4 mt-3">
                                                <div class="border p-2">
                                                    <h6><?=$proditems['name']; ?></h6>
                                                </div>
                                               </div>
                                            <?php
                                            endforeach;
                                    }
                                    
                                }
                            }else{
                                $products="Select*from demo0_product";
                                $products_run=mysqli_query($con,$products);
                                if(mysqli_num_rows($products_run)>0)
                                {
                                    foreach($products_run as $proditems):
                                        ?>
                                           <div class="col-md-4 mt-3">
                                            <div class="border p-2">
                                                <h6><?=$proditems['name']; ?></h6>
                                            </div>
                                           </div>
                                        <?php
                                        endforeach;
                                }
                                else{
                                    echo "No brands Found";
                                }
                            }
                        ?>
                    </div>
                </div>
             </div>
        </div>
    </div>
</body>
</html>