<?php 

if (isset($_POST['delete'])) {
//   echo "delete";
//     print_r($_REQUEST);
//   die;
$tbli = $_POST['tbljobid'];
// ECHO $_SESSION['id'];
// echo $tbli;
// die;

$sql = " DELETE from tbl_jobs where id = $tbli && user_id = $_SESSION[id] ";
$del = mysqli_query($conn, $sql);
if ($del) {
    $alert = "<script>window.location.href='prov_job_list.php';alert('Job Deleted Successfully.');</script>";
				echo $alert;
}
else{
    die(mysqli_error($conn));
}
}

 ?>


<?php
if (isset($_POST['edit'])) {
// require 'config.php';
//echo $_SESSION["id"];
$etbljobid = $_POST['etbljobid'];

$_SESSION['tbjbid'] = "$etbljobid";

$cpid = $_SESSION["id"];
$result = mysqli_query($conn, "SELECT * FROM tbl_jobs WHERE id = $etbljobid && user_id = $cpid");
$row = mysqli_fetch_assoc($result);

// echo $row['job_name'];
// echo "edit";
// print_r($_REQUEST);
// die;
// echo $_POST['etbljobid'];


// echo $row["job_image"];
}
?> 



 

<div class="listpgWraper">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="userccount">
          <div class="formpanel">      
          

          <?php
//  echo $_SESSION["tbjbid"];
//  echo "somespace";
$jobid =  $_SESSION["tbjbid"];
$cpid = $_SESSION["id"];
$result2 = mysqli_query($conn, "SELECT * FROM tbl_jobs WHERE user_id = $cpid && id = $jobid");
$row2 = mysqli_fetch_assoc($result2);
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

<div class="row">
        <div class="col-md-12">
            <div class="formrow">
                <form class="form" id="form" action="" enctype="multipart/form-data" method="post">
                    <div class="upload">
                        <?php
                        // echo $row2["id"];
                         $pjid = $row2["id"];
                         $name = $row2["job_company_name"];
                         $Joimage = $row2["job_image"];   
                         //echo $image; die;     
                            ?>
                        <img src="upload/comp_job_images/<?php echo $Joimage; ?>" width=125 height=125 title="<?php echo $image; ?>">
                        <div class="round">
                            <input type="hidden" name="id" value="<?php echo $pjid; ?>">
                            <input type="hidden" name="name" value="<?php echo $name; ?>">
                            <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png">
                            <i class="fa fa-camera" style="color: #fff;"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    document.getElementById("image").onchange = function() {
        document.getElementById("form").submit();
    };
    </script>
    <?php
    //include 'config.php';
    if(isset($_FILES["image"]["name"])){       
      $id = $_POST["id"];
      $name = $_POST["name"];

      // print_r($_REQUEST);
      // die;

      $imageName = $_FILES["image"]["name"];
      $imageSize = $_FILES["image"]["size"];
      $tmpName = $_FILES["image"]["tmp_name"];

      // Image validation
      $validImageExtension = ['jpg', 'jpeg', 'png'];
      $imageExtension = explode('.', $imageName);
      $imageExtension = strtolower(end($imageExtension));
      if (!in_array($imageExtension, $validImageExtension)){
        echo
        "
        <script>
          alert('Invalid Image Extension');
        </script>
        ";
      }
      elseif ($imageSize > 1200000){
        echo
        "
        <script>
          alert('Image Size Is Too Large');
        </script>
        ";
      }
      else{
        $newImageName = $name . " - " . uniqid('', true); // Generate new image name
        $newImageName .= '.' . $imageExtension;
        $imgdestination = 'upload/comp_job_images/'. $newImageName;        
        move_uploaded_file($tmpName, $imgdestination);

        mysqli_query($conn, "UPDATE tbl_jobs SET job_image = '$newImageName' WHERE id = $id");
        $alert = "<script>window.location.href='prov_job_list.php';alert('Job image Updated Successfully');</script>";
        echo $alert;        
      }
    }
    ?>
          

<!-- Personal Information -->
<h5>Job Information</h5>


<form action="tablejobupdate.php" enctype="multipart/form-data" method="post">

    <div class="row">
        
        <div class="col-md-12">
            <div class="formrow">
              <input type="text" name="jobname" class="form-control" placeholder="Job Title" value="<?php echo $row['job_name']; ?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <select class="form-control" name="category">
                    <!-- <option>Industry Area</option> -->
<?php 
$sql4 = "SELECT * FROM tbl_category where cid = $row[cat_id];";
$result4 = $conn->query($sql4);   

// output data of each row
while($row4 = $result4->fetch_assoc()) {
//    echo "id: " . $row["name"]  ."<br>";
$oldcateid = $row4["cid"];
$oldcategoryname = $row4["category_name"];
$oldcateimage = $row4["category_image"];
// echo $cateid;
// echo $categoryname;
// echo $cateid;
}

