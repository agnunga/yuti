<?php
include 'header.php';
include 'inc.php';
?>
<div class="navbar"style="background-color: #9c28b1;box-shadow: 4px 10px 15px grey;margin-top: 0px;">
	<?php include 'admin_navbar.php'; ?>
</div>
<div class="row">
	<div class="container">
		<div class="col-sm-6">
	<?php   
	if(isset($_GET['edit_id']))
	{
		$edit_id=$_GET['edit_id'];
		$retrieve="SELECT mobile,account_no,idno,front_image_id FROM users_table WHERE user_id='$edit_id'";
		$edit_query=mysql_query($retrieve,$connect);
		$edit_array=mysql_fetch_array($edit_query);
		{
			$mobile=$edit_array['mobile'];
			$account_no=$edit_array['account_no'];
			$idno=$edit_array['idno'];
			$front_image_id=$edit_array['front_image_id'];
			
		
	?>
		<div class="panel">
		<form method="POST"action="admin_edit.php?edit_id=<?php echo $edit_id;  ?>"class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-3">Mpesa No.</label>
				<div class="col-sm-9">
					<input type="text"name="mpesa_no"value="<?php echo $mobile; ?>"class="form-control"/>
				</div><!--End of col-->
			</div><!--End of form group-->
			<div class="form-group">
				<label class="control-label col-sm-3">Equity A/C No.</label>
				<div class="col-sm-9">
					<input type="text"name="account_no"value="<?php echo $account_no; ?>"class="form-control"/>
				</div><!--End of col-->
			</div><!--End of form group-->
			<div class="form-group">
				<input type="submit"name="update_details"value="UPDATE"class="btn pull-right"style="background-color: #9c28b1;color:white;margin-right: 30px;">
			</div><!--End of form group-->
		</form>
	
		</div><!--End of panel-->
	</div><!--End of col-->
	<div class="col-sm-6">
	<form method="POST"action="admin_edit.php?edit_user_id=<?php echo $edit_id; ?>"class="form-horizontal"enctype="multipart/form-data">
		<div class="form-group">
			<label class="control-label col-sm-3">National Id</label>
			<div class="col-sm-9">
				<input type="text"class="form-control"value="<?php echo $idno; ?>"/>
			</div><!--End of col-sm-9-->
		</div><!--End of form group-->
		<div class="form-group">
		<label class="control-label col-sm-3">Select</label>
			<div class="col-sm-9">
				<input type="file"class="form-control"name="image"/>
				<p class="form-helper">
					<img src="uploads/<?php echo $front_image_id; ?>"/>
				</p>
			</div><!--End of col-sm-9-->
		</div><!--End of form group-->
		<div class="form-group">
			<input type="submit"class="btn pull-right"name="update_img"value="UPLOAD"style="margin-right: 20px;background-color: #9c28b1;color: white;"/>
		</div><!--End of form group-->
	</form>
		<?php
		}
	}
		?>
	</div><!--End of col-->
	</div><!--End of container-->
</div><!--End of well-->
<?php
if(isset($_POST['update_details'])&& isset($_GET['edit_id']))
{
	$mpesa_no=$_POST['mpesa_no'];
	$account_no=$_POST['account_no'];
	$edit_id=$_GET['edit_id'];
	$update="UPDATE users_table SET mobile='$mpesa_no',account_no='$account_no'WHERE user_id='$edit_id'";
	if(mysql_query($update,$connect))
	{
		echo "<script>alert('The details were successfully updated')</script>";
	}
	else
	{
		echo "Error".mysql_error();
	}
}
if(isset($_POST['update_img'])&& isset($_GET['edit_user_id']))
{
	$edit=$_GET['edit_user_id'];
	$image=$_FILES['image']['name'];
	$tmp_img=$_FILES['image']['tmp_name'];
	$update_pic="UPDATE users_table SET front_image_id='$image' WHERE user_id='$edit'";
	if(mysql_query($update_pic,$connect))
	{
		move_uploaded_file($tmp_img,"uploads/$image");
		echo "<script>alert('id successfully updated')</script>";
		echo "<script>window.open('admin_edit.php?edit_id=$edit','php_self')</script>";
	}
	else
	{
		echo "Error";
	}
}
?>
