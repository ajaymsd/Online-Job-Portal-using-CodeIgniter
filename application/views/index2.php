<!-- Search start -->
<div class="searchwrap">
  <div class="container">
    <h3>Search From 1000+ Jobs <span>Find Your Job</span></h3>
    <div class="searchbar row">
      <div class="col-md-5">
        <input type="text" class="form-control" placeholder="Enter Skills or job title" />
      </div>
      <div class="col-md-3">
        <select class="form-control">
          <option>Select Categories</option>
          <?php foreach($jobCategories as $jobCategory){ ?>
            <option value=" <?php echo $jobCategory->cid; ?> "><?php echo $jobCategory->category_name; ?></option>
<?php } ?>
        </select>
      </div>
      <div class="col-md-2">
        <select class="form-control">
          
          <option>Select City</option>
          <?php foreach($cityCategories as $cityCategory){ ?>
            <option value=" <?php echo $cityCategory->c_id; ?> "><?php echo $cityCategory->city_name; ?></option>
<?php } ?>
        </select>
      </div>
      <div class="col-md-2">
        <input type="submit" class="btn" value="Search Job">
      </div>
    </div>
    <!-- button start -->
    <div class="getstarted"><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Get Started Now</a></div>
    <!-- button end --> 
    
  </div>
</div>

<!-- Search End --> 

<!-- How it Works start -->
<div class="section howitwrap">
  <div class="container"> 
    <!-- title start -->
    <div class="titleTop">
      <div class="subtitle">Here You Can See</div>
      <h3>How It <span>Works?</span></h3>
    </div>
    <!-- title end -->
    <ul class="howlist row">
      <!--step 1-->
      <li class="col-md-4 col-sm-4">
        <div class="iconcircle"><i class="fa fa-user align-middle" style="margin-top:21%;" aria-hidden="true"></i></div>
        <h4>Create An Account</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
      </li>
      <!--step 1 end--> 
      
      <!--step 2-->
      <li class="col-md-4 col-sm-4">
        <div class="iconcircle"><i class="fa fa-black-tie" style="margin-top:21%;" aria-hidden="true"></i></div>
        <h4>Search Desired Job</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
      </li>
      <!--step 2 end--> 
      
      <!--step 3-->
      <li class="col-md-4 col-sm-4">
        <div class="iconcircle"><i class="fa fa-file-text"  style="margin-top:21%; "aria-hidden="true"></i></div>
        <h4>Send Your Resume</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
      </li>
      <!--step 3 end-->
    </ul>
  </div>
</div>
<!-- How it Works Ends --> 

<!-- Top Employers start -->
<div id="category" class="section greybg">
  <div class="container"> 
    <!-- title start -->
    <div class="titleTop">
      <div class="subtitle">Here You Can See</div>
      <h3>Top <span>Categories</span></h3>
    </div>
    <!-- title end -->
    
    <ul class="employerList">
    <?php foreach($topCategories as $topCategory){ ?>
    <li data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo $topCategory->category_name; ?>"><a href="#">
    <img src= "https://nammamaduraiapp.com/jobs/sadmin/images/<?php echo $topCategory->category_image; ?>" alt=""   width="967px" height="100px" /></a></li> 
<?php } ?>
      </ul>
       <!--button start-->
    <div class="viewallbtn"><a href="<?php echo base_url('Jobseeker/Job'); ?>">View All Categories</a></div>
    <!--button end--> 
  </div>
</div>
<!-- Top Employers ends --> 

<!-- Popular Searches start -->
<div class="section">
  <div class="container"> 
    <!-- title start -->
    <div class="titleTop">
      <div class="subtitle">Here You Can See</div>
      <h3>Popular <span>Searches</span></h3>
    </div>
    <!-- title end -->
    <div class="topsearchwrap row">
      <div class="col-md-8"> 
        <!--Categories start-->
        <h4>Browsed By Employers</h4>
        <ul class="row catelist">
        <?php foreach($browsedEmployees as $browsedEmployee) { ?>
        <li class="col-md-4 col-sm-4"><a href="#."><?php echo $browsedEmployee->name; ?> </a></li>
<!-- <span>(<?php echo(rand(1,10)); ?>)</span>-->


 
    <!--button start-->
   
    <!--button end--> 



<!--this is for city-->
          <?php } ?>
        </ul>
        <div class="viewallbtn"><a href="<?php echo base_url('Jobseeker/Job')?>">View All Featured Jobs</a></div>
        <!--Categories end--> 
      </div>
      <div class="col-md-4"> 
        <!--Cities start-->
        <h5>Browsed By Cities</h5>
        <ul class="row catelist">
        <?php foreach($browsedCities as $browsedCity){ ?>
        <li class="col-md-4 col-sm-4 col-xs-6"><a href="#."><?php echo $browsedCity->city_name; ?></a></li>
          <?php }?>
        </ul>
        <!--Cities end--> 
      </div>
    </div>
  </div>
</div>
<!-- Popular Searches ends --> 


