<div class="app-content content container-fluid">
<div class="content-wrapper">
  <div class="content-header row">
  </div>
  <div class="content-body"><section class="flexbox-container">
<div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-0">
  <div class="card border-grey border-lighten-3 m-0">
      <div class="card-header no-border">
          <div class="card-title text-xs-center">
              <div class="p-1"><img src="<?= base_url() ?>assets/app-assets/images/logo/froura-passenger.png" width="80" height="80" alt="branding logo"></div>
          </div>
          <?php 
              if($error){
          ?>
                  <div id="errorDiv" class="alert alert-danger"><?= ($error) ?></div>
          
          <?php } 
              if(($success)){ ?>
                  <div id="successDiv" class="alert alert-success"> <?= $success ?> </div>
          <?php } 
              if(($warning)){ ?>
                  <div id="warningDiv" class="alert alert-warning"> <?= $warning ?> </div>
          <?php } ?>

          <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Login with Froura</span></h6>
      </div>
      <div class="card-body collapse in">
          <div class="card-block">
              <form class="form-horizontal form-simple" action="<?= base_url()?>execute/logind" method="POST">
                  <fieldset class="form-group position-relative has-icon-left mb-0">
                      <input type="text" name="username" class="form-control form-control-lg input-lg" id="user-name" placeholder="Username" required>
                      <div class="form-control-position">
                          <i class="icon-head"></i>
                      </div>
                  </fieldset>
                  <fieldset class="form-group position-relative has-icon-left">
                      <input type="password" name="password" class="form-control form-control-lg input-lg" id="user-password" placeholder="Password" required>
                      <div class="form-control-position">
                          <i class="icon-key3"></i>
                      </div>
                  </fieldset>
                 
                  <button class="btn btn-warning btn-lg btn-block"><i class="icon-unlock2"></i> Login</button>
              </form>
          </div>
      </div>
      <div class="card-footer">
          <div class="">
              <p class="float-sm-right text-xs-center m-0">New to Froura? <a href="<?= base_url('driver/register') ?>" class="card-link">Sign Up</a></p>
          </div>
      </div>
  </div>
</div>
</section>

  </div>
</div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
