<?php
include("conn.php");

if(isset($_POST['name'])&& isset($_POST['vanue'])&& isset($_POST['event_day_start'])&& isset($_POST['event_day_end'])&& isset($_POST['massage']))
{
    
    $name=$_POST['name'];
    $vanue=$_POST['vanue'];
    $event_day_start=$_POST['event_day_start'];
    $event_day_end=$_POST['event_day_end'];
    $massage=$_POST['massage'];

    
    $sql="insert into tbl_booking (name,vanue,event_day_start,event_day_end,massage) values('$name','$vanue','$event_day_start','$event_day_end','$massage')";


    if(mysqli_query($conn,$sql))
    {
       echo " Booking Successful.";
    }
    else
    {
        echo " Booking failed.".mysqli_error($conn);
    }

}

?>