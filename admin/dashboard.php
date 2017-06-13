<?php
include 'inc.php';
if(isset($_GET['requester_id'])&& isset($_GET['request_id']))
{
	$request_id=$_GET['request_id'];
	$approved="approved";
	$requester_id=$_GET['requester_id'];
	$update_approval="UPDATE loan_requests SET approval='$approved' WHERE user_id='$requester_id' AND request_id='$request_id'";
	if(mysql_query($update_approval,$connect))
	{
		echo "<script>alert('Loan Approved')</script>";
		echo "<script>window.open('admin.php?dashboard','_self')</script>";
	}
	else
	{
		echo "Error";
	}
}


?>

<h4>Welcome Mr. <?php echo $admin; ?></h4>
<table class="table table-condensed table-responsive table-hover"style="background-color: white;">
	<thead>
		<tr>
			<th>Credit Group</th>
			<th>Credit Limit</th>
			<th>Amount requested</th>
			<th>Disbursement No.</th>
			<th>Approval</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$get_loan_request="SELECT * FROM loan_requests";
		$loan_query=mysql_query($get_loan_request,$connect);
		while($loans_records=mysql_fetch_array($loan_query))
		{
			
			$request_id=$loans_records['request_id'];
			$user_id=$loans_records['user_id'];
			$amount=$loans_records['amount'];
			$disbursement=$loans_records['disbursement'];
			$approval=$loans_records['approval'];
			$get_credit="SELECT credit_group,credit_limit FROM users_table WHERE user_id='$user_id'";
			$get_query=mysql_query($get_credit,$connect);
			$get_credit_limit_and_group=mysql_fetch_array($get_query);
			$credit_group=$get_credit_limit_and_group['credit_group'];
			$credit_limit=$get_credit_limit_and_group['credit_limit'];	
		?>
		<tr>
			<td><?php echo $credit_group; ?></td>
			<td><?php echo $credit_limit; ?></td>
			<td><?php echo $amount; ?></td>
			<td><?php echo $disbursement; ?></td>
			<td><a href="dashboard.php?requester_id=<?php echo $user_id; ?> & request_id=<?php echo $request_id; ?>"class="btn btn-sm"style="<?php if($approval=="approved"){echo 'background-color: #9c28b1;color: white;';}else{echo 'background-color:red;color: white;'; } ?>"><?php echo $approval; ?></a></td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>