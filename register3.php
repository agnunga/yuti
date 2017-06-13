<?php
require_once './process/session.php';
require_once './process/redirect.php';
require_once './process/config.php';
require_once './process/database.php';
require_once './include/header.php';
if (isset($_POST['continue'])) { 
    $guestData = $_SESSION['$guestData'];

    $guestData[5] = $_POST['fullname'];
    $guestData[6] = $_POST['email'];
    $guestData[7] = $_POST['password'];
//    $guestData[8] = $_POST['above18'];
    $_SESSION['$guestData'] = $guestData;
//    print_r($_SESSION['$guestData']);
    
}
?>
<div class="navbar"style="background-color: #ea6262;box-shadow: 4px 10px 15px grey;">
    <?php
    require_once './include/navbar.php';
    ?>
</div>
<div class="row" style="text-align: center;">
    <div class="col-sm-3">
        <div class="pro">
            <h3>1 Your details</h3>
        </div>
    </div><!--End of col-sm-3-->
    <div class="col-sm-3">
        <div class="pro">
            <h3>2 About you</h3>
        </div>
    </div><!--End of col-sm-3-->
    <div class="col-sm-3">
        <div class="pro">
            <h3>3 Your photos</h3>
        </div>
    </div><!--End of col-sm-3-->
    <div class="col-sm-3">
        <div class="pro">
            <h3>4 Your friend</h3>
        </div>
    </div><!--End of col-sm-3-->
</div><!--End of row-->
<div class="row" style="margin-top: 50px;">
    <div class="col-sm-2">

    </div><!--End of row-->
    <div class="col-sm-8">

        <?php require_once './form/_register3.php'; ?> 

    </div><!--End of col-->
</div><!--End of row-->
<?php
require_once './include/footer.php';
