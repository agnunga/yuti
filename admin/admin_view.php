<?php
include 'header.php';
include 'inc.php';
if(isset($_POST['activate']) && isset($_GET['view_id']))
{
	$activate_id=$_GET['view_id'];
	$activation=$_POST['activation'];
	$manage="UPDATE users_table SET manage='$activation' WHERE user_id='$activate_id'";
	if(mysql_query($manage,$connect))
	{
		echo "<script>alert('Account has been $activation')</script>";
	}
	else
	{
		echo "Error".mysql_error();
	}
	
}
?>
<div class="navbar"style="background-color: #9c28b1;box-shadow: 4px 10px 15px grey;margin-top: 0px;">
	<?php include 'admin_navbar.php'; ?>
</div>
<div class="row"style="background-color: white;">
	<div class="col-sm-4">
		<table class="table">
		<?php
		if(isset($_GET['view_id']))
		{
			$view_id=$_GET['view_id'];
			$get_individual_records="SELECT * FROM users_table WHERE user_id='$view_id'";
			$all_rows=mysql_query($get_individual_records,$connect);
			while($user_records=mysql_fetch_array($all_rows))
			{
				$group_id=$user_records['group_id'];
				$residence=$user_records['residence'];
				$mobile=$user_records['mobile'];
				$manage=$user_records['manage'];
				$credit_limit=$user_records['credit_limit'];
				$account_number=$user_records['account_no'];
				$credit_group=$user_records['credit_group'];
				$manage=$user_records['manage'];
				
				
		
		?>
			<tr>
				<td>Current Location</td>
				<td><?php echo $residence ?></td>
			</tr>
			<tr>
				<td>Account Status</td>
				<td><a <?php if($manage=="active"){echo "class='btn btn-info'";}else{echo "class='btn btn-danger'";} ?>><?php echo $manage; ?></a></td>
			</tr>
			<form method="POST"action="admin_view.php?view_id=<?php echo $view_id; ?>">
				<tr>
				<td>Credit Limit</td>
				<td style="color: red;"><input type="text"name="credit_limit"value="<?php echo $credit_limit; ?>"class="form-control"<?php if($manage=="inactive"){echo "disabled";} ?>/></td>
			</tr>
			<tr>
				<td>Credit Group</td>
				<td><input type="text"name="credit_group"value="<?php echo $credit_group; ?>"class="form-control"<?php if($manage=="inactive"){echo "disabled";} ?>/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit"name="update_credit"value="UPDATE"class="btn btn-success"/></td>
			</tr>
			</form>
				
		</table>
		<div class="thumbnail"style="background-color: #9c28b1;color: white;text-align:center;margin-top: 10px;">
<img src="img/user.png"class="img-circle"/>
		</div><!--End of thumbnail-->
		<div class="panel">
		<center><a href="#modal" class="btn" style="background-color: #9c28b1;color:white;"data-toggle="modal">MANAGE</a>
<a href="admin_edit.php?edit_id=<?php echo $view_id; ?>"class="btn btn-success">EDIT</a></center>
       </div>
	</div><!--End of col-->
	<div class="col-sm-8">
		<table class="table">
		<caption>Financial Information</caption>
			<tr>
				<td>ULU a/c</td>
				<td><?php echo $account_number; ?></td>
			</tr>
			<tr>
				<td>Mpesa No.</td>
				<td><?php echo $mobile; ?></td>
			</tr>
			<tr>
				<td colspan="2"><h4 style="text-align: center;">Update Payment</h4></td>
			</tr>
			<form method="POST"action="admin_view.php?view_id=<?php echo $view_id; ?>">
			<tr>
				<td>next payment date</td>
				<td><input type="text"class="form-control"name="date"/></td>
			</tr>
			<tr>
				<td>Money paid</td>
				<td><input type="text"class="form-control"name="amount_in"/></td>
			</tr>
			<?php
			$get_balance="SELECT money_in FROM loan_requests WHERE user_id='$view_id'";
				$result=mysql_query($get_balance,$connect);
				$get_amount=mysql_fetch_array($result);
				$money_in=$get_amount['money_in'];
			
			$get_loan_balance="SELECT amount FROM loan_requests WHERE user_id='$view_id'";
			$result_amount=mysql_query($get_loan_balance,$connect);
			while($amount_rows=mysql_fetch_array($result_amount))
			{
				$amount=$amount_rows['amount'];
				$Total_amount=$amount*(115/100);
			}
			if(isset($_POST['update_payment']))
			{
				$amount_in=$_POST['amount_in'];
				$Total_amount_in=$amount_in+$money_in;
				$date=$_POST['date'];
				$balance=$Total_amount-$Total_amount_in;
				$update="UPDATE loan_requests SET balance='$balance',money_in='$Total_amount_in',date='$date' WHERE user_id='$view_id'";
				if(mysql_query($update,$connect))
				{
					echo "<script>alert('payment updated')</script>";
				}
				else
				{
					echo "Error".mysql_error();
				}
			}
			?>
			<tr>
				<td>Total Amount</td>
				<td><button><?php echo $Total_amount; ?></button></td>
			</tr>
			<tr>
				<td>New Balance</td>
				<td><button><?php echo @$balance; ?></button></td>
			</tr>
			<tr>
				<td colspan="2"><center><input type="submit"class="btn"value="UPDATE"name="update_payment"style="background-color: #9c28b1;color: white;"/></center></td>
			</tr>
			</form>
		</table>
			
	</div><!--End of col-->
</div><!--End of row-->
<div class="modal fade"id="modal">
	<div class="modal-dialog">
		<div class="modal-content">
			 <div class="modal-header">
			 <a href="#modal"data-dismiss="modal"class="close">&times;</a>
			 	<h4>Activate/Deactivate ULU A/C</h4>
			 </div><!--End of modal header-->
			 <div class="modal-body">
			 	<form method="POST"action="admin_view.php?view_id=<?php echo $view_id; ?>">
			 		<div class="form-group">
			 			<input type="radio"value="active"name="activation"/>Activate
			 			<input type="radio"value="inactive"name="activation"/>Deactivate
			 		</div><!--End of form group-->
			 		<div class="form-group">
			 			<input type="submit"name="activate"value="SAVE"class="btn"style="background-color: #9c28b1;color: white;"/><br />
			 		</div><!--End of form group-->
			 	</form>
			 </div><!--End of modal body-->
		</div><!--end of modal content-->
	</div><!--End of modal dialog-->
</div><!--End of modal-->
<?php

if(isset($_POST['update_credit']))
{
	$group_name=$_POST['credit_group'];
	$group_limit=$_POST['credit_limit'];
	$update_credit="UPDATE users_table SET credit_group='$group_name',credit_limit='$group_limit'WHERE user_id='$view_id'";
	if(mysql_query($update_credit,$connect))
	{
		echo "<script>alert('data successfully updated')</script>";
		echo "<script>window.open('admin_view.php?view_id=$view_id','_self')</script>";
	}
	else
	{
		echo "Error".mysql_error();
	}
}


		}
		}
?>
<?php include 'footer.php'; ?>