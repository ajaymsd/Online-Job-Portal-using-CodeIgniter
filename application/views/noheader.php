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
              <li class="dropdown active"><a href="<?php echo base_url('Home') ?>">Home</a> 
                <!-- dropdown start 
                <ul class="dropdown-menu">
                  <li><a href="index.html">Home Static Image</a></li>
                  <li class="active"><a href="index2.html">Home With Map</a></li>
                  <li><a href="index3.html">Home With Slider</a></li>
                </ul>
                 dropdown end --> 
              </li>
              <li><a href="<?php echo base_url('Home/noaboutus');?>">About us</a></li>

              <li class="dropdown"><a href="<?php echo base_url('Home/Nojob');?>">Jobs</a> 
              </li>
              <li><a href="<?php echo base_url('Home/Nocontact');?>">Contact</a></li>
               <li class="postjob"><a href="<?php echo base_url('Login');?>">Post a job</a></li>
              <li class="jobseeker"><a href="<?php echo base_url('Login');?>">Job Seeker</a></li>
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
