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


                        <form class="form" action="<?php echo base_url("Jobposter/addJob")?>" enctype="multipart/form-data" method="post">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="formrow">
                                        <!-- <label for="jobtitle">Job Title:</label><br> -->
                                        <input type="text" name="jobname" class="form-control" placeholder="Job Title" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="formrow">
                                        <select class="form-control" name="category" placeholder="Select Job Category" required> 
                                            <?php foreach($jobCategories as $jobCategory) { ?>
                                          
                                            <option value=" <?php echo $jobCategory->cid; ?> "><?php echo $jobCategory->category_name; ?>
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
                                        <?php foreach($cityCategories as $cityCategory) { ?>
                                            <option value="<?php echo $cityCategory->c_id; ?>"><?php echo $cityCategory->city_name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
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
                                        <input type="text" name="wday" class="form-control" placeholder="Working Days"
                                            value="" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="formrow">
                                        <input type="text" name="wtime" class="form-control" placeholder="working Time"
                                            value="" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="formrow">
                                        <input type="hidden" name="uid" class="form-control" placeholder="userid"
                                            value="<?php echo $this->session->userdata('loggedIn')['id'] ; ?>" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="formrow">
                                        <input type="hidden" name="ustat" class="form-control" placeholder="status"
                                            value="1" required>
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
                                        <!-- <img src="upload/comp_job_images/<?php //echo $cimage; ?>" width=125 height=125
                                            title="<?php //echo $image; ?>"> -->
                                        <input type="file" name="image" id="image"  required>
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
