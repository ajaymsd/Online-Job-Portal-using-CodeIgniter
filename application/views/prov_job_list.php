<style>
    .breadCrumb a{
        text-decoration:none;
        font-size:larger;
        font-weight:bolder;
        border:2px solid white;
        padding:10px;
        color:white;
    }
    .breadCrumb a:hover{
        color:blue;
        background-color: white;
        /* border:2px solid blue; */
        padding:11px;
    }
    /* .jobButtons{
        float:right;
    right: 0;
    justify-content: flex-end;
    } */
    .detoils{
        display: none;
    }

    tr > * + * {
  padding-left: 4em;
}

</style>
<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Your Job Details</h1>
      </div>
      <div class="col-md-6 col-sm-6 bg-dark">
        <div class="breadCrumb"><a href="<?php echo base_url('Jobposter/Prov_postjob'); ?>">Add New Job</a></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->
<div class="listpgWraper">
  <div class="container"> 
  <button class="btn" id="deta" style="border:3px dashed black; border-bottom:none;"><i class="fa fa-black-tie" aria-hidden="true"></i> Full Details</button>
    <!-- Job Header start going to loop -->
    <?php 
    foreach($jobDetails as $jobDetail){ 
    ?>
    <div class="job-header">
      <div class="jobinfo">
        <div class="row">
          <div class="col-md-8">
            <h2><?php echo $jobDetail->job_name; ?> - <?php echo $jobDetail->category_name; ?></h2>
            <div class="ptext">Date Posted: <?php echo $jobDetail->job_date ?></div>

            <div class="salary" style="padding-bottom:3px;">Job Qualification: <strong><?php echo $jobDetail->job_qualification?></strong></div>
            <div class="salary" style="padding-bottom:3px;">Monthly Salary: <strong><?php echo $jobDetail->job_salary?></strong></div>
              

            <div class="detoils">    
            <div class="salary" style="padding-bottom:3px;">Experiences: <strong><?php echo $jobDetail->job_experince?></strong></div>   
            <div class="salary" style="padding-bottom:3px;">Job Designation: <strong><?php echo $jobDetail->job_designation?></strong></div>            
            <div class="salary" style="padding-bottom:3px;">Job Description: <strong><?php echo $jobDetail->job_desc?></strong></div>
            <div class="salary" style="padding-bottom:3px;">Address: <strong><?php echo $jobDetail->job_address?></strong></div>
            <div class="salary" style="padding-bottom:3px;">Email: <strong><?php echo $jobDetail->job_mail?></strong></div>
            <div class="salary" style="padding-bottom:3px;">Contact: <strong><?php echo $jobDetail->job_phone_number?></strong></div>
            <div class="salary" style="padding-bottom:3px;">Company Website: <strong><?php echo $jobDetail->job_company_website; ?></strong></div>
            </div>

          </div>
          <div class="col-md-4">
            <div class="companyinfo">
              <div class="companylogo"><img src="<?php echo base_url('upload/comp_job_images/')?><?php echo $jobDetail->job_image;?>" alt="your alt text"></div>
              <div class="title"><a href="#."><?php echo $jobDetail->job_company_name; ?></a></div>
              <div class="ptext"><?php echo $jobDetail->city_name; ?>, TN</div>
              <div class="opening"><a href="#."><?php echo $jobDetail->job_vacancy?> Current Jobs Openings</a></div>
              <?php 
                 if($jobDetail->status==0){
                    $cond="ADMIN NOT APPROVED THIS JOB";
                    $condcol = "red";
                }
                else{
                  $cond="ADMIN APPROVED THIS JOB";
                  $condcol = "green";
                }
              ?>
              <div class="title" style="padding-top:15px;"><?php echo " <font color='$condcol', size='2.5px'>$cond</font>" ?></div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>   
     
      <div class="jobButtons">    
      <a href="<?php echo base_url('Jobposter/Prov_editjob?')?>jobid=<?php echo $jobDetail->id ?>" class="btn apply"><button type="submit" class="listbtn" name="edit" style="border:none;background:none;"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button></a>
      <a href="<?php echo base_url('Jobposter/Prov_deleteJob?')?>jobid=<?php echo $jobDetail->id ?>" class="btn report"><button type="submit" class="listbtn" name="delete" style="border:none;background:none;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Delete</button></a>    

      </div>
    
</div>

    <?php 
    
}

?>


<?php 
/*
}
*/
?>


<?php 
/*
} 
}


else{
  echo " <font color='blue', size='5px'><br> <br> <br> 0 RESULTS <br> <br> You didn't post any jobs</font>";
  $alert = "<script>window.location.href='404.php';</script>";
  echo $alert;

}
// if ($Jstatus == 0) {
//   $alert = "<script>window.location.href='prov_index.php';alert('your job post is waiting for approval');</script>";
//     echo $alert;
// }
*/
?>


  </div>
</div>


