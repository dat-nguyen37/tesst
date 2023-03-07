<?php
session_start();
$con= mysqli_connect("localhost","root","","phptutorials");
// -- Insert du lieu 
// if(isset($_POST["insert-data"]))
// {
//    $name=$_POST['name'];
//    $phone=$_POST['phone'];
//    $email=$_POST['email'];
//    $designation=$_POST['designation'];
   
//    $query="Insert into employees(name,phone,email,designation) values ('$name','$phone','$email','$designaton')";
//    $query_run= mysqli_query($con,$query);
//    if($query_run)
//    {
//     $_SESSION['status']="Insert Successfully";
//     header("Location: insert-data.php");

//    }else{
//     $_SESSION['status']="Data not insert";
//     header("Location: insert-data.php");
//    }
// }

// -- Insert du lieu co radio button

// if(isset($_POST['save-radio']))
// {
//     $name=$_POST['name'];
//     $gender=$_POST['gender'];

//     $query="Insert into demo(name,gender) values('$name','$gender')";
//     $query_run= mysqli_query($con,$query);
//     if($query_run)
//     {
//         $_SESSION['status']="Insert Successfully";
//         header("Location: radio.php");
//     }else{
//         $_SESSION['status']="Do not insert";
//         header("Location: radio.php");
//     }

// }

//-- Insert checkbox

// if(isset($_POST['save-checkbox']))
// {
//     $name=$_POST['name'];
//     $agree=$_POST['agree'];

//     $query="Insert into demo1(name,agree) values('$name','$agree')";
//     $query_run= mysqli_query($con,$query);
//     if($query_run)
//     {
//         $_SESSION['status']="Insert Successfully";
//         header("Location: checkbox.php");
//     }else{
//         $_SESSION['status']="Do not insert";
//         header("Location: checkbox.php");
//     }
// }

//--insert selectbox

// if(isset($_POST['save-select']))
// {
//     $name=$_POST['name'];
//     $gender=$_POST['gender'];

//     $query="INSERT INTO demo(name,gender) VALUES ('$name','$gender')";
//     $query_run= mysqli_query($con,$query);
//     if($query_run)
//     {
//         $_SESSION['status']="Insert Successfully";
//         header("Location: selectbox.php");
//     }else{
//         $_SESSION['status']="Do not insert";
//         header("Location: selectbox.php");
//     }
// }

//--insert date

// if(isset($_POST['save-date']))
// {
//     $name=$_POST['name'];
//     $dob=date('Y-m-d',strtotime($_POST['dateofbirth']));

//     $query="INSERT INTO demo2(name,dob) VALUES ('$name','$dob')";
//     $query_run= mysqli_query($con,$query);
//     if($query_run)
//     {
//         $_SESSION['status']="Insert Successfully";
//         header("Location: date.php");
//     }else{
//         $_SESSION['status']="Do not insert";
//         header("Location: date.php");
//     }
// }

//-- ínert time

// if(isset($_POST['save-time']))
// {
//     $name=$_POST['name'];
//     $time=$_POST['time'];

//     $query="INSERT INTO demo3(name,time) VALUES ('$name','$time')";
//     $query_run= mysqli_query($con,$query);
//     if($query_run)
//     {
//         $_SESSION['status']="Insert Successfully";
//         header("Location: time.php");
//     }else{
//         $_SESSION['status']="Do not insert";
//         header("Location: time.php");
//     }
// }

//--Insert multiple checkbox

// if(isset($_POST['save-multiple-checkbox']))
// {
//     $brands=$_POST['brands'];
//     foreach ($brands as $item) {
//         //echo $item."<br>";
//         $query="INSERT INTO demo0(name) VALUES ('$item')";
//         $query_run= mysqli_query($con,$query);
//     }
//     if($query_run)
//     {
//         $_SESSION['status']="Insert Successfully";
//         header("Location: multiple_checkbox.php");
//     }
//     else{
//         $_SESSION['status']="Do not Insert";
//         header("Location: multiple_checkbox.php");
//     }

// }

//--ínert multi-selectbox


// if(isset($_POST['save-multi-select']))
// {
//     $brands=$_POST['brandlist'];
//     foreach ($brands as $item) {
//         //echo $item."<br>";
//         $query="INSERT INTO demo0(name) VALUES ('$item')";
//         $query_run= mysqli_query($con,$query);
//     }
//     if($query_run)
//     {
//         $_SESSION['status']="Insert Successfully";
//         header("Location: multiple-select-option.php");
//     }
//     else{
//         $_SESSION['status']="Do not Insert";
//         header("Location: multiple-select-option.php");
//     }

// }

//-- register


if(isset($_POST['register']))
{
   $username=$_POST['username'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $cpassword=$_POST['confirmpassword'];
   if($password === $cpassword)
   {
    $query="INSERT INTO register(username,email,password) VALUES ('$username','$email','$password')";
    $query_run= mysqli_query($con,$query);
        if($query_run)
        {
            $_SESSION['status']="Insert Successfully";
            header("Location: register.php");
        }
        else{
            $_SESSION['status']="Do not Insert";
            header("Location: register.php");
        }
   }
   else{
    $_SESSION['status']="Password and Confirm Password do not match";
           header("Location: register.php");

    }
}
?>