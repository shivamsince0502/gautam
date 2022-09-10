<?php
include("conn.php");

if(isset($_POST['name'])&& isset($_POST['email'])&& isset($_POST['password']) && isset($_POST['email'])&& isset($_POST['mobile']))
{
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    
    $sql="insert into tbl_user (name,email,mobile,password) values('$name','$email','$mobile','$password')";


    if(mysqli_query($conn,$sql))
    {
       echo " Registration Successful.";
    }
    else
    {
        echo " Registration failed.".mysqli_error($conn);
    }

}

?>