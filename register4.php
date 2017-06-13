<?php
require_once './process/session.php';
require_once './process/redirect.php';
require_once './process/config.php';
require_once './process/database.php';
require_once './include/header.php';
if (isset($_POST['continue'])) {
     
    $guestData = $_SESSION['$guestData'];

    $guestData[8] = $_POST['drinking'];
    $guestData[9] = $_POST['religion'];
    $guestData[10] = $_POST['ethinicity'];
    $guestData[11] = $_POST['employment'];
    $guestData[12] = $_POST['build'];
    $guestData[13] = $_POST['smoking'];
    $guestData[14] = $_POST['children'];
    $guestData[15] = $_POST['education'];
    $guestData[16] = $_POST['profession'];
    $guestData[17] = $_POST['essay'];

    $_SESSION['$guestData'] = $guestData;
    //print_r($_SESSION['$guestData']);
}
if (isset($_POST['finish'])) {
    print_r($_SESSION['registration_details']);

    $profile_image = $_FILES['image']['name'];
    $tmp_image = $_FILES['image']['tmp_name'];
    array_push($_SESSION['registration_details'], $profile_image);
    move_uploaded_file($tmp_image, 'img/profile_pic/' . $profile_image);

    echo '<br/><br/>';
    $guestData = $_SESSION['$guestData'];
    $guestData[18] = $profile_image;
    $_SESSION['$guestData'] = $guestData;
    print_r($_SESSION['$guestData']);
    
    
    require_once './_Guest.php';
    $guest->register($guestData);
    
}
?>
<div class="navbar"style="background-color: #ea6262;box-shadow: 4px 10px 15px grey;">
    <?php
    require_once './include/navbar.php';
    ?></div>
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
        <?php require_once './form/_register4.php'; ?>
    </div><!--End of col-->
</div><!--End of row-->
<?php
require_once './include/footer.php';
