<div class="thumbnail"style="background-color: #9c28b1;color: white;text-align:center;margin-top: -10px;">
<img src="img/user.png"class="img-circle"/>
			<?php
			$admin=$_SESSION['admin'];
			$getAdmin="SELECT fname,lname FROM admin WHERE username='$admin'";
			$getResult=mysql_query($getAdmin,$connect);
			$rows=mysql_fetch_array($getResult);
			$fname=$rows['fname'];
			$lname=$rows['lname'];
			?>
		<p style="font-size: 24px;"><?php echo $fname." ".$lname; ?></p>
		<p style="text-align: center;">Administrator</p>
	</div>
		<ul class="list-group"style="margin-top: -20px;"id="quick_licks">
			<li class="list-group-item"><a href="admin.php?dashboard">Dashboard</a></li>
			<li class="list-group-item"><a href="admin.php?loans_management">Loan Management</a></li>
			<li class="list-group-item"><a href="admin.php?clients_management">Clients Management</a></li>
			<li class="list-group-item"><a href="admin.php?admin_configuration">Configuration</a></li>
			<li class="list-group-item"><a href="admin.php?messages">Messages</a></li>
		</ul>
	</div><!--End of col-->