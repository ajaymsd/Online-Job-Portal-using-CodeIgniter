<!DOCTYPE HTML>
<html lang="en">



<body>


<!-- Header -->
  <?php// include 'header.php'; ?>
<!-- /Header -->
<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Login</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <!-- <div class="breadCrumb"><a href="index.php">Home</a> / <span>Job Name</span></div> -->
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="listpgWraper">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="userccount">
          <!--<div class="socialLogin">
            <h5>Login Or Register with Social</h5>
            <a href="#." class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#." class="gp"><i class="fa fa-google-plus" aria-hidden="true"></i></a> <a href="#." class="tw"><i class="fa fa-twitter" aria-hidden="true"></i></a> </div>-->
          <h5>User Login</h5>
          <hr>
          <!-- login form -->
          <form action="<?php echo base_url('Login/loginuser'); ?>" method="post">
          <div class="formpanel">

            <div class="formrow">
            <label>Name or Email</label><br><br>
              <input type="text" name="email" class="form-control" placeholder="Enter Email" required = "">
            </div><br>

            <div class="formrow">
            <label>Password</label><br><br>
             <div class="password-container" style="position:relative">
              <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" required = "">
              <i style="position:absolute;top:26%;right:4%;cursor:pointer;font-size:20px" id="eye" class="fa fa-eye"></i>
              </div>
            </div>


            <span style="float:right;color:blue;line-height:40px;cursor:pointer;font-size:19px">Forgot Password ?</span>

            <input type="submit" name="login" class="btn" value="Login">

          </div>
          </form>
          <!-- login form  end--> 
          
          <!-- sign up form -->
          <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> DON'T HAVE AN ACCOUNT? <a href="<?php echo base_url('Register')?>">SIGN UP</a></div>
          <!-- sign up form end--> 
          
        </div>
      </div>
    </div>
  </div>
</div>






</body>

</html>