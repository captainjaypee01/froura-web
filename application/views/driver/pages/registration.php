<body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column  blank-page blank-page">
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content container-fluid">
  <div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <section class="flexbox-container">
            <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1 box-shadow-2 p-0">
                <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
                    <div class="card-header no-border">
                        <div class="card-title text-xs-center">
                            <img src="<?= base_url('assets/')?>app-assets/images/logo/froura-passenger.png" width="80" height="80"  alt="branding logo">
                        </div>
                        <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Create Account</span></h6>
                    </div>
                    <div class="card-body collapse in">	
                        <div class="card-block">
                            <form class="form-horizontal form-simple" action="" method="POST" novalidate>
                                <div id="reg_form1"> 
                                    <fieldset class="form-group position-relative has-icon-left mb-1 ">
                                    
                                        <input type="text" class="form-control form-control-lg input-lg <?php if(!empty(form_error('username'))):?> border-danger <?php endif?>" id="user-name" placeholder="Username" name="username" value="<?= set_value('username')?>">
                                        <div class="form-control-position">
                                            <i class="icon-head"></i>
                                        </div>
                                        <span class="danger"><?php echo form_error('username')?></span>
                                    </fieldset>
                                    <fieldset class="form-group position-relative has-icon-left mb-1">
                                        <input type="email" class="form-control form-control-lg input-lg <?php if(!empty(form_error('email'))):?> border-danger <?php endif?>" id="user-email" placeholder="Your Email Address" name="email" required value="<?= set_value('email')?>">
                                        <div class="form-control-position">
                                            <i class="icon-mail6"></i>
                                        </div>
                                        <span class="danger"><?php echo form_error('email')?></span>
                                    </fieldset>
                                    <fieldset class="form-group position-relative has-icon-left mb-1">
                                        <input type="password" class="form-control form-control-lg input-lg <?php if(!empty(form_error('password'))):?> border-danger <?php endif?>" id="user-password" placeholder="Enter Password" name="password" required >
                                        <div class="form-control-position">
                                            <i class="icon-key3"></i>
                                        </div>
                                        <span class="danger"><?php echo form_error('password')?></span>
                                    </fieldset>
                                    <fieldset class="form-group position-relative has-icon-left">
                                        <input type="password" class="form-control form-control-lg input-lg <?php if(!empty(form_error('repassword'))):?> border-danger <?php endif?>" id="user-repassword" placeholder="Enter Confirm Password" name="repassword" required>
                                        <div class="form-control-position">
                                            <i class="icon-key3"></i>
                                        </div>
                                        <span class="danger"><?php echo form_error('repassword')?></span>
                                    </fieldset>
                                    <a href="#" onclick='$("#reg_form2").show();$("#reg_form1").hide();$("#reg_form3").hide();' class="btn btn-info btn-lg btn-block">Next</a>
                                
                                </div>
                                <div id="reg_form2" style="display:none;height:auto;">   
                                    <fieldset class="form-group position-relative has-icon-left mb-1">
                                        <input type="text" class="form-control form-control-lg input-lg <?php if(!empty(form_error('fname'))):?> border-danger <?php endif?>" id="user-fname" placeholder="First Name" name="fname" value="<?= set_value('fname')?>">
                                        <div class="form-control-position">
                                            <i class="icon-android-contact"></i>
                                        </div>
                                        <span class="danger"><?php echo form_error('fname')?></span>
                                    </fieldset>
                                    <fieldset class="form-group position-relative has-icon-left mb-1">
                                        <input type="text" class="form-control form-control-lg input-lg <?php if(!empty(form_error('mname'))):?> border-danger <?php endif?>" id="user-mname" placeholder="Middle Name" name="mname" value="<?= set_value('mname')?>">
                                        <div class="form-control-position">
                                            <i class="icon-android-contact"></i>
                                        </div>
                                        <span class="danger"><?php echo form_error('mname')?></span>
                                    </fieldset>
                                    <fieldset class="form-group position-relative has-icon-left mb-1">
                                        <input type="text" class="form-control form-control-lg input-lg <?php if(!empty(form_error('lname'))):?> border-danger <?php endif?>" id="user-lname" placeholder="Last Name" name="lname" value="<?= set_value('lname')?>">
                                        <div class="form-control-position">
                                            <i class="icon-android-contact"></i>
                                        </div>
                                        <span class="danger"><?php echo form_error('lname')?></span>
                                    </fieldset>
                                    <a href="#" onclick='$("#reg_form1").show();$("#reg_form2").hide();$("#reg_form3").hide();' class="btn btn-primary btn-lg btn-block">Back</a>
                                    <a href="#" onclick='$("#reg_form3").show();$("#reg_form1").hide();$("#reg_form2").hide();' class="btn btn-info btn-lg btn-block">Next</a>
                                
                                </div>
                                <div id="reg_form3" style="display:none;">  
                                    <fieldset class="form-group position-relative has-icon-left mb-1">
                                        <input type="text" class="form-control form-control-lg input-lg <?php if(!empty(form_error('contact'))):?> border-danger <?php endif?>" id="user-contact" placeholder="Contact Number" name="contact" value="<?= set_value('contact')?>">
                                        <div class="form-control-position">
                                            <i class="icon-phone"></i>
                                        </div>
                                        <span class="danger"><?php echo form_error('contact')?></span>
                                    </fieldset>
                                        <div class="form-group ">
                                            <div class="input-group <?php if(!empty(form_error('gender'))):?> border-danger <?php endif?>">
                                            <label>Gender</label>
                                                <label class="display-inline-block custom-control custom-radio ml-1">
                                                    <input type="radio" name="gender" value="m"class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description ml-0">Male</span>
                                                </label>
                                                <label class="display-inline-block custom-control custom-radio">
                                                    <input type="radio" name="gender" value="f" class="custom-control-input">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description ml-0">Female</span>
                                                </label>
                                            </div>
                                            <span class="danger"><?php echo form_error('gender[]')?></span>
                                        </div>
                                    
                                    <label>Birthday</label>
                                            
                                    <fieldset class="form-group position-relative has-icon-left mb-1">
                                        <input type="date" class="form-control form-control-lg input-lg <?php if(!empty(form_error('bday'))):?> border-danger <?php endif?>" id="user-bday" placeholder="Birthday" name="bday" value="<?= set_value('bday')?>">
                                        <div class="form-control-position">
                                            <i class="icon-calendar3"></i>
                                        </div>
                                        <span class="danger"><?php echo form_error('bday')?></span>
                                    </fieldset>
                                    <fieldset class="form-group position-relative has-icon-left mb-1">
                                        <div class="form-group">
                                            <?=$widget?>
                                            <?=$script?>
                                        </div>
                                    </fieldset>
                                    
                                    <a href="#" onclick='$("#reg_form2").show();$("#reg_form1").hide();$("#reg_form3").hide();' class="btn btn-primary btn-lg btn-block">Back</a>
                                
                                    <button type="submit" class="btn btn-info btn-lg btn-block"><i class="icon-unlock2"></i> Register</button>
                                </div>
                            </form>
                        </div>
                        <p class="text-xs-center">Already have an account ? <a href="<?= base_url('driver/login')?>" class="card-link">Login</a></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
  </div>
</div>
<!-- /////////////////////////////////////////////////////////