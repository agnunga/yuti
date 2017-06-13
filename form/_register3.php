<form method="POST"action="register4.php"class="well form-horizontal"style="box-shadow: 4px 4px 6px 6px grey;">
    <div style="text-align: center;">
        <div class="panel-heading" style="margin-bottom: -30px;">
            <div class="well" style="padding: 0px;">
                <h4>About you</h4>
            </div><!--End of well-->
        </div><!--End of panel heading-->
        <div class="panel-body"style="box-shadow: 2px 6px 6px 3px grey;margin: 10px;">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label col-sm-3">Drinking</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="drinking" required>
                                <option value="" disabled selected>Please select</option>
                                <option value="never">never</option>
                                <option value="rarely">rarely</option>
                                <option value="weekend good times">Never</option>
                                <option value="Never">often</option>
                                <option value="Never">like a fish</option>
                            </select>
                        </div><!--End of col-sm-9-->
                    </div><!--End of form group-->
                    <div class="form-group">
                        <label class="control-label col-sm-3">Religion</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="religion" required>
                                <option value="" disabled selected>Please select</option>
                                <option value="Christian">Christian</option>
                                <option value="Spiritual">Spiritual</option>
                                <option value="Jewish">Jewish</option>
                                <option value="Buddhist">Buddhist</option>
                                <option value="Muslim">Muslim</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Sikh">Sikh</option>
                                <option value="Atheist">Atheist</option>
                                <option value="Other">Other</option>
                                <option value="None">None</option>
                            </select>
                        </div><!--End of col-sm-9-->
                    </div><!--End of form group-->
                    <div class="form-group">
                        <label class="control-label col-sm-3">Ethnicity</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="ethinicity" required>
                                <option value="" disabled selected>Please select</option>
                                <option value="Kikuyu">Kikuyu</option>
                                <option value="Kalenjin">Kalenjin</option>
                                <option value="Kisii">Kisii</option>
                                <option value="Luyhia">Luyhia</option>
                                <option value="Luo">Luo</option>
                            </select>
                        </div><!--End of col-sm-9-->
                    </div><!--End of form group-->
                    <div class="form-group">
                        <label class="control-label col-sm-3">Employment</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="employment" required>
                                <option value="" disabled selected>Please select</option>
                                <option value="employed">employed</option>
                                <option value="self-employed">self-employed</option>
                                <option value="don't need to work">don't need to work</option>
                                <option value="in between jobs">in between jobs</option>
                                <option value="Homemaker">Homemaker</option>
                                <option value="Retired">Retired</option>
                            </select>
                        </div><!--End of col-sm-9-->
                    </div><!--End of form group-->
                    <div class="form-group">
                        <label class="control-label col-sm-3">Build</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="build" required>
                                <option value="" disabled selected>Please select</option>
                                <option value="super fit">super fit</option>
                                <option value="slender">slender</option>
                                <option value="average">average</option>
                                <option value="curvaceous">curvaceous</option>
                                <option value="cuddly">cuddly</option>
                                <option value="well built">well built</option>
                                <option value="skinny">skinny</option>
                                <option value="athletic">athletic</option>
                                <option value="fuller figure">fuller figure</option>
                                <option value="could lose afew">could lose afew</option>
                            </select>
                        </div><!--End of col-sm-9-->
                    </div><!--End of form group-->
                </div><!--End of col-sm-6-->
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label col-sm-3">Smoking</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="smoking" required>
                                <option value="" disabled selected>Please select</option>
                                <option value="yes">yes</option>
                                <option value="no">no</option>
                                <option value="occasional social">occasional social</option>
                            </select>
                        </div><!--End of col-sm-9-->
                    </div><!--End of form group-->
                    <div class="form-group">
                        <label class="control-label col-sm-3">Children</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="children" required>
                                <option value="none">none</option>
                                <?php
                                for ($i = 1; $i <= 9; $i++) {
                                    echo "<option value='$i'>$i</option>";
                                }
                                ?>
                                <option value="10+">10+</option>
                            </select>
                        </div><!--End of col-sm-9-->
                    </div><!--End of form group-->
                    <div class="form-group">
                        <label class="control-label col-sm-3">Education</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="education" required>
                                <option value="" disabled selected>Select</option>
                                <option value="school">school</option>
                                <option value="university">university</option>
                                <option value="lots of quals">lots of quals</option>
                                <option value="university of life">university of life</option>
                                <option value="masters/Phd">masters/Phd</option>
                            </select>
                        </div><!--End of col-sm-9-->
                    </div><!--End of form group-->
                    <div class="form-group">
                        <label class="control-label col-sm-3">Profession</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"placeholder="What you do in your own words!"name="profession" required/>
                        </div><!--End of col-sm-9-->
                    </div><!--End of form group-->
                </div><!--End of col-sm-6-->
            </div><!--End of row-->
            <div class="form-group">
                <h4>Tell us a few interesting things about yourself</h4>
                <p style="text-align:left;padding: 10px;">
                    This is your chance to tell us a bit about yourself, in your own words! It doesn't need to be long - you could write about your hobbies, where you're from, what's on your bucket list, and what you're looking for in a partner.
                </p>
                <textarea class="form-control" name="essay" rows="4" required maxlength="1000" placeholder="This needs to be at least 20 words long."></textarea>
            </div><!--End of form group-->
            <div class="form-group">
                <input type="submit"name="continue" value="Continue" class="pull-right" style="background-color: #ffc728;padding: 5px;border: 5px ridge #ffc728;border-radius: 5px;margin-right: 20px;"/>
            </div><!--End of form group-->
        </div><!--End of panel-body-->
    </div><!--End of div-->
</form>
