<?php
/*
// require 'config.php';
//echo $_SESSION["id"];
$id = $_SESSION["id"];
$result = mysqli_query($conn, "SELECT * FROM tbl_users WHERE id = $id");
$row = mysqli_fetch_assoc($result);
*/
?>

<head>

    <style>
    .upload {
        width: 125px;
        position: relative;
        margin: auto;
    }

    .upload img {
        border-radius: 50%;
        border: 8px solid #DCDCDC;
    }

    .upload .round {
        position: absolute;
        bottom: 0;
        right: 0;
        background: #00B4FF;
        width: 32px;
        height: 32px;
        line-height: 33px;
        text-align: center;
        border-radius: 50%;
        overflow: hidden;
    }

    .upload .round input[type="file"] {
        position: absolute;
        transform: scale(2);
        opacity: 0;
    }

    input[type=file]::-webkit-file-upload-button {
        cursor: pointer;
    }
    </style>
</head>


<div class="listpgWraper">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="userccount">
          <div class="formpanel">
            
          
        <div class="row">
        <div class="col-md-12">
            <div class="formrow">
            <?php foreach($userDetails as $userDetail) { ?>
                <form class="form" id="form" action="<?php echo base_url("Login/uploadProfileImage")?>" enctype="multipart/form-data" method="post">
                    <div class="upload">
                        <?php
                        /*
                         $name = $row["name"];
                         $image = $row["user_image"];   
                         //echo $image; die;   
                         */  
                            ?>
                        <img src="<?php echo 'http://localhost/Jobportal/upload/profile_images/'?><?php echo $userDetail->user_image; ?>" width=125 height=125 title="<?php //echo $image; ?>">
                        <div class="round">
                            <input type="hidden" name="id" value="<?php echo $userDetail->id; ?>">
                            <input type="hidden" name="name" value="<?php echo $userDetail->name; ?>">
                            <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png">
                            <i class="fa fa-camera"  style="color: #fff;margin-top:50%;"></i>
                        </div>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    document.getElementById("image").onchange = function() {
        document.getElementById("form").submit();
    };
    </script>      
<!-- Personal Information -->
<?php foreach($userDetails as $userDetail) { ?>
<form action="<?php echo base_url('Login/editprofiledetails')?>" method="post" enctype="multipart/form-data">
 <h5>Personal Information</h5>
      

            <div class="row">
              <div class="col-md-12">
                <div class="formrow">
                  <input type="text" name="uname" class="form-control" title = "Name" value="<?php echo $userDetail->name; ?>">
                </div>
              </div>

               <div class="col-md-12">
                <div class="formrow">
                  <input type="date" name="dob" class="form-control" title="Date Of Birth" value="<?php echo $userDetail->date_of_birth;?>">
                </div>
              </div>

               <div class="col-md-12">
                <div class="formrow">
                  <select class="form-control" name="gender" title="Gender" placeholder="Gender">
                    <option value="<?php echo $userDetail->gender ; ?>" selected hidden><?php echo  $userDetail->gender  ; ?></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>            
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="formrow">
                <input type="text" disabled name="uemail" class="form-control" title="E-Mail" value="<?php echo $userDetail->email; ?>" placeholder="<?php echo $userDetail->email; ?>">
                  <input type="hidden" name="uemail" class="form-control" title="E-Mail" value=" <?php echo $userDetail->email; ?> ">
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="uphone" class="form-control" placeholder="Phone" title="phone" value="<?php echo $userDetail->phone; ?>">
                </div>
              </div>
                
              <input type="hidden" name="upass" title="password" class="form-control" disabled value="<?php echo $userDetail->password; ?>">

              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="city" class="form-control" placeholder="City" value="<?php echo $userDetail->city; ?>" title="City">
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="address" class="form-control" title="Address" placeholder="Address" value="<?php echo $userDetail->address; ?>">
                </div>
              </div>
             

              <div class="col-md-12" id="CV">
                <div class="formrow">
                  <select class="form-control" name="experiences" title="Experiences" placeholder="Experience">
                    <option value="<?php echo $userDetail->experiences;?>" selected hidden><?php echo $userDetail->experiences ; ?></option>
                    <option value="Fresh">Fresh</option>
                    <option value="1 Year">1 Year</option>
                    <option value="2 Years">2 Years</option>
                    <option value="3 Years">3 Years</option>
                    <option value="4 Years">4 Years</option>
                    <option value="5 Years">5 Years</option>
                    <option value="6 Years">6 Years</option>
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="company" class="form-control" title="Current Company Name" value="<?php echo $userDetail->current_company_name; ?>" placeholder="Current Company name">
                </div>
              </div>              

              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="skills" class="form-control" title="Skills" value="<?php echo $userDetail->skills; ?>"   placeholder="Skill Name">
                </div>
              </div>

              

           
            <h5>Upload Your Resume</h5>
            <div class="row">
            <div class="col-md-12">
                <div class="formrow">
              
                  
                  <input type="file" name="resume" class="form-control" placeholder="resume" value="<?php echo $userDetail->user_resume; ?>">
                  <input type="text" name="oldresu"  class="form-control" placeholder="" disabled value="<?php echo $userDetail->user_resume; ?>">
                
                </div>
              </div>
              
             
          </div>
            </div>
            <br>
            <!-- <hr> -->
            <input type="submit" name= "update" class="btn btn-large w-100 btn-primary" value="Update and Save">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
<?php } ?>



  
