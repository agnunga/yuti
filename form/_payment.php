
<form method="POST"action="subscribe.php" class="well form-horizontal"style="box-shadow: 4px 4px 6px 6px grey;">
    <div style="text-align: center;">
        <div class="panel-heading" style="margin-bottom: -30px;">
            <div class="well" style="padding: 0px;">
                <h4>Payment details</h4>
            </div><!--End of well-->
        </div><!--End of panel heading-->
        <div class="panel-body"style="box-shadow: 2px 6px 6px 3px grey;margin: 10px;">
            <div class="form-group">
                <label class="control-label col-sm-3">Phone No: </label>
                <div class="col-sm-9">
                    <input type="text"name="phone" required placeholder="" class="form-control"/>
                </div><!--End of col-sm-9-->
            </div><!--end of form-group-->
            <div class="form-group">
                <label class="control-label col-sm-3">My email </label>
                <div class="col-sm-9">
                    <input type="email"name="email" required placeholder="This will remain confidential" class="form-control"/>
                </div><!--End of col-sm-9-->
            </div><!--end of form-group-->
            <div class="form-group">
                <label class="control-label col-sm-3">Amount </label>
                <div class="col-sm-9">
                    <input type="text"name="amount" required class="form-control"/>
                </div><!--End of col-sm-9-->
            </div><!--end of form-group-->
            <div class="form-group">
                <label class="control-label col-sm-3">Transaction No: </label>
                <div class="col-sm-9">
                    <input type="text"name="transaction_no" required class="form-control"/>
                </div><!--End of col-sm-9-->
            </div><!--end of form-group-->

            <div class="form-group">
                <label class="control-label col-sm-3">payment mode</label>
                <div class="col-sm-9">
                    <select class="form-control" name="payment_mode" required>
                        <option value="" disabled selected>Please select</option>
                        <option value="1">MPESA</option>
                        <option value="2">Airtel money</option>
                        <option value="3">Bank</option>
                    </select>
                </div><!--End of col-sm-9-->
            </div><!--End of form group--> 
            <div class="form-group">
                <input type="submit"name="confirm"value="Confirm Payment" class="pull-right" style="background-color: #ffc728;padding: 5px;border: 5px ridge #ffc728;border-radius: 5px;margin-right: 20px;"/>
            </div><!--end of form-group-->

        </div><!--End of panel-body-->
    </div><!--End of div-->
</form>
