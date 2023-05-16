<?php

error_reporting(2);

session_start();

$servername = "localhost";
$username = "nammama1_nmapp";
$password = "_gbWv7n=TX=T";
$database = "nammama1_jobs";

$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

define("IMAGEURL","https://jobs.nammamaduraiapp.com/sadmin/images/");

// define("PROFILE","C:/xampp/htdocs/job/upload/profile_images/");

?>