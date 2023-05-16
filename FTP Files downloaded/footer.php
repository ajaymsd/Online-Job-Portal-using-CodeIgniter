
<!--Footer-->
<div class="footerWrap">
  <div class="container">
    <div class="row"> 
      <!--About Us-->
      <div class="col-md-3 col-sm-12">
        <div class="ft-logo"><img src="images/logo 1.png" alt="Your alt text here"></div>
        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et consequat elit. Proin molestie eros sed urna auctor lobortis. Integer eget scelerisque arcu. Pellentesque scelerisque pellentesque nisl, sit amet aliquam mi pellentesque fringilla. Ut porta augue a libero pretium laoreet. Suspendisse sit amet massa accumsan, pulvinar augue id, tristique tortor.</p> -->
        
        <!-- Social Icons -->
        <div class="social"> <a href="#." target="_blank"> <i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#." target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a> </div>
        <!-- Social Icons end --> 
      </div>
      <!--About us End--> 
      
      <!--Quick Links-->
      <div class="col-md-2 col-sm-6">
        <h5>Quick Links</h5>
        <!--Quick Links menu Start-->
        <ul class="quicklinks">
          <li><a href="#.">Career Services</a></li>
          <li><a href="#.">CV Writing</a></li>
          <li><a href="#.">Career Resources</a></li>
          <li><a href="#.">Company Listings</a></li>
          <li><a href="#.">Success Stories</a></li>
          <li><a href="#.">Contact Us</a></li>
          <li><a href="#.">Create Account</a></li>
          <li><a href="#.">Post a Job</a></li>
          <li><a href="#.">Contact Sales</a></li>
        </ul>
      </div>
      <!--Quick Links menu end--> 
      
      <!--Jobs By Industry-->
      <div class="col-md-3 col-sm-6">
        <h5>Jobs By Industry</h5>
        <!--Industry menu Start-->
        <ul class="quicklinks">
 <?php
$sql = "SELECT * FROM tbl_category LIMIT 9 OFFSET 0";
$result = $conn->query($sql);   

 if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
//    echo "id: " . $row["name"]  ."<br>";
  $name = $row["category_name"];


?>
        
          <li><a href="#."><?php echo $name; ?>
            
            </a></li>

   <?php         
   }
 }
 else {
  echo "0 results";
}

?> 



<!--          <li><a href="#.">Recruitment/Employment Firms Jobs</a></li>
          <li><a href="#.">Education/Training Jobs</a></li>
          <li><a href="#.">Manufacturing Jobs</a></li>
          <li><a href="#.">Call Center Jobs</a></li>
          <li><a href="#.">N.G.O./Social Services Jobs</a></li>
          <li><a href="#.">BPO Jobs</a></li>
          <li><a href="#.">Textiles/Garments Jobs</a></li>
          <li><a href="#.">Telecommunication/ISP Jobs</a></li> -->

        </ul>
        <!--Industry menu End-->
        <div class="clear"></div>
      </div>
      
      <!--Latest Articles-->
      <div class="col-md-4 col-sm-12">
        <h5>Contact-Us</h5>
        <ul class="posts-list">
          <!--Article 1-->
          <li>
            <article class="post post-list">
              <div class="entry-content media">
                <div class="media-left"> <a href="#." title="" class="entry-image"> <img width="80" height="80" src="images/news-1.jpg" alt="Your alt text here"> </a> </div>
                <div class="media-body">
                  <h4 class="entry-title"> <a href="#.">Sed fermentum at lectus nec porta.</a> </h4>
                  <div class="entry-content-inner">
                    <div class="entry-meta"> <span class="entry-date">Jan 28, 2016</span> </div>
                  </div>
                </div>
              </div>
            </article>
          </li>
          <!--Article end 1--> 
          
          <!--Article 2-->
          <li>
            <article class="post post-list">
              <div class="entry-content media">
                <div class="media-left"> <a href="#." title="" class="entry-image"> <img width="80" height="80" src="images/news-2.jpg" alt="Your alt text here"> </a> </div>
                <div class="media-body">
                  <h4 class="entry-title"> <a href="#.">Sed fermentum at lectus nec porta.</a> </h4>
                  <div class="entry-content-inner">
                    <div class="entry-meta"> <span class="entry-date">Jan 28, 2016</span> </div>
                  </div>
                </div>
              </div>
            </article>
          </li>
          <!--Article end 2--> 
          
          <!--Article 3-->
          <li>
            <article class="post post-list">
              <div class="entry-content media">
                <div class="media-left"> <a href="#." title="" class="entry-image"> <img width="80" height="80" src="images/news-3.jpg" alt="Your alt text here"> </a> </div>
                <div class="media-body">
                  <h4 class="entry-title"> <a href="#.">Sed fermentum at lectus nec porta.</a> </h4>
                  <div class="entry-content-inner">
                    <div class="entry-meta"> <span class="entry-date">Jan 28, 2016</span> </div>
                  </div>
                </div>
              </div>
            </article>
          </li>
          <!--Article end 3-->
        </ul>
      </div>
    </div>
  </div>
