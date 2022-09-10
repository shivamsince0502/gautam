<?php session_start();
 
require "./conn.php";
if($_POST['email'] && $_POST['password'])
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	
//Sql Query for Sign In...
$sql="select * from tbl_user where email='$email'";

$smt= mysqli_query($conn,$sql);

	if($rs=mysqli_fetch_assoc($smt))
	{
		if($password==$rs['password'])
		{
			
			$_SESSION['email'] = $rs['email'];
			$_SESSION['name'] = $rs['name'];
			$_SESSION['password']=$rs['password'];
			session_write_close();
			echo "Login Success";
			}
			else
			{
				echo'<div class="alert alert-danger">
				<strong>Required !</strong> Invalid password.
			  </div>'.mysqli_error($conn);
			}
	}

	else
	{
		echo'<div class="alert alert-danger">
		<strong>Required !</strong> Invalid email.
	  </div>'.mysqli_error($conn);
	}
}
else
{
	echo'<div class="alert alert-danger">
    <strong>Required !</strong> Please enter a valid email and password.
  </div>';
}

?>