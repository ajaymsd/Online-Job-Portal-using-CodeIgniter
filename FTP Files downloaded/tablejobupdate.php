
<?php
require 'config.php';
if(isset($_POST["jobup"])){

// echo $_POST['jobid'];
// echo $_SESSION['id'];
// die;
//     // echo "success"; 
    //  print_r ($_REQUEST);
    //  die;

    $cotitle = $_POST['jobname'];
    $cocate = $_POST['category'];
    $cocity = $_POST['location'];
    $coexp = $_POST['experience'];
    $codesig = $_POST['designation'];
    $cosal = $_POST['msalary'];
    $codesc = $_POST['description'];
    $cojtype = $_POST['jobtype'];
    $coname = $_POST['companyname'];
    $cophone = $_POST['phone'];
    $comail = $_POST['email'];
    $coweb = $_POST['website'];
    $coaddress = $_POST['address'];
    $covacancy = $_POST['vacancy'];
    $coquali = $_POST['qualification'];
    $coskill = $_POST['skill'];
    $cowday = $_POST['wday'];
    $cowtime = $_POST['wtime'];
    $couid = $_POST['uid'];
    $codate = $_POST['date'];


mysqli_query($conn,"UPDATE tbl_jobs SET 
cat_id = '$_POST[category]',
city_id = '$_POST[location]',
job_name = '$_POST[jobname]',
job_designation = '$codesig',
job_desc = '$codesc',
job_salary = '$cosal',
job_company_name = '$coname',
job_company_website = '$coweb',
job_phone_number = '$cophone',
job_mail = '$comail',
job_vacancy = '$covacancy',
job_address = '$coaddress',
job_qualification = '$coquali',
job_skill = '$coskill',
job_date = '$codate',
job_type = '$cojtype',
job_experince = '$coexp',
job_work_day = '$cowday',
job_work_time = '$cowtime'

WHERE user_id = $_SESSION[id] && id = $_POST[jobid]");

}
if(isset($_POST["jobup"]))
{
  $alert = "<script>window.location.href='prov_job_list.php';alert('Updated Successfully');</script>";
  echo $alert;
  //header("Location: index.php");

}

?>