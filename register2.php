<?php
require_once './process/session.php';
require_once './process/redirect.php';
require_once './process/config.php';
require_once './process/database.php';
require_once './include/header.php';
if (isset($_POST['continue'])) {
    $guestData = array('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

    $dob = $_POST['day'] . "/" . $_POST['month'] . "/" . $_POST['year'];
    
    $guestData[0] = $_POST['gender'];
    $guestData[1] = $_POST['min'];
    $guestData[2] = $_POST['max'];
    $guestData[3] = $_POST['location']; 
    $guestData[4] = $dob;
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
    <div class="col-sm-3">

    </div><!--End of row-->
    <div class="col-sm-6">

        <?php require_once './form/_register2.php'; ?> 

    </div><!--End of col-->
</div><!--End of row-->
<?php
require_once './include/footer.php';
