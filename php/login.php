<?php
	$error="";
	if(isset($_POST['submit'])){
	    $username=$_POST['username'];
		$password=$_POST['password'];
		if($username=="admin")
        {
			if($password=="admin")
            {
				echo "<script>window.location='../html/Adminoption.html'</script>";
			}
			else
            {
				echo"<script>alert('Invalid Password')</script>";
				echo "<script>window.location='../Adminlogin.html'</script>";
			}
		}
		else
        {
			echo "<script>alert('Invalid Username')</script>";
			echo "<script>window.location='../Adminlogin.html'</script>";
		}
	}
?>