<?php
include 'header.php';
include 'inc.php';
if(isset($_POST['admin']))
{
	$username=$_POST['username'];
	$pwd=$_POST['pwd'];
	$login="SELECT * FROM admin WHERE username='$username' AND pwd='$pwd'";
	$result=mysql_query($login,$connect);
	if($result)
	{
		
			echo "<script>window.open('admin.php','_self')</script>";
		    $_SESSION['admin']=$username;
		
	}
	else
	{
		echo "Error occured in inserting";
	}
}
?>
<html>
<head>
	
</head>
<body style="background-image: url(img/bg2.jpg)">
	<div class="container">
		
<div class="row">
	<div class="col-sm-4">
		
	</div><!--End of col-sm-4-->
	<div class="col-sm-4 well" style="margin-top:60px;">
			<div class="panel-heading"style="background-color: #9c28b1;border-radius: 5px;position: relative;top: -30px;">
				<h4 style="text-align: center;padding: 10px;color: white;">Login</h4>
			</div><!--End of panel heading-->
			<div class="panel-body">
				<form method="POST"action="admin_validate.php">
			<div class="form-group">
				<label for="username"class="control-label">Username</label>
				<input type="text"name="username"class="form-control"/>
			</div><!--End of form group-->
			<div class="form-group">
				<label for="password"class="control-label">Password</label>
				<input type="password"name="pwd"class="form-control"/>
			</div><!--End of form group-->
			<div class="form-group">
				<input type="checkbox"value="remember"name="remember"/> Remember Me 
				<span class="form-helper"><br /><a href="#"style="color: #9c28b1;">Forgot your password?</a></span>
			</div><!--End of form group-->
			<div class="form-group">
					 		<input type="submit"name="admin"value="LOGIN"class="btn pull-right"style="background-color: #9c28b1;padding: 15px 30px;color: white;margin-right: 20px;"/>
					 	</div><!--End of form group-->
		</form>
			</div><!--End of panel body-->
	</div><!--End of col-sm-4-->
</div><!--End of row-->
	</div><!--End of container-->
</body>
</html>