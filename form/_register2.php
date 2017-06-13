
<form method="POST"action="register3.php"class="well form-horizontal"style="box-shadow: 4px 4px 6px 6px grey;">
    <div style="text-align: center;">
        <div class="panel-heading" style="margin-bottom: -30px;">
            <div class="well" style="padding: 0px;">
                <h4>Your details</h4>
            </div><!--End of well-->
        </div><!--End of panel heading-->
        <div class="panel-body"style="box-shadow: 2px 6px 6px 3px grey;margin: 10px;">
            <div class="form-group">
                <label class="control-label col-sm-3">Full Name </label>
                <div class="col-sm-9">
                    <input type="text"name="fullname" required placeholder="We Use first Names on Profiles - No silly Usernames!" class="form-control"/>
                </div><!--End of col-sm-9-->
            </div><!--end of form-group-->
            <div class="form-group">
                <label class="control-label col-sm-3">My email </label>
                <div class="col-sm-9">
                    <input type="email"name="email" required placeholder="This will remain confidential" class="form-control"/>
                </div><!--End of col-sm-9-->
            </div><!--end of form-group-->
            <div class="form-group">
                <label class="control-label col-sm-3">Create a password </label>
                <div class="col-sm-9">
                    <input type="password"name="password" required class="form-control"/>
                </div><!--End of col-sm-9-->
            </div><!--end of form-group-->
            <div class="form-group"> 
                <span>
                    <label>
                        <input type="checkbox"name="above18" required class="col-sm-1"> 
                        <p class="col-sm-11"  style="font: 12px; font-weight: 200; text-align: left;">
                            I confirm I am over 18 and agree to the terms and conditions, privacy policy and cookie policy. 
                            I understand I may receive special offers and other email communications from MySingleFriend and I can adjust email preferences at any time.
                        </p>
                    </label> 
                </span>
            </div><!--end of form-group-->
            <div class="form-group">
                <input type="submit"name="continue"value="Continue" class="pull-right" style="background-color: #ffc728;padding: 5px;border: 5px ridge #ffc728;border-radius: 5px;margin-right: 20px;"/>
            </div><!--end of form-group-->

        </div><!--End of panel-body-->
    </div><!--End of div-->
</form>
