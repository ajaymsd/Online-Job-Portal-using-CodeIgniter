

<?php include 'head.php'; ?>




<?php
// require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tbl_users WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
   $image = $row["user_image"];  
  // $_SESSION["name"] = "$name";
  $_SESSION["name"] = $row["name"];
  // $_SESSION["email"] = $row["email"];
  // $_SESSION["password"] = $row["password"];
  // $_SESSION["phone"] = $row["phone"];
  // $_SESSION["city"] = $row["city"];
  // $_SESSION["address"] = $row["address"];
  // $_SESSION["user_image"] = $row["user_image"];
  // $_SESSION["user_resume"] = $row["user_resume"];
  // $_SESSION["current_company_name"] = $row["current_company_name"];
  // $_SESSION["experiences"] = $row["experiences"];
  // $_SESSION["skills"] = $row["skills"];
  // $_SESSION["gender"] = $row["gender"];
  // $_SESSION["dob"] = $row["date_of_birth"];
  // $_SESSION["register_date"] = $row["register_date"];
  // $_SESSION["status"] = $row["status"];

}
else{
  header("Location: login.php");
}
?>

<div class="listpgWraper">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="userccount">
          <div class="formpanel"> 

   
            <div class="row">
            <div class="col-md-6 ">

            <table>
  <tr>
    <th></th>
    <th></th>

  </tr>
  <tr>
    <td><h4 style="text-transform: uppercase; color:blue; font-size:20px;font-family: cursive;font-weight:900;padding-left:20px;padding-right:auto;">NAME:  </h4></td>
    <td><h5 style="padding-left:50px;padding-right:auto;text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px; float:center"><?php echo $row["name"]; ?></h5></td>
  </tr>

  <tr>
    <td><h4 style="text-transform: uppercase; color:blue; font-size:20px;font-family: cursive;font-weight:900;padding-left:20px;padding-right:auto;">Date of birth:</h4></td>
    <td><h5 style="padding-left:50px;padding-right:auto;text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px; float:center"><?php echo $row["date_of_birth"]; ?></h5> </td>
  </tr>

  <tr>
    <td><h4 style="text-transform: uppercase; color:blue; font-size:20px;font-family: cursive;font-weight:900;padding-left:20px;padding-right:auto;">gender: </h4></td>    
    <td><h5 style="padding-left:50px;padding-right:auto;text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px; float:center"><?php echo $row["gender"]; ?></h5></td>
  </tr>

  <tr>
    <td><h4 style="text-transform: uppercase; color:blue; font-size:20px;font-family: cursive;font-weight:900;padding-left:20px;padding-right:auto;">e-mail: </h4></td> 
    <td><h5 style="padding-left:50px;padding-right:auto;text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px; float:center"><?php echo $row["email"]; ?></h5></td>
  </tr>

  <!-- <tr>
    <td><h4 style="text-transform: uppercase; color:blue; font-size:20px;font-family: cursive;font-weight:900;padding-left:20px;padding-right:auto;">password: </h4></td>    
    <td><h5 style="padding-left:50px;padding-right:auto;text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px; float:center"><?php echo $row["password"]; ?></h5></td>
  </tr> -->

  <tr>
    <td><h4 style="text-transform: uppercase; color:blue; font-size:20px;font-family: cursive;font-weight:900;padding-left:20px;padding-right:auto;">phone:</h4></td>    
    <td><h5 style="padding-left:50px;padding-right:auto;text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px; float:center"><?php echo $row["phone"]; ?></h5></td>
  </tr>

  <tr>
    <td><h4 style="text-transform: uppercase; color:blue; font-size:20px;font-family: cursive;font-weight:900;padding-left:20px;padding-right:auto;">city: </h4></td>    
    <td><h5 style="padding-left:50px;padding-right:auto;text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px; float:center"><?php echo $row["city"]; ?></h5></td>
  </tr>

  <tr>
    <td><h4 style="text-transform: uppercase; color:blue; font-size:20px;font-family: cursive;font-weight:900;padding-left:20px;padding-right:auto;">address:</h4></td>    
    <td><h5 style="padding-left:50px;padding-right:auto;text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px; float:center"><?php echo $row["address"]; ?></h5></td>
  </tr>

  <tr>
    <td><h4 style="text-transform: uppercase; color:blue; font-size:20px;font-family: cursive;font-weight:900;padding-left:20px;padding-right:auto;">Profile image:</h4></td>    
    <td><h5 style="padding-left:50px;padding-right:auto;text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px; float:center"><?php echo $row["user_image"]; ?></h5></td>
  </tr>

  <tr>
    <td><h4 style="text-transform: uppercase; color:blue; font-size:20px;font-family: cursive;font-weight:900;padding-left:20px;padding-right:auto;">current company name:</h4></td>    
    <td><h5 style="padding-left:50px;padding-right:auto;text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px; float:center"><?php echo $row["current_company_name"]; ?></h5></td>
  </tr>

  <tr>
    <td><h4 style="text-transform: uppercase; color:blue; font-size:20px;font-family: cursive;font-weight:900;padding-left:20px;padding-right:auto;">experiences:</h4></td>    
    <td><h5 style="padding-left:50px;padding-right:auto;text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px; float:center"><?php echo $row["experiences"]; ?></h5></td>
  </tr>

  <tr>
    <td><h4 style="text-transform: uppercase; color:blue; font-size:20px;font-family: cursive;font-weight:900;padding-left:20px;padding-right:auto;">skills:</h4></td>    
    <td><h5 style="padding-left:50px;padding-right:auto;text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px; float:center"><?php echo $row["skills"]; ?></h5></td>
  </tr>

  <tr>
    <td><h4 style="text-transform: uppercase; color:blue; font-size:20px;font-family: cursive;font-weight:900;padding-left:20px;padding-right:auto;">resume:</h4></td>    
    <td><h5 style="padding-left:50px;padding-right:auto;text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px; float:center"><?php echo $row["user_resume"]; ?></h5></td>
  </tr>

</table>
                   </div>
            </div>

            <hr>
<!-- 
            <div class="row">
                <div class="col-md-4 col-md-offset-5">
                                          
                <a href="profile.php"><button type="button" value="go to index" class="btn1 btn-success btn-lg text-center">UPDATE</button></a>
               
                </div>
            </div> -->


          </div>
        </div>
      </div>
    </div>
  </div>
</div>
