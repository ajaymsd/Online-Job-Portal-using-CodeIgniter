<head>

<style>

button.listbtn{
  background: #fff;
	display: inline-block;
	color: #263bd6;
	font-weight: 600;
	padding: 9px 15px;
	margin-top: 20px;
	border: 1px solid #263bd6;
}

button.listbtn:hover {
  /* border:1px solid red; */
	background: #263bd6;
	color:#fff;
	text-decoration: none;
}

li.gauss{
  /*border:1px solid orange;*/
  display:none;
 
}

li.JBT{
  display:none;
}

li.JBD{
  display:none;
}

li.JTC{
  display:none;
}

/*li.JBC{
  display:none;
}

li.JBW{
  display:none;
}*/

</style>

</head>


<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Job Listing</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <!-- <div class="breadCrumb"><a href="home.php">Home</a> / <a href="job.php">Job Search</a> / <span>Job Name</span></div> -->
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="listpgWraper">
  <div class="container"> 
    
    <!-- Page Title start -->
    <div class="pageSearch">
      <div class="row">
        <div class="col-md-3"><a href="<?php echo base_url('Login')?>" class="btn"><i class="fa fa-file-text" aria-hidden="true"></i> Upload Your Resume</a></div>
        <div class="col-md-9">
          <div class="searchform">
            <div class="row">
              <div class="col-md-4 col-sm-3">
                <input type="text" class="form-control" placeholder="Job Title" />
              </div>
              <div class="col-md-2 col-sm-2">
                <select class="form-control">
                  <option>Industry</option>
                </select>
              </div>
              <div class="col-md-2 col-sm-2">
                <select class="form-control">
                  <option>City</option>
                </select>
              </div>
              <div class="col-md-3 col-sm-3">
                <select class="form-control">
                  <option>Min. Salary</option>
                </select>
              </div>
              <div class="col-md-1 col-sm-2">
                <button class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Title end --> 
    
    <!-- Search Result and sidebar start -->
    <div class="row">
      <div class="col-md-3 col-sm-6"> 
        <!-- Side Bar start -->
        <div class="sidebar"> 
          <!-- Jobs By Title -->
          <div class="widget">
            <h4 class="widget-title">Jobs By Title</h4>
            <ul class="optionlist">
            <?php foreach($jobCategories as $jobCategory){ ?>
            <li class=JBT>
                <input type="checkbox" name="checkname" id="<?php echo $jobCategory->job_name; ?>" />
                <label for="<?php $jobCategory->job_name; ?>"></label>
                <?php echo $jobCategory->job_name; ?> <span><?php //echo $jbn; ?></span> </li>

<?php } ?>
            </ul>
            <!-- title end --> 
            <a href="#." id="JBT">View More</a>
             </div>
          


          <!-- Jobs By City -->
          <div class="widget">
            <h4 class="widget-title">Jobs By City</h4>
            <ul class="optionlist">
            <?php foreach($cityCategories as $cityCategory) {?>
            <li class=JBT>
            <input type="checkbox" name="checkname" id="<?php echo $cityCategory->city_name; ?>" />
                <label for="<?php echo $cityCategory->city_name; ?>"></label>
                <?php echo $cityCategory->city_name; ?> <span><?php //echo $row1['city']; ?></span> </li>
            <?php } ?>
            </ul>
            <a href="#." id="JBC">View More</a> </div>
          <!-- Jobs By City end--> 
          <!-- Jobs By worktime -->
          <div class="widget">
            <h4 class="widget-title">Jobs By WorkTime</h4>
            <ul class="optionlist">
            <?php foreach($jobCategories as $jobCategory){ ?>
              <li class=JBW>
              <input type="checkbox" name="checkname" id="<?php echo $jobCategory->job_type; ?>" />
                <label for="<?php echo $jobCategory->job_type; ?>"></label>
                
                <?php echo $jobCategory->job_type; ?> <span><?php //echo $row2['job']; ?></span> 
                </li>
                <?php } ?>
            </ul>
            <a href="#." id="JBW">View More</a> </div>
          <!-- Jobs By Experience end --> 
          
          <!-- Jobs By Designation -->
          <div class="widget">
            <h4 class="widget-title">Jobs By Designation</h4>
            <ul class="optionlist">
            <?php foreach($jobCategories as $jobCategory){ ?>
            <li class=JBD>
                <input type="checkbox" name="checkname" id="<?php echo $jobCategory->job_designation ?>" />
                <label for="<?php echo $jobCategory->job_designation  ?>"></label>
                <?php echo $jobCategory->job_designation; ?> <span><?php //echo $row3['job_desi']; ?></span> 
                </li>
                <?php } ?>
            </ul>
            <a href="#." id="JBD">View More</a> </div>
          <!-- Jobs By Designation end --> 
          
          <!-- Top Companies -->
          <div class="widget">
            <h4 class="widget-title">Top Companies</h4>
            <ul class="optionlist">
            <?php foreach($jobCategories as $jobCategory){ ?>
            <li class=JBD>
                <input type="checkbox" name="checkname" id="<?php echo $jobCategory->job_company_name ?>" />
                <label for="<?php echo $jobCategory->job_company_name  ?>"></label>
                <?php echo $jobCategory->job_company_name; ?> <span><?php //echo $row3['job_desi']; ?></span> 
                </li>
                <?php } ?>
            </ul>
            <a href="#." id="JTC">View More</a> </div>
          <!-- Top Companies end --> 
          
          <!-- Salary -->
          <div class="widget">
            <h4 class="widget-title">Salary Range</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="price1" />
                <label for="price1"></label>
                0 to $100 <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price2" />
                <label for="price2"></label>
                $100 to $199 <span>41</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price3" />
                <label for="price3"></label>
                $199 to $499 <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price4" />
                <label for="price4"></label>
                $499 to $999 <span>66</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price5" />
                <label for="price5"></label>
                $999 to $4999 <span>159</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price6" />
                <label for="price6"></label>
                Above $4999 <span>865</span> </li>
            </ul>
            <a href="#.">View More</a> </div>
          <!-- Salary end --> 
          
          <!-- button -->
          <div class="searchnt">
            <button class="btn"><i class="fa fa-search" aria-hidden="true"></i> Search Jobs</button>
          </div>
          <!-- button end--> 
        </div>
        <!-- Side Bar end --> 
      </div>
      <div class="col-md-3 col-sm-6 pull-right"> 
        <!-- Social Icons -->
        <div class="sidebar">
          <h4 class="widget-title">Follow Us</h4>
          <div class="social"> <a href="http://www.twitter.com/" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="http://www.plus.google.com/" target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> <a href="http://www.facebook.com/" target="_blank"> <i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a> <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a> <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> </div>
          <!-- Social Icons end --> 
        </div>
        
        <!-- Sponsord By -->
        <div class="sidebar">
          <h4 class="widget-title">Sponsored By</h4>
          <div class="gad"><img src="<?php echo base_url('images/googlead.jpg')?>" alt="your alt text" /></div>
          <div class="gad"><img src="<?php echo base_url('images/googlead.jpg')?>" alt="your alt text"/></div>
          <div class="gad"><img src="<?php echo base_url('images/googlead.jpg')?>" alt="your alt text" /></div>
          <div class="gad"><img src="<?php echo base_url('images/googlead.jpg')?>" alt="your alt text" /></div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12"> 
        <!-- Search List -->
        <ul class="searchList">
          <!-- job start -->
        <?php foreach($jobs as $job){ ?>
          <li class="gauss">
            <div class="row">
              <div class="col-md-8 col-sm-8">
                <div class="jobimg"><img src="https://jobs.nammamaduraiapp.com/sadmin/images/<?php echo $job->job_image; ?>"  alt="Job Image" /></div>
                <div class="jobinfo">
                  <h3><a href="#."><?php echo $job->job_name; ?></a></h3>
                  <div class="companyName"><a href="#."><?php echo $job->job_company_name; ?></a></div>
                  <?php
                   if($job->job_type=="Full Time"){
                    $cls="Fulltime";
                   }
                   else{
                    $cls="PartTime";
                   }
                  ?>
                  <div class="location"><label class="<?php echo $cls ?>"><?php echo $job->job_type; ?></label>   - <span><?php //echo $Jaddress; ?></span></div>
                </div>
                <div class="clearfix"></div>
                </div>
              
               <form action="" method="post">
                
               <input type="hidden" name="apjbid" id="" value="<?php echo $job->id; ?>">
              
               <input type="hidden" name="apusid" id="" value="<?php// echo $_SESSION['id']; ?>"> 

               <input type="hidden" name="apcreated" id="" value="<?php echo date("Y/m/d"); ?>">

               <input type="hidden" name="apseen" id="" value="0">

              <div class="col-md-4 col-sm-4">
              <div class="job-list">
                <a class="listbtn" href="<?php echo base_url('Login');?>" style="background-color:blue;color:white;text-decoration:none;padding:10px;margin-top:50%;">Apply Now</a>
              </div>
              </div>
              </form> 
            </div>

            <p><?php echo $job->job_desc; ?></p>
          </li>
          <?php } ?>
          
          <!-- job end -->  
        </ul>
        
        <!-- Pagination Start -->
        <div class="pagiWrap">
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="showreslt">Showing 1-10</div>
            </div>
            <div class="col-md-8 col-sm-8 text-right">
              <ul class="pagination">
                <li><a href="#." id="one">1</a></li>
                <li><a href="#." id="two">2</a></li>
                <li><a href="#." id="three">3</a></li>
                <li><a href="#." id="four">4</a></li>
                <li><a href="#." id="five">5</a></li>
                <li><a href="#." id="six">6</a></li>
                <li><a href="#." id="seven">7</a></li>
                <li><a href="#." id="eight">8</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Pagination end --> 


      </div>
    </div>
  </div>
</div>