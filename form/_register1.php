
<form method="POST"action="register2.php"class="well form-horizontal"style="box-shadow: 4px 4px 6px 6px grey;">
    <div style="text-align: center;position: relative;top: -70px;">
        <div class="panel-heading">
            <div class="well"style="background-color: #ea6262;color: white;">
                <h4>I'm Single<br />
                    I want to sign myself up</h4>
            </div><!--End of well-->
        </div><!--End of panel heading-->
        <div class="panel-body"style="box-shadow: 2px 6px 6px 3px grey;margin: 10px;">
            <div class="form-group">
                <label for="fname"class="control-label col-sm-3">I am:</label>
                <div class="col-sm-9">
                    <select class="form-control" name="gender" required>
                        <option value="" disabled selected>Select seeking...</option>
                        <option value="1">Male Seeking a Female</option>
                        <option value="2">Male Seeking a Male</option>
                        <option value="3">Male Seeking a Male or Female</option>
                        <option value="4">Female Seeking a Male</option>
                        <option value="5">Female Seeking a Female</option>
                        <option value="6">Female Seeking a Male or Female</option>
                    </select>
                </div><!--End of col-sm-9-->
            </div><!--End of form group-->
            <div class="form-group">
                <label for="fname"class="control-label col-sm-3">Aged between:</label>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-5">
                            <select class="form-control" name="min" required>
                                <option value="" disabled selected>Min</option>
                                <?php
                                for ($i = 18; $i <= 80; $i++) {
                                    echo "<option value='$i'>$i</option>";
                                }
                                ?>
                            </select>
                        </div><!--End of col-sm-5-->
                        <div class="col-sm-2">
                            and
                        </div><!--End of col-sm-5-->
                        <div class="col-sm-5">
                            <select class="form-control" name="max" required>
                                <option value="" disabled selected>Max</option>
                                <?php
                                for ($i = 18; $i <= 80; $i++) {
                                    echo "<option value='$i'>$i</option>";
                                }
                                ?>
                            </select>
                        </div><!--End of col-sm-5-->
                    </div><!--end of row-->
                </div><!--End of col-sm-9-->
            </div><!--End of form group-->
            <div class="form-group">
                <label for="fname"class="control-label col-sm-3">Location:</label>
                <div class="col-sm-9">
                    <input type="text"name="location" required class="form-control"placeholder="Enter Your Postcode or Town"/>
                    <p class="form-helper">We only need the first part of your postcode to find singles near you</p>
                </div><!--End of col-sm-9-->
            </div><!--End of form group-->
            <div class="form-group">
                <label for="fname"class="control-label col-sm-3">Date of birth:</label>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-xs-4">
                            <select class="form-control" name="day" required>
                                <option value="" disabled selected>DD</option>
                                <?php
                                for ($i = 1; $i <= 31; $i++) {
                                    echo "<option value='$i'>$i</option>";
                                }
                                ?>
                            </select>
                        </div><!--End of col-sm-5-->
                        <div class="col-xs-4">
                            <select class="form-control" name="month" required>
                                <option value="" disabled selected>MM</option>
                                <?php
                                for ($i = 1; $i <= 12; $i++) {
                                    echo "<option value='$i'>$i</option>";
                                }
                                ?>
                            </select>
                        </div><!--End of col-sm-5-->
                        <div class="col-xs-4">
                            <select class="form-control" name="year" required>
                                <option value="" disabled selected>YYYY</option>
                                <?php
                                for ($i = date("Y") - 18; $i >= date("Y") -78; $i--) {
                                    echo "<option value='$i'>$i</option>";
                                }
                                ?>
                            </select>
                        </div><!--End of col-sm-5-->
                    </div><!--end of row-->
                </div><!--End of col-sm-9-->
            </div><!--End of form group-->
            <div class="form-group">
                <label class="col-sm-3"></label>
                <div class="col-sm-9">
                    <input type="submit" name="continue" value="Continue" class="btn" style="background-color: #ffc728;padding: 5px;border: 5px ridge #ffc728;border-radius: 5px;"/>
                </div>
            </div><!--end of form-group-->
        </div><!--End of panel-body-->
    </div><!--End of div-->
</form>
