<?php
// require 'config.php';
//echo $_SESSION["id"];
/*
$id = $_SESSION["id"];
$result = mysqli_query($conn, "SELECT * FROM tbl_users WHERE id = $id && user_type = 2");
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
                <form class="form" id="form" action="<?php echo base_url("Jobposter/uploadJobPosterProfileImage")?>" enctype="multipart/form-data" method="post">
                    <div class="upload">
                        <?php
                        /*
                         $name = $row["name"];
                         $image = $row["user_image"];   
                         //echo $image; die; 
                         */    
                            ?>
                        <img src="<?php echo 'http://localhost/Jobportal/upload/profile_images/'?><?php echo $userDetail->user_image; ?>" width=125 height=125 title="<?php echo $userDetail->user_image; ?>">
                        <div class="round">
                            <input type="hidden" name="id" value="<?php echo $userDetail->id; ?>">
                            <input type="hidden" name="name" value="<?php echo $userDetail->name; ?>">
                            <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png">
                            <i class="fa fa-camera" style="color: #fff;"></i>
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
<form action="<?php echo base_url('Jobposter/editJobPosterProfileDetails')?>" method="post" enctype="multipart/form-data">
 <h5>Personal Details</h5>

            <div class="row">
              <div class="col-md-12">
                <div class="formrow">
                <label for="<?php echo $userDetail->name; ?>">Name:</label><br><br>
                  <input type="text" name="pname" class="form-control" title = "Name" value="<?php echo $userDetail->name; ?>">
                </div>
              </div>

               <div class="col-md-12">
                <div class="formrow">
                <label for="<?php echo $userDetail->date_of_birth;?>">Date Of Birth:</label><br><br>
                  <input type="date" name="pdob" class="form-control" title="Date Of Birth" value="<?php echo $userDetail->date_of_birth;?>">
                </div>
              </div>

               <div class="col-md-12">
                <div class="formrow">
                <label for="<?php echo $userDetail->gender ;  ?>">Gender:</label><br>
                <br>
                  <select class="form-control" name="pgender" title="Gender" placeholder="hedon">
                    <option value="<?php echo $userDetail->gender ; ?>" selected hidden><?php echo $userDetail->gender ; ?></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>            
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="formrow">
                <label for="<?php $userDetail->email;?>">Email:</label><br><br>
                  <input type="hidden" name="pemail" class="form-control" title="E-Mail" value="<?php echo $userDetail->email; ?>">
                  <input type="text" disabled name="pemail" class="form-control" title="E-Mail" placeholder="<?php echo $userDetail->email; ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                <label for="<?php echo $userDetail->phone;?>">Phone:</label><br><br>
                  <input type="text" name="pphone" class="form-control" title="phone" value="<?php  echo $userDetail->phone; ?>">
                </div>
              </div>
                
              <input type="hidden" name="ppass" title="password" class="form-control" value="<?php echo $userDetail->password; ?>">

              <div class="col-md-6">
                <div class="formrow">
                <label for="<?php echo $userDetail->city;?>">City:</label><br><br>
                  <input type="text" name="pcity" class="form-control" value="<?php echo $userDetail->city; ?>" title="City">
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="formrow">
                <label for="<?php echo $userDetail->address;?>">Address:</label><br><br>
                  <input type="text" name="paddress" class="form-control" title="Address" value="<?php echo $userDetail->address; ?>">
                </div>
              </div>
              
            </div>
            <input type="submit" name= "update" class="btn" value="Update and Save">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
<?php } ?>



  