</div>
<!--Footer end--> 

<!--Copyright-->
<div class="copyright">
  <div class="container">
    <div class="bttxt">Copyright &copy; 2017 Your Company Name. All Rights Reserved. Design by: <a href="http://graphicriver.net/user/ecreativesol" target="_blank">eCreativeSolutions</a></div>
  </div>
</div>

<!-- Bootstrap's JavaScript --> 
<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<!-- Owl carousel --> 
<script src="js/owl.carousel.js"></script> 

<!-- map with geo locations --> 
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBueyERw9S41n4lblw5fVPAc9UqpAiMgvM"></script> 
<script type="text/javascript" src="js/map.js"></script> 
<script type="text/javascript" src="js/jquery.mapit.js"></script> 
<script>
/* ==== Map ==== */
	$(document).ready(function() {
		$('#map_canvas').mapit();
	});
</script> 
<!-- map with geo locations --> 

<!-- Custom js --> 
<script src="js/script.js"></script>

<!--this is for register page company individual radio button-->
<script>
function show1(){
  document.getElementById('div1').style.display ='none';
}
function show2(){
  document.getElementById('div1').style.display = 'block';
}
</script>

<!-- featured-job viewall -->
<script>
	$(".jobint").slice(0, 4).show(); //showing 4 div

	$(".viewallbtn").on("click",function(){
		$(".jobint:hidden").slice().show(); //showing all hidden div on click

		if($(".jobint:hidden").length ==0)
		{
			$(".viewallbtn").fadeOut(); //this will hide
			//button when length is 0
		}
	});
</script>


<!--pagination jquery to next page for job listing-->
<script>
$(document).ready(function(){
$("li.gauss").slice(0,5).show();

  $("#one").on("click",function(){
  $("li.gauss").slice().hide();
  $("li.gauss").slice(0,5).show();	});

  $("#two").on("click",function(){
  $("li.gauss").slice(0,5).hide();
  $("li.gauss").slice(5,10).show();  });

  $("#three").on("click",function(){
  $("li.gauss").slice(0,10).hide();
  $("li.gauss").slice(10,15).show();	});

  $("#four").on("click",function(){
  $("li.gauss").slice(0,15).hide();
  $("li.gauss").slice(15,20).show();	});

  $("#five").on("click",function(){
  $("li.gauss").slice(0,20).hide();
  $("li.gauss").slice(20,25).show();	});

  $("#six").on("click",function(){
  $("li.gauss").slice(0,25).hide();
  $("li.gauss").slice(25,30).show();	});

  $("#seven").on("click",function(){
  $("li.gauss").slice(0,30).hide();
  $("li.gauss").slice(30,35).show();	});

  $("#eight").on("click",function(){
  $("li.gauss").slice(0,35).hide();
  $("li.gauss").slice(35,40).show();	});

        });
</script>

<!-- featured-job heart fade -->
<script>
		$(document).ready(function(){

			
		 $(".like").click(function(){
		   $(".like").fadeOut();
			$(".likeun").show();
			
		   // $("div").addClass("important");
		 });
		 $(".likeun").click(function(){
		   $(".likeun").fadeOut();
			$(".like").show();
			
		   // $("div").addClass("important");
		 });
	   });
	   </script>

<!-- provider job list full details show or hide -->
<script>
$(document).ready(function(){

			
$("#deta").click(function(){
  $(".detoils").toggle();


});

});
</script>

<!-- job 
<script>
$('button[name=viewALL]').click(function(){
   let btnText = $(this).text().toLowerCase();
   if (btnText === 'view all') {
      $(this).text('View Less');
      $( ".product-item" ).show();
   } else if (btnText === 'view less') {
      $(this).text('View All');
      $( ".product-item").not($( ".product-item").slice( 6, 10 )).hide();
   }
});
</script>-->

