<?php
// require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tbl_users WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
   $image = $row["user_image"];  
  // $_SESSION["name"] = "$name";
  $_SESSION["name"] = $row["name"];
  // $_SESSION["email"] = $row["email"];
  // $_SESSION["password"] = $row["password"];
  // $_SESSION["phone"] = $row["phone"];
  // $_SESSION["city"] = $row["city"];
  // $_SESSION["address"] = $row["address"];
  // $_SESSION["user_image"] = $row["user_image"];
  // $_SESSION["user_resume"] = $row["user_resume"];
  // $_SESSION["current_company_name"] = $row["current_company_name"];
  // $_SESSION["experiences"] = $row["experiences"];
  // $_SESSION["skills"] = $row["skills"];
  // $_SESSION["gender"] = $row["gender"];
  // $_SESSION["dob"] = $row["date_of_birth"];
  // $_SESSION["register_date"] = $row["register_date"];
  // $_SESSION["status"] = $row["status"];

}
else{
  header("Location: login.php");
}
?>


<!-- Header start -->
<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-3 col-xs-12"> <a href="index.php" class="logo">
      <img src="images/logo 1.png" alt="LOGO" width="60" height="60" /></a>
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
              <li class="dropdown active"><a href="index.php">Home</a> 
                <!-- dropdown start 
                <ul class="dropdown-menu">
                  <li><a href="index.html">Home Static Image</a></li>
                  <li class="active"><a href="index2.html">Home With Map</a></li>
                  <li><a href="index3.html">Home With Slider</a></li>
                </ul>
                 dropdown end --> 
              </li>
              <li><a href="about-us.php">About us</a></li>

              <li class="dropdown"><a href="job.php">Jobs</a> 
                <!-- dropdown start 
                <ul class="dropdown-menu">
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="login.html">Login</a></li>
                  <li><a href="register.html">Register</a></li>
                  <li><a href="job-listing.html">Job Listing</a></li>
                  <li><a href="job-detail.html">Job Detail</a></li>
                  <li><a href="candidate-listing.html">Candidate Listing</a></li>
                  <li><a href="candidate-detail.html">Candidate Detail</a></li>
                  <li><a href="company-detail.html">Company Profile</a></li>
                  <li><a href="edit-profile.html">Edit Profile</a></li>
                  <li><a href="post-job.html">Post a Job</a></li>
                  <li><a href="packages.html">Packages</a></li>
                  <li><a href="faqs.html">FAQs</a></li>
                  <li><a href="404.html">404 Page</a></li>
                  <li><a href="typography.html">Typography</a></li>
                </ul>
                 dropdown end --> 
              </li>
              
              <li class="dropdown"><a href="blog.php">Blog </a> 
              <!--   dropdown start 
                <ul class="dropdown-menu">
                  <li><a href="blog.html">Blog List</a></li>
                  <li><a href="blog-detail.html">Blog Detail</a></li>
                  <li><a href="blog-grid.html">Blog Grid</a></li>
                  <li><a href="blog-full-width.html">Blog Grid Full Width</a></li>
                </ul>
                 dropdown end 
              </li>--> 
              <li><a href="contact.php">Contact</a></li>
              <!--<li class="postjob"><a href="post-job.php">Post a job</a></li>-->
              <!--<li class="jobseeker"><a href="job-seeker.php">Job Seeker</a></li>-->
              <!-- <li> <a href="#"><span style="Cursor:text !important; Text-Decoration: None !important; color:black;font-size:18px;font-family: cursive;font-weight:900;">Hi, &nbsp;<?php echo $row["name"]; ?></span></a> </li> -->
              <li style="margin-top:20px;margin-bottom:20px;"><span style="text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px;font-family: cursive;font-weight:900;">Hi,&nbsp;<?php echo $_SESSION["name"]; ?></span></li>
              
              <!-- <li><span style="margin-bottom:100px;border:1px solid red;background-color:powderblue;"> <a href="#"><?php echo $row["name"]; ?></a></span></li>-->
              <li class="dropdown userbtn"><a href="#"><img src="upload/profile_images/<?php echo $image; ?>" alt="" class="userimg" /></a> 
              	 <ul class="dropdown-menu">
                    <li><a href="dashboard.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
                    <li><a href="profile.php"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Profilt</a></li>
                    <li role="separator" class="divider"></li>
                    <!-- <li class="login"><a href="login.php">LOGIN</a></li> -->
                    <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
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