<!-- Featured Jobs start -->
<div id="favjob" class="section greybg">
    <div class="container">
        <!-- title start -->
        <div class="titleTop">
            <div class="subtitle">Here You Can See</div>
            <h3>Featured <span>Jobs</span></h3>
        </div>
        <!-- title end -->

        <!--Featured Job start-->
        <ul class="jobslist row">
          <?php foreach($jobs as $job) { ?>
            <!--Job start-->
            <li class="col-md-6" >
                 <div class="jobint"> <!-- this is for individual box -->
                    <div class="row">
                        <div class="col-md-2 col-sm-2">
                        <img src="http://localhost/jobportal/upload/comp_job_images/<?php echo $job->job_image; ?>"  alt="Job Image" /></div>
                        <div class="col-md-7 col-sm-7">
                            <h4><a href="#."><?php echo $job->job_name; ?></a></h4>
                            <div class="company"><a href="#"><?php echo $job->job_company_name; ?></a></div>
                            <?php
                               if($job->job_type=="Full Time"){
                                  $cls="Fulltime";
                              }
                             else{
                                $cls="PartTime";
                               }
                  ?>
                            <div class="jobloc"><label class="<?php echo $cls?>"><?php echo $job->job_type; ?></label> -
                                <span><?php echo $job->job_address; ?></span></div>
                        </div>

                        <form action="<?php echo base_url('Jobseeker/favouraite')?>" method="post">

                            <input type="hidden" name="job_id" class="form-control" value="<?php echo $job->id;?>">

                            <input type="hidden" name="user_id" class="form-control"
                                value="<?php echo $this->session->userdata('loggedIn')['id'];?>">

                            <input type="hidden" name="created" class="form-control"
                                value="<?php echo date("Y/m/d"); ?>">

                            <input type="hidden" name="stat" class="form-control" value="1">
                            

                            <div class="col-md-3 col-sm-3">
 <button type="submit" name="favorite" id="likeun"
                                    style="font-size:20px;border:none;background:none;float:right;color:red">
                                    <i class="fa fa-heart" 
                                        style="font-size:19px;color:gray;margin:none;padding:none"></i></button>
 
                                      </div>
                        </form>
                        <div class="col-md-3 col-sm-3">
                          <a href="<?php echo base_url('Jobseeker/Job')?>" type="submit" name="apply" class="applybtn">Apply Now</a>
                        </div>
                    </div>
                </div>
            </li>
<?php } ?>
      </ul>

  <!--Featured Job end-->      

<!--button start-->
<div class="viewallbtn"><a href="#">View All Featured Jobs</a></div>
<!--button end-->

    </div>
</div>
<!-- Featured Jobs ends -->
<!-- Video start -->
<div class="videowraper section">
  <div class="container"> 
    <!-- title start -->
    <div class="titleTop">
      <div class="subtitle">Here You Can</div>
      <h3>Watch Our <span>Video</span></h3>
    </div>
    <!-- title end -->
    
    <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus, id tincidunt nisi porta sit amet. Suspendisse et sapien varius, pellentesque dui non, semper orci.</p>
    <a href="#."><i class="fa fa-play-circle-o" aria-hidden="true"></i></a> </div>
</div>
<!-- Video end --> 

<!-- Testimonials start -->
<div class="section" id="review">
  <div class="container"> 
    <!-- title start -->
    <div class="titleTop">
      <div class="subtitle">Here You Can See</div>
      <h3>Success <span>Stories</span></h3>
    </div>
    <!-- title end -->
    
    <ul class="testimonialsList">
      <!--user 1 Start-->
      <li class="item">
        <div class="testimg"><img src="images/userimg.jpg" alt="Your alt text here" /></div>
        <div class="clientname">Garry Miller Jr</div>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra id nunc at finibus. Etiam sollicitudin faucibus cursus. Proin luctus cursus nulla sed iaculis. Quisque vestibulum augue nec aliquet aliquet."</p>
        <div class="clientinfo">CEO - Gates Inc</div>
      </li>
      <!--user 1 end--> 
      
      <!--user 2 Start-->
      <li class="item">
        <div class="testimg"><img src="images/userimg.jpg" alt="Your alt text here" /></div>
        <div class="clientname">Garry Miller Jr</div>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra id nunc at finibus. Etiam sollicitudin faucibus cursus. Proin luctus cursus nulla sed iaculis. Quisque vestibulum augue nec aliquet aliquet."</p>
        <div class="clientinfo">CEO - Gates Inc</div>
      </li>
      <!--user 2 end-->
    </ul>
  </div>
</div>
<!-- Testimonials End --> 


<!-- App Start -->
<div class="appwraper">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-6"> 
        <!--app image Start-->
        <div class="appimg"><img src="images/mobile2.png" alt="Your alt text here" /></div>
        <!--app image end--> 
      </div>
      <div class="col-md-7 col-sm-6"> 
        <!--app info Start-->
        <div class="titleTop">
          <div class="subtitle">Step Forward Now</div>
          <h3>Jobs Namma Madurai</h3>
        </div>
        <div class="subtitle2">A world of opportunity in your hand</div>
        <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus, id tincidunt nisi porta sit amet. Suspendisse et sapien varius, pellentesque dui non, semper orci. Curabitur blandit, diam ut ornare ultricies.</p>
        <div class="appbtn">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6"><a href="https://play.google.com/store/apps/details?id=com.astro.jobs" target="_blank"><img src="images/andriod-btn.png" alt="Your alt text here"></a></div>
          </div>
        </div>
        <!--app info end--> 
      </div>
    </div>
  </div>
</div>
<!-- App End --> 




  