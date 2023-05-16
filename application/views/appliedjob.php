<?php include'head.php' ; ?>
<!-- Featured Jobs start -->
<div id="favjob" class="section greybg">
    <div class="container">
        <!-- title start -->
        <div class="titleTop">
            <div class="subtitle">Here You Can See Your</div>
            <h3>Applied <span>Jobs</span></h3>
        </div>
        <!-- title end -->

        <!--Featured Job start-->
        <ul class="jobslist row">
                <?php foreach($appliedJobs as $appliedJob){ ?>
                <li class="col-md-6">
                    <div class="jobint">
                        <div class="row">
                            <div class="col-md-2 col-sm-2"><img src="http://localhost/jobportal/upload/comp_job_images/<?php echo $appliedJob->job_image; ?>"  alt="Job Image" /></div>
                            <div class="col-md-7 col-sm-7">
                                <h4><a href="#."><?php echo $appliedJob->job_name; ?></a></h4>
                                <div class="company"><a href="#."><?php echo $appliedJob->job_company_name; ?></a></div>
                                <?php
                                  if($appliedJob->job_type=="Full Time"){
                                    $cls="Fulltime";
                                   }
                                 else{
                                  $cls="PartTime";
                                 }
                         ?>
                                <div class="jobloc"><label class="<?php echo $cls?>"><?php echo $appliedJob->job_type; ?></label> -
                                    <span><?php echo $appliedJob->job_address; ?></span>
                                </div>
                            </div>
                        <?php 
                          
                           if($appliedJob->seen == 0)
                            {
                             $stat='Not Viewed';
                           }
                           else
                           {
                             $stat='Viewed';
                            }
    ?>

                            <div class="col-md-3 col-sm-3"><a href="#." class="applybtn"><?php echo $stat ; ?>
                            </a></div>

                        </div>
                    </div>
                </li>
<?php 
      
   }
   
?>


            </ul>
         
        </div>
    </div>
