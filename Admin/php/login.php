<?php
	$error="";
	if(isset($_POST['submit'])){
	    $username=$_POST['username'];
		$password=$_POST['password'];
		if($username=="admin")
        {
			if($password=="admin")
            {
				echo "<script>window.location='../html/Option.html'</script>";
			}
			else
            {
				echo"<script>alert('Invalid Password')</script>";
				echo "<script>window.location='../Login.html'</script>";
			}
		}
		else
        {
			echo "<script>alert('Invalid Username')</script>";
			echo "<script>window.location='../Login.html'</script>";
		}
	}
?>