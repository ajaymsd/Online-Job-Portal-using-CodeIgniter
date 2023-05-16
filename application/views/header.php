<!-- Header start -->
<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-3 col-xs-12"> <a href="index.php" class="logo">
      <img src="<?php echo base_url('images/logo 1.png')?>" alt="LOGO" width="60" height="60" /></a>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-10 col-sm-12 col-xs-12"> 
        <!-- Nav start -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-collapse collapse" id="nav-main">
            <ul class="nav navbar-nav">
              <li class="dropdown active"><a href="<?php echo base_url('Jobseeker') ?>">Home</a> 
              </li>
              <li><a href="<?php echo base_url('Jobseeker/Aboutus') ?>">About us</a></li>

              <li class="dropdown"><a href="<?php echo base_url('Jobseeker/Job') ?>">Jobs</a> 
              </li>
              <li><a href="<?php echo base_url('Jobseeker/Contact') ?>">Contact</a></li>
              
              <li style="margin-top:20px;margin-bottom:20px;"><span style="text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px;font-family: cursive;font-weight:900;">Hi,&nbsp;<?php echo $this->session->userdata('loggedIn')['name']; ?></span></li>
             <?php foreach($userDetails as $userDetail){ ?>
              <li class="dropdown userbtn" style="margin-top:1%"><a href="#"><img src="<?php echo 'http://localhost/Jobportal/upload/profile_images/'?><?php echo $userDetail->user_image; ?>" alt="<?php echo base_url('images')?>/pro.png" class="userimg" /></a> 
              <?php } ?>	 
              <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('Login/dashboard')?>"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
                    <li><a href="<?php echo base_url('Login/editprofile')?>"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <!-- <li class="login"><a href="login.php">LOGIN</a></li> -->
                    <li><a href="<?php echo base_url('Login/logout')?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                  </ul>
                  
              </li>
            </ul>
            <!-- Nav collapes end --> 
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- Nav end --> 
      </div>
    </div>
    <!-- row end --> 
  </div>
  <!-- Header container end --> 
</div>
<!-- Header end --> 