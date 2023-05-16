
<div class="listpgWraper">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="userccount">
          <div class="formpanel">      
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
                <?php foreach($singleJobDetails as $singleJobDetail){ ?>
                <form class="form" id="form" action="<?php echo base_url('JobpostereditJobImage');?>" enctype="multipart/form-data" method="post">
                    <div class="upload">
                        <?php /*
                        // echo $row2["id"];
                         $pjid = $row2["id"];
                         $name = $row2["job_company_name"];
                         $Joimage = $row2["job_image"];   
                         //echo $image; die;     
                         */
                            ?>
                         <img src="<?php echo 'http://localhost/Jobportal/upload/comp_job_images/'?><?php echo $singleJobDetail->job_image; ?>" width=125 height=125 title="<?php echo $singleJobDetail->job_image; ?>">
                        <div class="round">
                            <input type="hidden" name="id" value="<?php echo $singleJobDetail->id; ?>">
                            <input type="hidden" name="name" value="<?php //echo $name; ?>">
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
<h5>Job Information</h5>

<?php foreach($singleJobDetails as $singleJobDetail){ ?>
<form action="<?php echo base_url('Jobposter/editJob')?>" enctype="multipart/form-data" method="post">

    <div class="row">
        
        <div class="col-md-12">
            <div class="formrow">
              <input type="text" name="jobname" class="form-control" placeholder="Job Title" value="<?php echo $singleJobDetail->job_name; ?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <select class="form-control" name="category">
                <option value=" <?php echo $singleJobDetail->cat_id; ?> "><?php echo $singleJobDetail->category_name; ?> </option>
                    <?php foreach ($jobCategories as $jobCategory){ ?>
                    <option value=" <?php echo $jobCategory->cid; ?> "><?php echo $jobCategory->category_name; ?>   </option>
                    <?php } ?>
                </select>
            </div>
        </div>


        <div class="col-md-3">
            <div class="formrow">
                <select class="form-control" name="location">
                <option value=" <?php echo $singleJobDetail->city_id; ?> "><?php echo $singleJobDetail->city_name; ?> </option>
                <?php foreach ($cityCategories as $cityCategory){ ?>
                    <option value=" <?php echo $cityCategory->c_id; ?> "><?php echo $cityCategory->city_name; ?>   </option>
                   <?php } ?>
                </select>
            </div>
        </div>


        <div class="col-md-3">
            <div class="formrow">
                <select class="form-control" name="experience" title="Experiences">
                    <option value="<?php echo $singleJobDetail->job_experince;?>"><?php  $singleJobDetail->job_experince;?></option>
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
                    placeholder="Designation" value="<?php echo $singleJobDetail->job_designation;?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <!-- <label for="jobtitle">Job Title:</label><br> -->
                <input type="text" name="msalary" class="form-control" placeholder="Salary"
                    value="<?php echo $singleJobDetail->job_salary;?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <input type="text" name="description" class="form-control"
                    placeholder="Description" value="<?php echo $singleJobDetail->job_desc;?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <select class="form-control" name="jobtype" title="Job Type">
                    <option value="<?php echo $singleJobDetail->job_type;?>"></selected:hidden>selected: <?php echo $singleJobDetail->job_type;?></option>
                    <option value="Full Time">Full Time</option>
                    <option value="Half Time">Half Time</option>
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <input type="text" name="companyname" class="form-control"
                    placeholder="Company Name" value=" <?php echo $singleJobDetail->job_company_name;?> ">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <input type="text" name="phone" class="form-control" placeholder="Phone"
                    value=" <?php echo $singleJobDetail->job_phone_number;?> ">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <input type="text" name="email" class="form-control" placeholder="Email"
                    value="<?php echo $singleJobDetail->job_mail;?> ">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <input type="text" name="website" class="form-control" placeholder="Website"
                    value=" <?php echo $singleJobDetail->job_company_website;?> ">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <input type="text" name="address" class="form-control" placeholder="Address"
                    value=" <?php echo $singleJobDetail->job_address;?> ">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <input type="text" name="vacancy" class="form-control" placeholder="Vacancy" value="<?php echo $singleJobDetail->job_vacancy;?>"> 
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <input type="text" name="qualification" class="form-control"
                    placeholder="Qualification" value="<?php echo $singleJobDetail->job_qualification;?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <input type="text" name="skill" class="form-control" placeholder="Skill" value="<?php echo $singleJobDetail->job_skill;?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <input type="text" name="wday" class="form-control" placeholder="Work Day"
                    value=" <?php echo $singleJobDetail->job_work_day;?> ">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <input type="text" name="wtime" class="form-control" placeholder="work Time"
                    value=" <?php echo $singleJobDetail->job_work_time;?> ">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <input type="hidden" name="uid" class="form-control" placeholder="userid"
                    value="<?php echo $singleJobDetail->user_id; ?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="formrow">
                <input type="hidden" name="date" class="form-control" placeholder="date"  value="<?php echo date("Y/m/d"); ?>">
            </div>
        </div>

 
            <input type="hidden" name="jobid" class="form-control" placeholder="job id name"  value=" <?php echo $singleJobDetail->id; ?>">
        
    
        <br>
        <hr>
        <br>
         
        
        <input type="submit" name="jobup" class="btn" value="Update a Job">
</form>
<?php } ?>
</div>
</div>
</div>
</div>
</div>
</div>
