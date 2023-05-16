<div class="listpgWraper">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">

                <div class="switchbox">
                    <div class="txtlbl">Immediate Available <i class="fa fa-info-circle" data-toggle="popover"
                            data-trigger="hover" data-placement="top"
                            data-content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus consectetur sagittis. Duis vitae urna vehicula, ornare nibh non, aliquet neque. In vitae erat ut augue suscipit."
                            data-original-title="" title=""></i></div>
                    <div class="pull-right"><label class="switch switch-green">
                            <input type="checkbox" class="switch-input">
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                        </label></div>
                    <div class="clearfix"></div>
                </div>

                <ul class="usernavdash">
                    <li class="active"><a href="dashframe.php" target="main"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
                    <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                    <li><a href="job.php"><i class="fa fa-folder-open" aria-hidden="true"></i> Latest Jobs</a></li>
                    <li><a href="index.php#category"><i class="fa fa-desktop" aria-hidden="true"></i> Category</a></li>
                    <li><a href="savedjob.php" target="main"><i class="fa fa-star" aria-hidden="true"></i> Saved Job</a></li>
                    <li><a href="appliedjob.php" target ="main"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Applied Job</a>
                    </li>
                    <li><a href="contact.php"><i class="fa fa-commenting" aria-hidden="true"></i> Feedback</a></li>
                    <li><a href="disp_profile.php" target="main"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                    <li><a href="#" class="sett"><i class="fa fa-gear" aria-hidden="true"></i> Settings</a>
                    <ul id="settid" class="usernavdash hidden">
                    <li><a href="#">About</a></li>                    
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Rate App</a></li>
                    <li><a href="#">Share App</a></li>
                    </ul>
                    </li>
                    <!--<li><a href="#"><i class="fa fa-tag" aria-hidden="true"></i> Tags</a></li>
          <li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Account Setting</a></li>-->
                    <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                </ul>
            </div>
            <div class="col-md-9 col-sm-8">
                <ul class="row profilestat">
                    <li class="col-md-2 col-sm-4 col-xs-6">
                        <div class="inbox"> <i class="fa fa-eye" aria-hidden="true"></i>
                            <h6>10</h6>
                            <strong>Profile Views</strong>
                        </div>
                    </li>
                    <li class="col-md-2 col-sm-4 col-xs-6">
                        <div class="inbox"> <i class="fa fa-tachometer" aria-hidden="true"></i>
                            <h6>2 <span>hr</span></h6>
                            <strong>Respond Time</strong>
                        </div>
                    </li>
                    <li class="col-md-2 col-sm-4 col-xs-6">
                        <div class="inbox"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <h6>10</h6>
                            <strong>Ad Expire</strong>
                        </div>
                    </li>

                    <?php
          //this is for counting the list of the user in saved jobs
              $sql6 = "SELECT count(*) AS total FROM tbl_saved where user_id = $_SESSION[id] ";
              $result6 = mysqli_query($conn,$sql6);
              $values = mysqli_fetch_assoc($result6);
              $num_rows = $values['total'];
              //echo $num_rows;
                  ?>

                    <li class="col-md-2 col-sm-4 col-xs-6">
                        <div class="inbox"> <i class="fa fa-star" aria-hidden="true"></i>
                            <h6> <?php echo $num_rows; ?> </h6>
                            <strong>Saved Jobs</strong>
                        </div>
                    </li>

                    <?php
          //this is for counting the list of the user in applied jobs
              $sql7 = "SELECT count(*) AS total FROM tbl_apply where user_id = $_SESSION[id] ";
              $result7 = mysqli_query($conn,$sql7);
              $values1 = mysqli_fetch_assoc($result7);
              $num_rows1 = $values1['total'];
            //   echo $num_rows1;
                  ?>

                    <li class="col-md-2 col-sm-4 col-xs-6">
                        <div class="inbox"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            <h6><?php echo $num_rows1; ?></h6>
                            <strong>Applied Jobs</strong>
                        </div>
                    </li>
                    <li class="col-md-2 col-sm-4 col-xs-6">
                        <div class="inbox"> <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <h6>8</h6>
                            <strong>Messages</strong>
                        </div>
                    </li>
                </ul>

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <iframe src="dashframe.php" style="border:none;width:100%; height:600px" scrolling="yes"
                            name="main"></iframe>
                    </div>
                </div>

                </div>
</div>

<head>
  <style>
    #dashy{
      display:none;
    }
  </style>
</head>
                <div id="dashy">
                    <div class="instoretxt">
                        <div class="credit">Your on site available credit is: <strong>$99.00</strong></div>
                        <a href="#.">Update Package</a> <a href="#." class="history">Payment History</a>
                    </div>

                    <div class="myads">
                        <h3>Similar Jobs</h3>
                        <ul class="searchList">
                            <!-- start -->
                            <li>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8">
                                        <div class="jobimg"><img src="images/jobs/jobimg.jpg" alt="Job Name"></div>
                                        <div class="jobinfo">
                                            <h3><a href="#.">Technical Database Engineer</a></h3>
                                            <div class="companyName"><a href="#.">Datebase Management Company</a></div>
                                            <div class="location">Permanent - <span>New York</span></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="listbtn"><a href="#.">Apply Now</a></div>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce venenatis arcu est.
                                    Phasellus vel dignissim tellus. Aenean fermentum fermentum convallis.</p>
                            </li>
                            <!-- end -->

                            <!-- start -->
                            <li>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8">
                                        <div class="jobimg"><img src="images/jobs/jobimg.jpg" alt="Job Name"></div>
                                        <div class="jobinfo">
                                            <h3><a href="#.">Technical Database Engineer</a></h3>
                                            <div class="companyName"><a href="#.">Datebase Management Company</a></div>
                                            <div class="location">Permanent - <span>New York</span></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="listbtn"><a href="#.">Apply Now</a></div>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce venenatis arcu est.
                                    Phasellus vel dignissim tellus. Aenean fermentum fermentum convallis.</p>
                            </li>
                            <!-- end -->

                            <!-- start -->
                            <li>
                                <div class="row">
                                    <div class="col-md-8 col-sm-8">
                                        <div class="jobimg"><img src="images/jobs/jobimg.jpg" alt="Job Name"></div>
                                        <div class="jobinfo">
                                            <h3><a href="#.">Technical Database Engineer</a></h3>
                                            <div class="companyName"><a href="#.">Datebase Management Company</a></div>
                                            <div class="location">Permanent - <span>New York</span></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="listbtn"><a href="#.">Apply Now</a></div>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce venenatis arcu est.
                                    Phasellus vel dignissim tellus. Aenean fermentum fermentum convallis.</p>
                            </li>
                            <!-- end -->



                        </ul>
                    </div>
                </div>
            </div>
        </div>

 