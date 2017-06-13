<table class="table table-responsive table-condensed"style="background-color: white;">
		<caption>Recently activated Accounts</caption>
			<thead>
				<tr>
					<th>A/C</th>
					<th>Phone Number</th>
					<th>ID No</th>
					<th>Options</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$getRecords="SELECT * FROM users_table";
				$all_records=mysql_query($getRecords,$connect);
				while($all=mysql_fetch_array($all_records))
				{
					$user_id=$all['user_id'];
					$mobile=$all['mobile'];
					$idno=$all['idno'];
				
				?>
				<tr>
					<td><?php echo $user_id; ?></td>
					<td><?php echo $mobile; ?></td>
					<td><?php echo $idno; ?></td>
					<td><a href="admin_view.php?view_id=<?php echo $user_id; ?>"class="btn"style="background-color: #9c28b1;color: white;">View</a></td>
				</tr>
				<?php 	} ?>
			</tbody>
		</table>