?>
<option value=" <?php echo $oldcateid; ?> ">Selected: <?php echo $oldcategoryname; ?></option>
<?php 
$sql4 = "SELECT * FROM tbl_category";
$result4 = $conn->query($sql4);   

// output data of each row
while($row4 = $result4->fetch_assoc()) {
//    echo "id: " . $row["name"]  ."<br>";
$cateid = $row4["cid"];
$categoryname = $row4["category_name"];
$cateimage = $row4["category_image"];
// echo $cateid;
// echo $categoryname;
// echo $cateid;
?>


                    
                    <option value=" <?php echo $cateid; ?> "><?php echo $categoryname; ?>   </option>

                    <?php 
}

?>




                </select>
            </div>
        </div>


        <div class="col-md-3">
            <div class="formrow">
                <select class="form-control" name="location">
                    <?php 
$sql1 = "SELECT * FROM tbl_city where c_id = $row[city_id];";
$result1 = $conn->query($sql1);   

// output data of each row
while($row1 = $result1->fetch_assoc()) {
//    echo "id: " . $row["name"]  ."<br>";
$c_id = $row1["c_id"];
$cityname = $row1["city_name"];
// $cateimage = $row1["category_image"];
// echo $cateid;
// echo $categoryname;
// echo $cateid;
?>
                    <option value="<?php echo $c_id; ?>"><?php echo $cityname; ?></option>
                    <?php 
}

?>
                </select>
            </div>
        </div>


        <div class="col-md-3">
            <div class="formrow">
                <select class="form-control" name="experience" title="Experiences">
                    <option value="<?php echo $row['job_experince'];?>"><?php echo $row['job_experince'];?></option>
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
                <input type="text" name="designation" class="form-control"
                    placeholder="Designation" value="<?php echo $row['job_designation'];?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <!-- <label for="jobtitle">Job Title:</label><br> -->
                <input type="text" name="msalary" class="form-control" placeholder="Salary"
                    value="<?php echo $row['job_salary'];?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <input type="text" name="description" class="form-control"
                    placeholder="Description" value="<?php echo $row['job_desc'];?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <select class="form-control" name="jobtype" title="Job Type">
                    <option value="<?php echo $row['job_type'];?>"></selected:hidden>selected: <?php echo $row['job_type'];?></option>
                    <option value="Full Time">Full Time</option>
                    <option value="Half Time">Half Time</option>
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <input type="text" name="companyname" class="form-control"
                    placeholder="Company Name" value=" <?php echo $row['job_company_name'];?> ">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <input type="text" name="phone" class="form-control" placeholder="Phone"
                    value=" <?php echo $row['job_phone_number'];?> ">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <input type="text" name="email" class="form-control" placeholder="Email"
                    value="<?php echo $row['job_mail'];?> ">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <input type="text" name="website" class="form-control" placeholder="Website"
                    value=" <?php echo $row['job_company_website'];?> ">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <input type="text" name="address" class="form-control" placeholder="Address"
                    value=" <?php echo $row['job_address'];?> ">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <input type="text" name="vacancy" class="form-control" placeholder="Vacancy" value="<?php echo $row['job_vacancy'];?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <input type="text" name="qualification" class="form-control"
                    placeholder="Qualification" value="<?php echo $row['job_qualification'];?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <input type="text" name="skill" class="form-control" placeholder="Skill" value="<?php echo $row['job_skill'];?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <input type="text" name="wday" class="form-control" placeholder="Work Day"
                    value=" <?php echo $row['job_work_day'];?> ">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <input type="text" name="wtime" class="form-control" placeholder="work Time"
                    value=" <?php echo $row['job_work_time'];?> ">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <input type="hidden" name="uid" class="form-control" placeholder="userid"
                    value="<?php echo $row['user_id']; ?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <input type="hidden" name="date" class="form-control" placeholder="date"  value="<?php echo date("Y/m/d"); ?>">
            </div>
        </div>

 
            <input type="hidden" name="jobid" class="form-control" placeholder="job id name"  value=" <?php echo $etbljobid; ?>">
        
    
        <br>
        <hr>
        <!-- <h5>upload your job image</h5>
        <div class="col-md-12">
            <div class="formrow">
                <img src="upload/comp_job_images/<?php echo $row['job_image']; ?>" width=125 height=125
                    title="<?php echo $row['job_image']; ?>">
                <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png">
            </div>
        </div> -->
        <br>
         
        
        <input type="submit" name="jobup" class="btn" value="Update a Job">
</form>
</div>
</div>
</div>
</div>
</div>
</div>
