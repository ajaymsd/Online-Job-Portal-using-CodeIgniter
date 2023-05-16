<?php
// require 'config.php';
//echo $_SESSION["id"];
$cpid = $_SESSION["id"];
$result = mysqli_query($conn, "SELECT * FROM tbl_jobs WHERE user_id = $cpid");
$row = mysqli_fetch_assoc($result);

// echo $row["job_image"];

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

<!-- Page Title start -->
<div class="pageTitle">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h1 class="page-heading">Post Job</h1>
            </div>
            <!-- <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Home</a> / <span>Post Job</span></div>
      </div> -->
        </div>
    </div>
</div>
<!-- Page Title End -->

<div class="listpgWraper">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="userccount">
                    <div class="formpanel">
                        <!-- Job Information -->
                        <h5>Job Information</h5>


                        <form class="form" action="" enctype="multipart/form-data" method="post">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="formrow">
                                        <!-- <label for="jobtitle">Job Title:</label><br> -->
                                        <input type="text" name="jobname" class="form-control" placeholder="Job Title" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="formrow">
                                        <select class="form-control" name="category" required>
                                            <!-- <option>category</option> -->
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



                                            <option value=" <?php echo $cateid; ?> "><?php echo $categoryname; ?>
                                            </option>

                                            <?php 
  }

?>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="formrow">
                                        <select class="form-control" name="location" required>
                                        <!-- <option>City Name</option> -->
                                            <?php 
$sql1 = "SELECT * FROM tbl_city";
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

                                <?php 
$sql2 = "SELECT * FROM tbl_provider where user_id = $_SESSION[id] && user_type = 2";
$result2 = $conn->query($sql2);

    // output data of each row
   while($row2 = $result2->fetch_assoc()) {
//    echo "id: " . $row["name"]  ."<br>";
// $desc = $row2["job_desc"];
$comp_name = $row2["company_name"];
$comp_mail = $row2["company_email"];
$comp_mobile = $row2["company_mobile"];
$comp_address = $row2["company_address"];
$comp_desc = $row2["company_description"];
$comp_work_day = $row2["company_work_day"];
$comp_work_time = $row2["company_work_time"];
$comp_website = $row2["company_website"];
// $cityname = $row1["city_name"];
// $cateimage = $row1["category_image"];
//  echo $desc;
// echo $categoryname;
// echo $cateid;
  }

?>

                                <div class="col-md-3">
                                    <div class="formrow">
                                        <select class="form-control" name="experience" title="Experiences" required>
                                            <option value="">Experience</option>
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
                                            placeholder="Designation" value="" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="formrow">
                                        <!-- <label for="jobtitle">Job Title:</label><br> -->
                                        <input type="text" name="msalary" class="form-control" placeholder="Salary"
                                            value="" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="formrow">
                                        <input type="text" name="description" class="form-control"
                                            placeholder="Description" value="" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="formrow">
                                        <select class="form-control" name="jobtype" title="Job Type" required>
                                            <option value="">Job Type</option>
                                            <option value="Full Time">Full Time</option>
                                            <option value="Half Time">Half Time</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="formrow">
                                        <input type="text" name="companyname" class="form-control"
                                            placeholder="Company Name" value="" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="formrow">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone"
                                            value="" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="formrow">
                                        <input type="text" name="email" class="form-control" placeholder="Email"
                                            value="" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="formrow">
                                        <input type="text" name="website" class="form-control" placeholder="Website"
                                            value="" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="formrow">
                                        <input type="text" name="address" class="form-control" placeholder="Address"
                                            value="" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="formrow">
                                        <input type="text" name="vacancy" class="form-control" placeholder="Vacancy" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="formrow">
                                        <input type="text" name="qualification" class="form-control"
                                            placeholder="Qualification" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="formrow">
                                        <input type="text" name="skill" class="form-control" placeholder="Skill" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="formrow">
                                        <input type="text" name="wday" class="form-control" placeholder="Work Day"
                                            value="" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="formrow">
                                        <input type="text" name="wtime" class="form-control" placeholder="work Time"
                                            value="" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="formrow">
                                        <input type="hidden" name="uid" class="form-control" placeholder="userid"
                                            value="<?php echo $_SESSION['id']; ?>" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="formrow">
                                        <input type="hidden" name="ustat" class="form-control" placeholder="status"
                                            value="0" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="formrow">
                                        <input type="hidden" name="date" class="form-control" placeholder="date"
                                            value="<?php echo date("Y/m/d"); ?>" required>
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <h5>upload your job image</h5>
                                <div class="col-md-12">
                                    <div class="formrow">
                                        <!-- <img src="upload/comp_job_images/<?php echo $cimage; ?>" width=125 height=125
                                            title="<?php echo $image; ?>"> -->
                                        <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" required>
                                    </div>
                                </div>
                                <br>
                                <input type="submit" name="cosubmit" class="btn" value="Post Job">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 

if (isset($_POST['cosubmit'])) {

  // echo "<pre>";
  // print_r($_REQUEST);
  // die;

    $cotitle = $_POST['jobname'];
    $cocate = $_POST['category'];
    $cocity = $_POST['location'];
    $coexp = $_POST['experience'];
    $codesig = $_POST['designation'];
    $cosal = $_POST['msalary'];
    $codesc = $_POST['description'];
    $cojtype = $_POST['jobtype'];
    $coname = $_POST['companyname'];
    $cophone = $_POST['phone'];
    $comail = $_POST['email'];
    $coweb = $_POST['website'];
    $coaddress = $_POST['address'];
    $covacancy = $_POST['vacancy'];
    $coquali = $_POST['qualification'];
    $coskill = $_POST['skill'];
    $cowday = $_POST['wday'];
    $cowtime = $_POST['wtime'];
    $couid = $_POST['uid'];
    $codate = $_POST['date'];
    $costatus = $_POST['ustat'];
    $name = $_SESSION["name"];  
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
        // echo $imgdestination;
      }
        // echo "<pre>";
        // print_r($_REQUEST);
        // die;

                     // Insert into Database
           $sql3 = "INSERT INTO tbl_jobs(job_name, cat_id, city_id, job_company_name, job_phone_number, job_mail, job_company_website, job_address, job_vacancy, job_qualification, job_skill, job_work_day, job_work_time, user_id, job_date, job_image, job_designation, job_desc, job_salary, job_type, job_experince, status) 
           VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
           $stmt = $conn->prepare($sql3);
           $stmt->execute([$cotitle, $cocate, $cocity, $coname, $cophone, $comail, $coweb, $coaddress, $covacancy, $coquali,  $coskill, $cowday, $cowtime, $couid, $codate, $newImageName, $codesig, $codesc, $cosal, $cojtype, $coexp, $costatus]);
           $alert = "<script>window.location.href='prov_job_list.php';alert('your job post will checked and approved by admin');</script>";
           echo $alert; 
// $query = "INSERT INTO tbl_jobs(job_name, cat_id, city_id, job_company_name, job_phone_number, job_mail, job_company_website, job_address, job_vacancy, job_qualification, job_skill, job_work_day, job_work_time, user_id, job_date, job_image, job_designation, job_desc, job_salary, job_type, job_experince) 
// VALUES($cotitle, $cocate, $cocity, $coname, $cophone, $comail, $coweb, $coaddress, $covacancy, $coquali,  $coskill, $cowday, $cowtime, $couid, $codate, $newImageName, $codesig, $codesc, $cosal, $cojtype, $coexp)";
// $result3 = mysqli_query($conn, $query);
// if ($result3 == 1) { echo "Inserted successfully";
// }
// else { echo "Insertion Failed";
// } 
}
