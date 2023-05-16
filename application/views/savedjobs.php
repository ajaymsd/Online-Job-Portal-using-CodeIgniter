<!-- Featured Jobs start -->
<div id="favjob" class="section greybg">
    <div class="container">
        <!-- title start -->
        <div class="titleTop">
            <div class="subtitle">Here You Can See Your</div>
            <h3>Favourite <span>Jobs</span></h3>
        </div>
        <!-- title end -->

        <!--Featured Job start-->
        <ul class="jobslist row">
<?php
/*
//tj ts is the word i given for easy understanding
// $query="SELECT tj.*,ts.job_id FROM tbl_jobs tj, tbl_saved ts WHERE tj.id = ts.job_id";
$query="https://stackoverflowteams.com/c/devolopers-united";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result)){

    if($row['job_id'] == $row['id'])
    {
    $tdStyle='red;';
    }
else
    {
    $tdStyle='gray;';
    }
// echo $row["job_type"];
  

    $img_path = $row['job_image'];
    $address  = $row['job_address'];
    //echo "$tdStyle";

      if ($row["job_type"] == "Full Time") {
  $cls = "fulltime";
 }
 else {
  $cls = "partTime";
 }
 */
?>
                <?php foreach($savedJobs as $savedJob){ ?>
                <li class="col-md-6">
                    
                    <div class="jobint">
                        <div class="row">
                            <div class="col-md-2 col-sm-2"><img src="https://jobs.nammamaduraiapp.com/sadmin/images/<?php echo $savedJob->job_image; ?>"  alt="Job Image" /></div>
                            <div class="col-md-7 col-sm-7">
                                <h4><a href="#."><?php echo $savedJob->job_name; ?></a></h4>
                                <div class="company"><a href="#."><?php echo $savedJob->job_company_name; ?></a></div>
                                <?php
                             if($savedJob->job_type=="Full Time"){
                                  $cls="Fulltime";
                              }
                            else{
                                  $cls="PartTime";
                             }
                         ?>
                                <div class="jobloc"><label class="<?php echo $cls?>"><?php echo $savedJob->job_type; ?></label> -
                                    <span><?php echo $savedJob->job_address; ?></span>
                                </div>
                            </div>
<form action="<?php echo base_url('Jobseeker/favouraite')?>" method="post">

<input type="hidden" name="job_id" class="form-control" value="<?php echo $savedJob->job_id;?>">

<input type="hidden" name="user_id" class="form-control"
    value="<?php $this->session->userdata('loggedIn')['id']; ?>">

<input type="hidden" name="created" class="form-control"
    value="<?php echo date("Y/m/d"); ?>">

<input type="hidden" name="status" class="form-control" value="1">

<!-- <input type="text" name="red" id="" value="#DC143C">     -->

<!-- <input type="text" name="white" id="" value="#FFFFFF"> -->

<div class="col-md-3 col-sm-3">

    <button type="submit" name="favorite" class="like"
        style="font-size:20px;border:none;background:none;float:right;color:red">
        <i class="fa fa-heart" class="like"
            style="font-size:19px;color:<?php //echo $tdStyle; ?>;margin:none;padding:none"></i></button>

</div>
</form>
                            <!-- <div class="col-md-3 col-sm-3"><a href="#." class="applybtn">Apply Now</a></div> -->

                        </div>
                    </div>
                </li>
<?php 

   }
   
?>


            </ul>
         
        </div>
    </div>
