<?php
require_once './_user.php';
require_once './include/header.php';

if (isset($_POST['confirm'])) {
    $userId = $_SESSION['user_id'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $transaction_no = $_POST['transaction_no'];
    $payment_mode = $_POST['payment_mode'];
//    $payment_time = time(); //

    $data = array($userId, $phone, $email, $amount, $transaction_no, $payment_mode);
    $user->confirmPayment($data);
}
?>
<div class="navbar"style="background-color: #9c28b1;box-shadow: 4px 10px 15px grey;">
    <?php
    require_once './include/navbar.php';
    ?>
</div>
<div class="container"> 
    <div class="row">
        <div class="col-sm-3"> 
            <div class="well">

            </div>
        </div><!--end of col-->
        <div class="col-sm-9">
            <?php
            require '../form/_payment.php';
            ?>
        </div><!--end of col-->
    </div><!--End of row-->

</div><!--End of container-->
<?php
require_once './include/footer.php';
