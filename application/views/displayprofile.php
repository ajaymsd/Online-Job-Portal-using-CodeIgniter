<div class="listpgWraper">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="userccount">
          <div class="formpanel"> 

   
            <div class="row">
            <div class="col-md-6 ">
           <?php foreach ($userDetails as $userDetail){ ?>
            <table class='table'>
  <tr>
    <th></th>
    <th></th>

  </tr>
  <tr>
    <td><h4 style="text-transform: uppercase; color:blue; font-size:20px;font-family: cursive;font-weight:900;padding-left:20px;padding-right:auto;">NAME:  </h4></td>
    <td><h5 style="padding-left:50px;padding-right:auto;text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px; float:center"><?php echo $userDetail->name; ?></h5></td>
  </tr>

  <tr>
    <td><h4 style="text-transform: uppercase; color:blue; font-size:20px;font-family: cursive;font-weight:900;padding-left:20px;padding-right:auto;">Date of birth:</h4></td>
    <td><h5 style="padding-left:50px;padding-right:auto;text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px; float:center"><?php echo $userDetail->date_of_birth; ?></h5> </td>
  </tr>

  <tr>
    <td><h4 style="text-transform: uppercase; color:blue; font-size:20px;font-family: cursive;font-weight:900;padding-left:20px;padding-right:auto;">gender: </h4></td>    
    <td><h5 style="padding-left:50px;padding-right:auto;text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px; float:center"><?php echo $userDetail->gender; ?></h5></td>
  </tr>

  <tr>
    <td><h4 style="text-transform: uppercase; color:blue; font-size:20px;font-family: cursive;font-weight:900;padding-left:20px;padding-right:auto;">e-mail: </h4></td> 
    <td><h5 style="padding-left:50px;padding-right:auto;text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px; float:center"><?php echo $userDetail->email; ?></h5></td>
  </tr>

  <!-- <tr>
    <td><h4 style="text-transform: uppercase; color:blue; font-size:20px;font-family: cursive;font-weight:900;padding-left:20px;padding-right:auto;">password: </h4></td>    
    <td><h5 style="padding-left:50px;padding-right:auto;text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px; float:center"><?php echo $userDetail->password; ?></h5></td>
  </tr> -->

  <tr>
    <td><h4 style="text-transform: uppercase; color:blue; font-size:20px;font-family: cursive;font-weight:900;padding-left:20px;padding-right:auto;">phone:</h4></td>    
    <td><h5 style="padding-left:50px;padding-right:auto;text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px; float:center"><?php echo $userDetail->phone; ?></h5></td>
  </tr>

  <tr>
    <td><h4 style="text-transform: uppercase; color:blue; font-size:20px;font-family: cursive;font-weight:900;padding-left:20px;padding-right:auto;">city: </h4></td>    
    <td><h5 style="padding-left:50px;padding-right:auto;text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px; float:center"><?php echo $userDetail->city; ?></h5></td>
  </tr>

  <tr>
    <td><h4 style="text-transform: uppercase; color:blue; font-size:20px;font-family: cursive;font-weight:900;padding-left:20px;padding-right:auto;">address:</h4></td>    
    <td><h5 style="padding-left:50px;padding-right:auto;text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px; float:center"><?php echo $userDetail->address; ?></h5></td>
  </tr>

  <tr>
    <td><h4 style="text-transform: uppercase; color:blue; font-size:20px;font-family: cursive;font-weight:900;padding-left:20px;padding-right:auto;">Profile image:</h4></td>    
    <td><h5 style="padding-left:50px;padding-right:auto;text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px; float:center"><?php echo $userDetail->user_image; ?></h5></td>
  </tr>

  <tr>
    <td><h4 style="text-transform: uppercase; color:blue; font-size:20px;font-family: cursive;font-weight:900;padding-left:20px;padding-right:auto;">current company name:</h4></td>    
    <td><h5 style="padding-left:50px;padding-right:auto;text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px; float:center"><?php echo $userDetail->current_company_name; ?></h5></td>
  </tr>

  <tr>
    <td><h4 style="text-transform: uppercase; color:blue; font-size:20px;font-family: cursive;font-weight:900;padding-left:20px;padding-right:auto;">experiences:</h4></td>    
    <td><h5 style="padding-left:50px;padding-right:auto;text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px; float:center"><?php echo $userDetail->experiences; ?></h5></td>
  </tr>

  <tr>
    <td><h4 style="text-transform: uppercase; color:blue; font-size:20px;font-family: cursive;font-weight:900;padding-left:20px;padding-right:auto;">skills:</h4></td>    
    <td><h5 style="padding-left:50px;padding-right:auto;text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px; float:center"><?php echo $userDetail->skills; ?></h5></td>
  </tr>

  <tr>
    <td><h4 style="text-transform: uppercase; color:blue; font-size:20px;font-family: cursive;font-weight:900;padding-left:20px;padding-right:auto;">resume:</h4></td>    
    <td><h5 style="padding-left:50px;padding-right:auto;text-transform: uppercase; Text-Decoration: None !important; color:black;font-size:18px; float:center"><?php echo $userDetail->user_resume; ?></h5></td>
  </tr>

</table>
<?php } ?>
                   </div>
            </div>

            <hr>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
