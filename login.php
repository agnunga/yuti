<?php
require_once './_Guest.php'; 
require_once './include/header.php';
require_once './include/navbar.php';
if(isset($_POST['login'])){
    $data = array($_POST['email'], $_POST['password']);
    $guest->login($data);
}
?>
<div class="navbar"style="background-color: #9c28b1;box-shadow: 4px 10px 15px grey;">
    <?php
    require_once './include/navbar.php';
    ?>
</div>
<div class="row">
    <div class="col-sm-4">

    </div><!--End of col-sm-4-->
    <div class="col-sm-4 well">
        <div style="padding: 20px auto;box-shadow: 2px 3px 4px 4px grey;">
            <div class="panel-heading"style="background-color: #9c28b1;border-radius: 5px;position: relative;top: -30px;">
                <h4 style="text-align: center;padding: 10px;color: white;">Login</h4>
            </div><!--End of panel heading-->
            <div class="panel-body">
                <?php require_once './form/_login.php'; ?>
            </div><!--End of panel body-->
        </div><!--End of div-->
    </div><!--End of col-sm-4-->
</div><!--End of row-->
<?php
require_once './include/footer.php';
