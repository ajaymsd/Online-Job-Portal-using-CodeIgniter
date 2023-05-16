<!DOCTYPE HTML>
<html lang="en">

<?php include 'head.php'; ?>


<?php
//require 'config.php';
// if(!empty($_SESSION["id"])){
//   header("Location: index.php");
// }

require 'config.php';

if(isset($_POST["login"])){
    
    
   $email = $_POST["email"];
   $password = $_POST["password"];
   $pass = md5($password);
  $result = "SELECT * FROM tbl_users WHERE name = '$email' OR email = '$email'"; 
 
 
 $row = $conn->query($result);
  //$row = mysqli_fetch_assoc($result);
  if($row->num_rows > 0){
      
      while($result = $row->fetch_assoc()) {
     print_r($result);
    if($pass == $result['password'] && $result['user_type'] == 2){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $result["id"];
      header("Location: prov_index.php");
    }
    else if ($pass == $result['password'] && $result['user_type'] == 1) {
     $_SESSION["login"] = true;
      $_SESSION["id"] = $result["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
      }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>




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
          <div class="socialLogin">
            <h5>Login Or Register with Social</h5>
            <a href="#." class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#." class="gp"><i class="fa fa-google-plus" aria-hidden="true"></i></a> <a href="#." class="tw"><i class="fa fa-twitter" aria-hidden="true"></i></a> </div>
          <h5>User Login</h5>
          <!-- login form -->
          <form action="" method="post">
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
              <!-- <i style="position:absolute;top:25%;right:4%;cursor:pointer" class="material-icons" onclick="myFunction()" >remove_red_eye</i> -->
              </div>
            </div>


            <span style="float:right;color:blue;line-height:40px;cursor:pointer;font-size:19px">Forgot Password ?</span>

            <input type="submit" name="login" class="btn" value="Login">

          </div>
          </form>
          <!-- login form  end--> 
          
          <!-- sign up form -->
          <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> DON'T HAVE AN ACCOUNT? <a href="register.php">SIGN UP</a></div>
          <!-- sign up form end--> 
          
        </div>
      </div>
    </div>
  </div>
</div>

 <?php 
 /*
      if (isset($POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $select = mysqli_query($conn, "SELECT * FROM tbl_users WHERE email = '$email' AND password = '$password'");
        $_SESSION["name"] = $row ['name'];
        $row = mysqli_fetch_array($select);

        if(is_array($row)){
          $_SESSION["email"] = $row ['email'];          
          $_SESSION["password"] = $row ['password'];
          
        } else{
            echo '<script type = "text/javascript">';
            echo 'alert("Invalid Email or Password")';
            echo 'window.location.href = "index.php" ';
            echo '</script>';
          }
        }
        if(isset($_SESSION["email"])){
          header("Location:index.php");
        } */
        ?> 




<!-- Footer -->
 <?php include 'login_footer.php'; ?>
<!-- /Footer -->


</html>