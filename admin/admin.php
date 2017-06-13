<?php include 'header.php';
include 'inc.php';
?>

<div class="navbar"style="background-color: #9c28b1;box-shadow: 4px 10px 15px grey;">
	<?php include 'admin_navbar.php'; ?>
</div>
<div class="row">
	<div class="col-sm-3">
	<?php include 'admin_sidebar.php'; ?>
	<div class="col-sm-9">
		<?php
		if(isset($_GET['dashboard']))
		{
			include 'dashboard.php';
		}
		if(isset($_GET['loans_management']))
		{
			include 'loans_management.php';
		}
		if(isset($_GET['clients_management']))
		{
			include 'clients_management.php';
		}
		if(isset($_GET['admin_configuration']))
		{
			include 'admin_configuration.php';
		}
		else if(!isset($_GET['dashboard']) && !isset($_GET['loans_management']) && !isset($_GET['clients_management']))
		{
			include 'loans_management.php';
		
		}
		
		?>
	</div><!--End of col-->
</div><!--End of row-->
<?php include 'footer.php'; ?>