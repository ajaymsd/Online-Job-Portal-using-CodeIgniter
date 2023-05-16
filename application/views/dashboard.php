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
                          <?php foreach($userDetails as $userDetail){ ?>
                            <?php 
                            if($userDetail->status==1){
                                $stat="checked";
                            }
                            else{
                                $stat="notchecked";
                            }
                            ?>
                            <input type="checkbox" class="switch-input" <?php echo $stat; ?> >
                            <?php } ?>
                            <span class="switch-label" data-on="On" data-off="Off" ></span>
                            <span class="switch-handle"></span>
                        </label></div>
                    <div class="clearfix"></div>
                </div>

                <ul class="usernavdash">
                    <li class="active"><a href="" target="main"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
                    <li><a href="<?php echo base_url('Jobseeker')?>"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                    <li><a href="<?php echo base_url('Jobseeker/Job')?>"><i class="fa fa-folder-open" aria-hidden="true"></i> Latest Jobs</a></li>
                    <li><a href="<?php echo base_url('Jobseeker')?>#category"><i class="fa fa-desktop" aria-hidden="true"></i> Category</a></li>
                    <li><a href="<?php echo base_url('Login/savedJobs')?>" target="main"><i class="fa fa-star" aria-hidden="true"></i> Saved Job</a></li>
                    <li><a href="<?php echo base_url('Login/appliedJobs')?>" target ="main"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Applied Job</a>
                    </li>
                    <li><a href="<?php echo base_url('Jobseeker/Contact')?>"><i class="fa fa-commenting" aria-hidden="true"></i> Feedback</a></li>
                    <li><a href="<?php echo base_url('Login/displayProfile')?>" target="main"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                    <li><a href="#" class="sett"><i class="fa fa-gear" aria-hidden="true"></i> Settings</a>
                    <ul id="settid" class="usernavdash hidden">
                    <li><a href="#">About</a></li>                    
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Rate App</a></li>
                    <li><a href="#">Share App</a></li>
                    </ul>
                    </li>

                    <li><a href="<?php echo base_url('Login/logout')?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
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

                    <li class="col-md-2 col-sm-4 col-xs-6">
                        <div class="inbox"> <i class="fa fa-star" aria-hidden="true"></i>
                        
                            <h6> <?php echo $totalSavedJobs?> </h6>
                            
                            <strong>Saved Jobs</strong>
                        </div>
                    </li>
                    <li class="col-md-2 col-sm-4 col-xs-6">
                        <div class="inbox"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            <h6><?php echo $totalAppliedJobs; ?></h6>
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
                        <iframe src="<?php echo base_url("Login/dashframe"); ?>" style="border:none;width:100%; height:600px" scrolling="yes"
                            name="main"></iframe>
                    </div>
                </div>

                </div>
</div>

 

</div>
            </div>
        </div>

 