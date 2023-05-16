<div class="footerWrap">
  <div class="container">
    <div class="row"> 
      <!--About Us-->
      <div class="col-md-3 col-sm-12">
        <div class="ft-logo"><img src="<?php echo base_url('images/logo 1.png')?>" alt="Your alt text here"></div>
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
          <li><a href="<?php echo base_url('Home/Nocontact') ?>">Contact</a></li>
          <li><a href="#.">Career Resources</a></li>
          <li><a href="<?php echo base_url('Home/Nojob') ?>">Job Listings</a></li>
          <li><a href="<?php echo base_url('Home')?>#reviews">Success Stories</a></li>
          <li><a href="<?php echo base_url('Home/noaboutus') ?>">Contact Us</a></li>
          <li><a href="<?php echo base_url('Register') ?>">Create Account</a></li>
          <li><a href="<?php echo base_url('Login') ?>">Post a Job</a></li>
          <li><a href="<?php echo base_url('Login') ?>">Apply a Job</a></li>
         
        </ul>
      </div>
      <!--Quick Links menu end--> 
      
      <!--Jobs By Industry-->
      <div class="col-md-3 col-sm-6">
        <h5>Jobs By Industry</h5>
        <!--Industry menu Start-->
        
        <ul class="quicklinks">
        <?php foreach($topCategories as $topCategory){ ?>
        <li><a href="#."><?php echo $topCategory->category_name; ?>
    <?php } ?>
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
                <div class="media-left"> <a href="#." title="" class="entry-image"> <img width="80" height="80" src="<?php echo base_url('images/news-1.jpg')?>" alt="Your alt text here"> </a> </div>
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
                <div class="media-left"> <a href="#." title="" class="entry-image"> <img width="80" height="80" src="<?php echo base_url('images/news-2.jpg')?>" alt="Your alt text here"> </a> </div>
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
                <div class="media-left"> <a href="#." title="" class="entry-image"> <img width="80" height="80" src="<?php echo base_url('images/news-3.jpg')?>" alt="Your alt text here"> </a> </div>
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
    <div class="bttxt">Copyright &copy; 2023 AstroWebSolution. All Rights Reserved. Design by : <a href="https://training.astrowebsolution.com" target="_blank">AstroWebSolution</a></div>
  </div>
</div>

<!-- Bootstrap's JavaScript --> 
<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<!-- Revolution Slider --> 
<script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script> 

<!-- Owl carousel --> 
<script src="js/owl.carousel.js"></script> 

<!-- Custom js --> 
<script src="js/script.js"></script>

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

		if($(".jobint:hidden").length == 0)
		{
			$(".viewallbtn").fadeOut(); //this will hide
			//button when length is 0
		}
	});
</script>

<!--job type view more or less-->
<script>
$(document).ready(function(){
$("li.JBT").slice(0,5).show();

  $("#JBT").on("click",function(){
  $("li.JBT").slice(5).toggle();
  // $("#JBT").toggleText("View Less");	
  $(this).text($(this).text() == 'View More' ? 'View Less' : 'View More');
 	
  }); 
        });
</script>

<!--Job by city view more or less
<script>
$(document).ready(function(){
$("li.JBC").slice(0,5).show();

  $("#JBC").on("click",function(){
  $("li.JBC").slice().toggle();
  $(this).text($(this).text() == 'View More' ? 'View Less' : 'View More');
 	
  }); 
        });
</script>-->

<!--job by worktime view more or less
<script>
$(document).ready(function(){
$("li.JBW").slice(0,5).show();

  $("#JBW").on("click",function(){
  $("li.JBW").slice().toggle();
  $(this).text($(this).text() == 'View More' ? 'View Less' : 'View More');
 	
  }); 
        });
</script>-->

<!--job designation view more or less-->
<script>
$(document).ready(function(){
$("li.JBD").slice(0,5).show();

  $("#JBD").on("click",function(){
  $("li.JBD").slice(5).toggle();
  $(this).text($(this).text() == 'View More' ? 'View Less' : 'View More');
 	
  }); 
        });
</script>

<!--Top companies view more or less-->
<script>
$(document).ready(function(){
$("li.JTC").slice(0,5).show();

  $("#JTC").on("click",function(){
  $("li.JTC").slice(5).toggle();
  $(this).text($(this).text() == 'View More' ? 'View Less' : 'View More');
 	
  }); 
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

