<?php
require_once './include/header.php';
?>
<div class="navbar"style="background-color: #9c28b1;box-shadow: 4px 10px 15px grey;">
    <?php
    require_once './include/navbar.php';
    ?>
</div>
<div class="row">
    <div class="container"style="margin-top: 30px;background-color: white;border-radius: 10px;padding-bottom: 300px;">
        <div class="col-sm-7"style="box-shadow: 4px 10px 6px 2px grey;padding-top: 20px;margin-top: 20px;">
            <div class="panel">
                <div class="panel-heading"style="text-align: center;background-color: #9c28b1;position: relative;top: -35px;color: white;">
                    <h4 style="padding-top: 20px;">Contact Us</h4>
                    <p>Send us a brief message and we will get back to you as soon as possible.</p>
                </div><!--End of panel heading-->
                <div class="panel-body"style="box-shadow: 4px 10px 6px grey;">
                    <form method="POST"action="contact.phps">
                        <div class="form-group">
                            <label for="name"class="control-label">Your Name</label>
                            <input type="text"name="name"class="form-control"/>
                        </div><!--End of form group-->
                        <div class="form-group">
                            <label for="email"class="control-label">Your Email</label>
                            <input type="text"name="email"class="form-control"/>
                        </div><!--End of form group-->
                        <div class="form-group">
                            <label for="phone"class="control-label">Mobile Number</label>
                            <input type="text"name="phone"class="form-control"/>
                        </div><!--End of form group-->
                        <div class="form-group">
                            <label for="name"class="control-label">Message</label>
                            <textarea class="form-control"name="message"></textarea>
                        </div><!--End of form group-->
                        <div class="form-group">
                            <input type="submit"name="send"value="Send"class="btn pull-right"style="background-color: #9c28b1;padding: 8px 30px;color: white;"/>
                        </div><!--End of form group-->
                    </form>
                </div><!--End of panel body-->
            </div><!--End of panel-->
        </div><!--End of col-->
        <div class="col-sm-5"style="margin-top: 20px;">
            <div class="row">
                <div class="col-sm-2">
                    <h1 style="font-size: 45px;color: #9c28b1;margin-top: 60px;">OR</h1>
                </div><!--End of col-->
                <div class="col-sm-10"style="box-shadow: 4px 6px 6px 4px grey;">
                    <p style="padding: 30px;">

                    <h4>Contact Details</h4>
                    <h5>Phone: +1 909 678 6331</h5>
                    <h5>Email: inquiries@ulusoyes.org</h5>
                    <h5 style="margin-bottom: 30px;">Website: <a href="http:/www.ulusoyes.org"style="color:#9c28b1; ">www.ulusoyes.org</a></h5>

                    </p>
                </div><!--End of col-->
            </div><!--End of row-->
        </div><!--End of col-->
    </div><!--End of container-->
</div><!--End of row-->
<?php
require_once './include/footer.php';
