
   <div class="app-content content container-fluid">
   <div class="content-wrapper">
     <div class="content-header row">
       <div class="content-header-left col-md-6 col-xs-12 mb-1">
         <h2 class="content-header-title">Profile</h2>
       </div>
       <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
         <div class="breadcrumb-wrapper col-xs-12">
           <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="<?= base_url('driver') ?>">Home</a>
             </li>
             <li class="breadcrumb-item active"><a href="#">Profile</a>
             </li>
           </ol>
         </div>
       </div>
     </div>
     <?php if(($error)){ ?>
         <div id="errorDiv" class="alert alert-danger"> <?= $error ?> </div>
     <?php } 
          if(($success)){ ?>
         <div id="successDiv" class="alert alert-success"> <?= $success ?> </div>
     <?php } ?>

<div class="content-body"><!-- Basic form layout section start -->
 <section id="basic-form-layouts">
     <div class="container">
         <div class="card">
             <div class="card-header">
                 <h4 class="card-title" id="basic-layout-colored-form-control">User Profile</h4>
                 <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                 <div class="heading-elements">
                     <ul class="list-inline mb-0">
                         <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                         <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                         <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                         <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                     </ul>
                 </div>
             </div>
                 <div class="card-body collapse in">
                     <div class="card-block">

                         <div class="card-text">
                             <p>You can always change the information of your account by clicking the  <a href="" ><code>My Account</code></a> in the navigation bar.
                         </div>

                             <div class="form-body">
                                 <form method="POST" action="<?= base_url() ?>execute/saveimage_passenger" enctype="multipart/form-data">
                                    <h4 class="form-section"><i class="icon-camera5"></i> Profile Picture</h4>
                                    
                                    <img src="<?= $user->img_path == "" ? base_url().'assets/app-assets/images/avatar.jpg' : base_url().'uploads/passenger/'.$user->img_path ?>" id="blah" width="150px" height ="150px">
                                    
                                    <br>

                                    <div class="form-group">
                                        <input type="file" name="img" id="imgInp" class="form-control input-lg">
                                    </div>

                                    <button type="submit" class="btn btn-info">
                                        <i class="icon-check2"></i> Save Image
                                    </button>
                                 </form>
                                 
                                 <form class="form" method="POST" action="<?= base_url() ?>execute/updatepassenger" enctype="multipart/form-data">
                        
                                 <h4 class="form-section"><i class="icon-eye6"></i> Sign-in Details</h4>
                                 
                                 <div class="form-group">
                                     <input type="hidden" name="t_username" value="<?=$user->username?>">
                                     <label for="userinput3">Username</label>
                                     <input type="text" id="userinput3" class="form-control border-info <?php if(!empty(form_error('username'))):?> border-danger <?php endif?>" placeholder="Username" name="username" value="<?php if(!empty(form_error('username'))){ echo set_value('username'); } else{echo $user->username; }?>">
                                     <span class="danger"><?php echo form_error('username')?></span>
                                 </div>
                                 <!--
                                 <div class="form-group">
                                     <label for="userinput3">Password</label>
                                     <input type="password" id="userinput3" class="form-control border-info" placeholder="Password" name="password" value="<?= $user->password?>" readonly>
                                 </div>
                                 -->
                                 <a class="btn btn-warning mr-1" onclick='$("#changepass").show();'>
                                     <i class="icon-edit2"></i> Change Password
                                 </a>
                                 
                                 <div id="changepass" style="display:none;">
                                     <div class="form-group">
                                         <label for="userinput3">New Password</label>
                                         <input type="password" id="np1" class="form-control border-info" placeholder="New Password" name="newpass1">
                                     </div>
                                     <div class="form-group">
                                         <label for="userinput3">Confirm Password</label>
                                         <input type="password" id="np2" class="form-control border-info" placeholder="Confrm Password" name="newpass2" >
                                     </div>
                                     
                                     <a class="btn btn-danger mr-1" onclick='$("#changepass").hide();$("#np1").val("");$("#np2").val("");'>
                                         <i class="icon-edit2"></i> Cancel
                                     </a>
                                 </div>


                                 <!-- PERSONAL INFO --> 
<!-- ==================================================================================================================================================================================================================== --> 
                                 <h4 class="form-section"><i class="icon-head"></i> Personal Information</h4>
                                 <div class="row">
                                     <div class="col-md-4">
                                         <div class="form-group">
                                             <label for="userinput1">Fist Name</label>
                                             <input type="text" id="userinput1" class="form-control border-info" placeholder="First Name" name="fname" value="<?= $user->fname?>">
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                         <div class="form-group">
                                             <label for="userinput3">Middle Name</label>
                                             <input type="text" id="userinput2" class="form-control border-info" placeholder="Middle Name" name="mname" value="<?= $user->mname?>">
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                         <div class="form-group">
                                             <label for="userinput2">Last Name</label>
                                             <input type="text" id="userinput2" class="form-control border-info" placeholder="Last Name" name="lname" value="<?= $user->lname?>">
                                         </div>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col-md-8">
                                         <div class="form-group">
                                             <label for="userinput4">Nick Name</label>
                                             <input type="text" id="userinput4" class="form-control border-info" placeholder="Nick Name" name="nickname" value="<?= $user->nickname?>">
                                         </div>
                                     </div>
                                 </div>
                                 
                                 <div class="row">
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label for="userinput4">Birthday</label>
                                             <input type="date" id="bday" class="form-control border-info" placeholder="Nick Name" name="bday" value="<?= date("Y-m-d",time($user->birthday))?>">
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="form-group">
                                             <label>Gender</label>
                                             <select class="form-control border-info" name="gender">
                                                 <option value="m" <?= $user->gender == 'm' ? "selected" : ''?> >Male </option>
                                                 <option value="f" <?= $user->gender == 'f' ? "selected" : ''?> >Female </option>
                                             </select>
                                         </div>
                                     </div>
                                 </div>

                                 <h4 class="form-section"><i class="icon-mail6"></i> Contact Info & Bio</h4>

                                 <div class="form-group">
                                     <input type="hidden" name="t_email" value="<?=$user->email?>">
                                     <label for="userinput5">Email</label>
                                     <input class="form-control border-info" type="email" placeholder="email" name="email" value="<?= $user->email?>" >
                                 </div>

                                 <div class="form-group">
                                     <label>Contact Number</label>
                                     <input class="form-control border-info" id="userinput7" type="tel" name="contact" placeholder="Contact Number" value="<?= $user->contact?>">
                                 </div>

                                 <div class="form-group">
                                     
                                     <label for="userinput8">Bio</label>
                                     <textarea id="userinput8" rows="5" class="form-control border-info" name="bio" placeholder="Bio"><?= $user->bio?></textarea>
                                 </div>

                             </div>

                             <div class="form-actions right">
                                 <button type="button" class="btn btn-warning mr-1">
                                     <i class="icon-cross2"></i> Cancel
                                 </button>
                                 <button type="submit" class="btn btn-info">
                                     <i class="icon-check2"></i> Save
                                 </button>
                             </div>
                         </form>

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
</div>

