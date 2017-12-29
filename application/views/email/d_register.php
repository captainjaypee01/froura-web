<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Account Verification</title>
    <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url() ?>assets/app-assets/images/logo/logo3.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>assets/app-assets/images/logo/logo3.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url() ?>assets/app-assets/images/logo/logo3.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url() ?>assets/app-assets/images/logo/logo3.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/app-assets/images/logo/logo3.png">
    <link rel="shortcut icon" type="image/png" href="<?= base_url() ?>assets/app-assets/images/logo/logo3.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/colors.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/app-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/assets/css/style.css">
    <!-- END Custom CSS-->
  </head>

<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-xs-12 mb-1">
                <h2 class="content-header-title">Froura</h2></div>
        </div>

        <!--  -->
        <div class="row match-height">
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Account Verifcation</h4>
                    </div>
                    <div class="card-body">
                        <div class="card-block">
                            <h1 class="text-sm-center">Hi <?=$fname ." " . $lname ?></h1>
                        </div>
                        <center>
                            <img class="img-fluid" src="<?= base_url()?>assets/app-assets/images/logo/logo3.png" alt="Voiture">
                        </center>
                        <div class="card-block">
                            <p class="card-text">
                            You have chosen the email <strong><code><?=$email?></code></strong> to be your verifying email.
                
                            Please activate your account by clicking the link below: <br>
                            </p>
                            <a href="<?= base_url()?>execute/dactivate/<?=$verification_code?>" class="card-link">Verify Account</a>
                        </div>
                    </div>
                    <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                        <span class="float-xs-left">Copyright &copy; Voiture 2017</span>
                        <span class="float-xs-right">
                            <a href="#" class="card-link">Read More <i class="icon-ios-arrow-right"></i></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!--- ----------- -->
    </div>
</div>


<?php $this->load->view('passenger/includes/footer') ?>