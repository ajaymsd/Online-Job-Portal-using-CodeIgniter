<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Register</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <!-- <div class="breadCrumb"><a href="index.php">Home</a> / <span>Register</span></div> -->
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
            <a href="#." class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="#." class="gp"><i class="fa fa-google-plus" aria-hidden="true"></i></a> <a href="#." class="tw"><i class="fa fa-twitter" aria-hidden="true"></i></a> </div>
          <div class="alert alert-success" role="alert"><strong>Well done!</strong> Your account successfully created.</div>
          <div class="alert alert-warning" role="alert"><strong>Warning!</strong> Better check yourself, you're not looking too good.</div>
          <div class="alert alert-danger" role="alert"><strong>Oh snap!</strong> Change a few things up and try submitting again.</div>-->
          <h5>Register</h5>
          <hr>
          <div class="userbtns">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#candidate">Job Seeker</a></li>
              <li><a data-toggle="tab" href="#employer">Job Provider</a></li>
            </ul>
          </div>
          

          <div class="tab-content">
            <!-- =======================================================================================-->
           <!-- Registration for Job Seeker -->
            <?php //include 'srone.php'; ?>
            <?php
            /*

if (isset($_POST['register'])) {
  // echo "<pre>"; print_r ($_REQUEST); die;
    if (isset($_POST['name']) && isset($_POST['phone']) &&
    isset($_POST['email']) && isset($_POST['password']) && isset($_POST['usertype']) && isset($_POST['register_date'])) {
    
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pass = md5($password);
    $user_type = $_POST['usertype'];
    $register_date = $_POST['register_date'];

//include 'config.php';

// echo "<pre>"; print_r ($_REQUEST);

// if($password != $confirmpassword){ {
//   echo  "<script> alert('Password Does Not Match'); </script>";
//   die('password mismatch')
// }
       if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
          
            $Select = "SELECT email FROM tbl_users WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO tbl_users(name, phone, email, password, user_type, register_date) values(?,?,?,?,?,?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sissis",$name, $phone, $email, $pass, $user_type, $register_date);
                if ($stmt->execute()) {
                  $alert = "<script>window.location.href='login.php';alert('New record inserted sucessfully.');</script>";
                  echo $alert;
                  // header("Location: login.php");
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
              $alert = "<script>alert('Someone already registers using this email.');</script>";
                echo $alert;
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
      $alert = "<script>alert('All field are required.');</script>";
                echo $alert;
        die();
    }
}
*/
?>



<div id="candidate" class="formpanel tab-pane fade in active">
  <div class="row">
    <div class="col"><?php echo validation_errors(); ?></div>
  </div>
<form action="<?php echo base_url('Register/add'); ?>" method="post">           
              <div class="formrow">
              <label>Name</label><br><br>
                <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
              </div>
              <div class="formrow">
              <label>Phone</label><br><br>
                <input type="text" name="phone" class="form-control" placeholder="Enter Phone" required>
              </div>
              <div class="formrow">
              <label>Email</label><br><br>
                <input type="text" name="email" class="form-control" placeholder="Enter Email" required>
              </div>
              <div class="formrow">
              <label>Password</label><br><br>
                <input type="text" name="password" class="form-control" placeholder="Create Password" required>
              </div>
             <!-- <label>Confirm Password</label><br><br>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required>
              </div>-->
              <!-- the below will set the user type one for all so it will register as an employee-->

            <input type="hidden" name="usertype" class="form-control" value="1">

            <input type="hidden" name="register_date" class="form-control" value="<?php echo date("d/m/Y");?>">


<!-- for checking your submit is happening  in the php echo "<pre>"; print_r ($_REQUEST);-->

              <!--<div class="formrow">
              <label>Confirm Password</label><br><br>
                <input type="text" name="conpass" class="form-control" placeholder="Confirm Password">
              </div>
              <div class="formrow">
                <input type="checkbox" value="agree text" name="agree" />
                There are many variations of passages of Lorem Ipsum available</div>-->
              <input type="submit" name="register" class="btn" value="Register">
              </form> 
            </div>
           
           <!-- ============================================================================= --> 

           <!-- Registration for job seeker -->
            
            <?php //include 'srtwo.php'; ?>
            <?php
/*
if (isset($_POST['submitcomp'])) {
  // echo "<pre>"; print_r ($_REQUEST); die;
    if (isset($_POST['name']) && isset($_POST['phone']) &&
    isset($_POST['email']) && isset($_POST['password']) && isset($_POST['user_type']) && isset($_POST['register_date'])) {
    
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pass = md5($password);
    $user_type = $_POST['user_type'];
    $register_date = $_POST['register_date'];

//include 'config.php';

// echo "<pre>"; print_r ($_REQUEST);

// if($password != $confirmpassword){ {
//   echo  "<script> alert('Password Does Not Match'); </script>";
//   die('password mismatch')
// }
       if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
          
            $Select = "SELECT email FROM tbl_users WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO tbl_users(name, phone, email, password, user_type, register_date) values(?,?,?,?,?,?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sissis",$name, $phone, $email, $pass, $user_type, $register_date);
                if ($stmt->execute()) {
                  $alert = "<script>window.location.href='login.php';alert('New record inserted sucessfully.');</script>";
                  echo $alert;
                  header("Location: login.php");
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
              $alert = "<script>alert('Someone already registers using this email.');</script>";
                echo $alert;
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
      $alert = "<script>alert('All field are required.');</script>";
                echo $alert;
        die();
    }
}
*/
?>

<div id="employer" class="formpanel tab-pane fade in">
  <form action="<?php echo base_url('Register/add');?>" method="post">
              <!-- <h5>Profile Details:</h5> -->
              <div class="formrow">
              <label>Name</label><br><br>
                <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
              </div>
              <div class="formrow">
              <label>Phone</label><br><br>
                <input type="text" name="phone" class="form-control" placeholder="Enter Phone" required>
              </div>
              <div class="formrow">
              <label>Email</label><br><br>
                <input type="text" name="email" class="form-control" placeholder="Enter Email" required>
              </div>
              <div class="formrow">
              <label>Password</label><br><br>
                <input type="text" name="password" class="form-control" placeholder="Create Password" required>
              </div>          
              <div class="formrow">
              <input type="hidden" name="register_date" class="form-control" value="<?php echo date("d/m/Y");?>">
                <!-- <input type="radio" value="individual" name="ctab" checked="checked" onclick="show1();" /><label>&nbsp;Individual</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" value="company" name="ctab" onclick="show2();" /><label>&nbsp;Company</label>              -->
            <input type="hidden" name="usertype" class="form-control" value="2">
            </div>
            <hr>
           

            <input type="submit" name="register" class="btn" value="Register">
            </form>
          </div>

          
          <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> Already a Member? <a href="<?php echo base_url('Login');?>">Login Here</a></div>

        
            </div>

      </div>
    </div>
  </div>
</div>


