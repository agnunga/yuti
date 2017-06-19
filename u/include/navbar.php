
<a href="index.php" class="navbar-brand" style="color:white; ">WHYU</a>
<button type="button"class="navbar-toggle"data-toggle="collapse"data-target="#collapse">
    <span class="icon-bar"style="background-color: white;"></span>
    <span class="icon-bar" style="background-color: white;"></span>
    <span class="icon-bar" style="background-color: white;"></span>
</button>
<ul class="nav navbar-nav collapse navbar-collapse pull-right"id="collapse" style="border-radius: 5px;padding-left: 0px;padding-right: 0px;">
    <!--    <li><a href="../index.php" style="color: white;">HOME</a></li>
        <li><a href="../about.php">ABOUT US</a></li>
        <li><a href="../contact.php">CONTACT US</a></li>-->
    <?php
    if (isset($_SESSION['first_name'])) {
        ?>
        <li><a> <?php echo $_SESSION['first_name']; ?> </a></li>
        <li><a href='logout.php'>Logout</a></li>
        <?php
    } else {
        echo "<li style='background-color:white;border-radius: 5px;'><a href='login.php'>MEMBER LOGIN</a></li>";
    }

    if ($user->isSubscriptionActive() || $_SESSION['interest'] == 4) {
        
    } else {
        require_once '../modals/__subscribe.php';
        ?>  
        <li>
            <button class="btn btn-lg btn-primary" data-toggle="modal" data-target="#subscribe_modal"
                    style="cursor: pointer;"> SUBSCRIBE
            </button>
        </li>
        <?php
    }
    ?>
    <!--<li><a href="./logout.php">Logout</a></li>-->
</ul>
