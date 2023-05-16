
<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Candidate Detail</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <!-- <div class="breadCrumb"><a href="#.">Home</a> / <span>Candidate Name</span></div> -->
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="listpgWraper">
  <div class="container"> 
    <?php foreach($appliedEmployeeDetails as $appliedEmployeeDetail) { ?>
    <!-- Job Header start going throught loop -->
    <div class="job-header">
      <div class="jobinfo">
        <div class="row">
          <div class="col-md-8 col-sm-8"> 
            <!-- Candidate Info -->
            <div class="candidateinfo">
              <div class="userPic"><img src="<?php echo base_url('upload/profile_images/')?><?php echo $appliedEmployeeDetail->user_image; ?>" alt=""></div>
              <div class="title"><?php echo $appliedEmployeeDetail->name; ?></div>
              <div class="desi">Applied For - <strong style="font-weight:700;color:blue;"><?php echo $appliedEmployeeDetail->job_name; ?></strong></div>
              <div class="loctext"><i class="fa fa-history" aria-hidden="true"></i> <span style="font-weight:700;color:orange;"><?php echo $appliedEmployeeDetail->experiences ?></span> experiences with <span style="font-weight:700;color:neon;"><?php //echo $Askill ?></span> skills</div>
              <div class="loctext"><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $appliedEmployeeDetail->address; ?> - <?php echo $appliedEmployeeDetail->city; ?></div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4"> 
            <!-- Candidate Contact -->
            <div class="candidateinfo">
              <div class="loctext"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $appliedEmployeeDetail->phone; ?></div>
              <div class="loctext"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $appliedEmployeeDetail->email; ?></div>
              <div class="loctext"><i class="fa fa-globe" aria-hidden="true"></i> <span style="font-weight:700;color:brown;"><?php //echo $msg;?></span></div>
              <div class="cadsocial"> <a href="http://www.twitter.com/" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="http://www.plus.google.com/" target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> <a href="http://www.facebook.com/" target="_blank"> <i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a> <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Buttons -->
      <div class="jobButtons">
      <form action="<?php echo base_url('Jobposter/Hire')?>" method="post"> 
        <input type="hidden" name="jbid" id="" value="<?php echo $appliedEmployeeDetail->job_id; ?>">
        <input type="hidden" name="usid" id="" value="<?php echo $appliedEmployeeDetail->user_id; ?>">
        <?php if($appliedEmployeeDetail->seen==1){
          $hireStatus="Saved";
        }
        else{
          $hireStatus="Hire";
        }
        ?>
      <a href="#." class="btn apply"><input type="submit" class="listbtn" name="viewed" value="<?php echo $hireStatus; ?>" style="border:none;background:none;"><i class="fa fa-paper-plane" aria-hidden="true"></i></a> 
    
      <a href="<?php echo base_url('upload/users_resume/')?><?php echo $appliedEmployeeDetail->user_resume;?>" download class="btn"><i class="fa fa-download" aria-hidden="true"></i> Download CV</a> <a href="#." class="btn"><i class="fa fa-envelope" aria-hidden="true"></i> Send Message</a> 
      <a href="#." class="btn"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save User</a> 
      <a href="#." class="btn report"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Report Abuse</a></form> </div>
    </div>
<?php 

} 

?>
 </div>
</div>
    