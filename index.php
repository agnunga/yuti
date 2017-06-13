<?php
require_once './_Guest.php';
require_once './include/header.php';
?>
<div class="container">
    <div id="me" style="background-image: url(./img/datingbg.jpg);">
        <div class="navbar" style="background-color: #ea6262;">
            <?php
            require_once './include/navbar.php';
            ?>
        </div><!--End of navbar-->

        <!--  Start of body-------------------------->
        <div class="row">
            <div class="col-sm-6"id="welcome">
                <h1 style="color: #ea6262;">Welcome to WHYU</h1>
                <p style="color: blue;">An online platform that believes in hooking you up with your dream partner.</p>
                <a href="register1.php"class="btn">JOIN NOW</a><br /><br /><br />
                <a href="login.php" class="btn">LOGIN</a>
            </div><!--End of col-->
            <div class="col-sm-2">

            </div>
            <div class="col-sm-4">

            </div><!--End of col-->
        </div><!--End of row-->
        <hr />
        <div class="row">
            <div class="col-sm-3">
                <h3>HOW TO DIVE IN:</h3>
            </div><!--End of col-sm-3-->
            <div class="col-sm-3">
                <span class="badge" style="padding: 10px">1</span> <span class="glyphicon glyphicon-arrow-right" style="font-size: 20px;transform: rotate(320deg);color: white;"></span> <span id="free">Register free</span>
            </div><!--End of col-sm-3-->
            <div class="col-sm-3">
                <span class="badge" style="padding: 10px">2</span> <span class="glyphicon glyphicon-comment" style="font-size: 20px;transform: rotate(320deg);color: white;"></span> <span id="free">Friend describes you</span>
            </div><!--End of col-sm-3-->
            <div class="col-sm-3">
                <span class="badge" style="padding: 10px">3</span> <span class="glyphicon glyphicon-search" style="font-size: 20px;transform: rotate(320deg);color: white;"></span> <span id="free">Find great dates!</span>
            </div><!--End of col-sm-3-->
        </div><!--End of row-->
        <div class="row">
            <div class="col-sm-12">
                <div class="carousel slide" id="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <table class="table">
                                <tr>
                                    <td><img src="img/bw39.jpg"width="210px"height="200px"/></td>
                                    <td><img src="img/bw39.jpg"width="210px"height="200px"/></td>
                                    <td><img src="img/wb6.jpg"width="210px"height="200px"/></td>
                                    <td><img src="img/wb8.jpg"width="210px"height="200px"/></td>
                                    <td><img src="img/wb26.jpg"width="210px"height="200px"/></td>
                                </tr>
                            </table>
                        </div><!--End of item-->
                        <div class="item">
                            <table class="table">
                                <tr>
                                    <td><img src="img/bw39.jpg"width="210px"height="200px"/></td>
                                    <td><img src="img/bw39.jpg"width="210px"height="200px"/></td>
                                    <td><img src="img/wb6.jpg"width="210px"height="200px"/></td>
                                    <td><img src="img/wb8.jpg"width="210px"height="200px"/></td>
                                    <td><img src="img/wb26.jpg"width="210px"height="200px"/></td>
                                </tr>
                            </table>
                        </div><!--End of item-->
                    </div><!--End of carousel-inner-->
                    <a href="#carousel" class="right carousel-control" data-slide="next"><span class="icon-next"></span></a>
                    <a href="#carousel" class="left carousel-control" data-slide="prev"><span class="icon-prev"></span></a>
                </div><!--End of carousel-->
            </div><!--End of col-sm-12-->
        </div><!--End of row-->
        <hr />
        <div class="row">
            <div class="col-sm-12" style="text-align:center;">
                <div style="background-color: #ea6262;padding: 30px;font-family: Open Sans Condensed;font-size: 20px;">
                    <div class="row">
                        <div class="col-sm-3">

                        </div><!--End of col-sm-4-->
                        <div class="col-sm-6">
                            <center><img src="img/mag_icon.svg"/></center>
                            <h3 class="lead">DATING ADVICE</h3>
                            <p>
                                Everything you need to know about dating, from free date ideas to blogs by Match members, online dating tips, competitions, videos and much more. 
                            <center><a href="#" style="border: 2px solid white;border-radius: 5px;padding: 10px;color: white;text-shadow: 2px 2px 2px black;background-color:rgba(0,0,0,0.1);text-decoration: none;">FREE DATING ADVICE</a></center>
                            </p>
                        </div><!--End of col-sm-4-->
                    </div><!--end of row-->
                </div><!--End of div-->
            </div><!--End of col-sm-6-->
        </div><!--End of row-->
        <hr/>
        <div class="row">
            <div class="col-sm-4">
                <div style="background-color: #ea6262;padding: 30px;"class="links">
                    <center><img src="img/handshake-icon.svg"width="50px"height="60px"/></center>
                    <h3 style="text-align: center;">ONLINE DATING SAFETY</h3>
                    <center><a href="#">READ MORE</a></center>
                </div><!--End of div-->
            </div><!--end of col-sm-4-->
            <div class="col-sm-4">
                <div style="background-color: #5a7ab7;padding: 30px;"class="links">
                    <center><img src="img/blog-icon.svg"width="50px"height="60px"/></center>
                    <h3 style="text-align: center;">DATING BLOG</h3>
                    <center><a href="#">READ MORE</a></center>
                </div><!--End of div-->
            </div><!--end of col-sm-4-->
            <div class="col-sm-4">
                <div style="background-color: #5ab780;padding: 30px;"class="links">
                    <center><img src="img/advice-icon.svg"width="50px"height="60px"/></center>
                    <h3 style="text-align: center;">Dating tips & advice</h3>
                    <center><a href="#">READ MORE</a></center>
                </div><!--End of div-->
            </div><!--end of col-sm-4-->
        </div><!--End of row-->
        <hr />
        <!-- End of body  -------------------------->
        <?php require_once './include/footer.php'; ?>
    </div>
</div><!--End of container-->