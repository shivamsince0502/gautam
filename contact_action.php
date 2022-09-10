<?php
include("conn.php");

if(isset($_POST['fname'])&& isset($_POST['lname'])&& isset($_POST['email'])&& isset($_POST['phone'])&& isset($_POST['msg']))
{
    
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $msg=$_POST['msg'];

    
    $sql="insert into tbl_contact (fname,lname,email,phone,msg) values('$fname','$lname','$email','$phone','$msg')";


    if(mysqli_query($conn,$sql))
    {
       echo " contact shortly";
    }
    else
    {
        echo " contact failed.".mysqli_error($conn);
    }

}

?>