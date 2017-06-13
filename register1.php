<?php
require_once './process/session.php';
require_once './process/redirect.php';
require_once './process/config.php';
require_once './process/database.php';
require_once './include/header.php';
?>
<div class="navbar"style="background-color: #ea6262;box-shadow: 4px 10px 15px grey;">
    <?php
    require_once './include/navbar.php';
    ?>
</div>
<div class="row" style="margin-top: 50px;">
    <div class="col-sm-3">
    </div><!--End of row-->
    <div class="col-sm-6">
        <?php require_once './form/_register1.php'; ?> 
    </div><!--End of col-->
</div><!--End of row-->
<?php
require_once './include/footer.php';
