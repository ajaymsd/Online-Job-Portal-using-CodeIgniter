<!--Copyright-->
<div class="copyright">
  <div class="container">
    <div class="bttxt">Copyright &copy; 2023 Your Company Name. All Rights Reserved. Design by: <a href="http://graphicriver.net/user/ecreativesol" target="_blank">AstroWebSolution</a></div>
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

<!-- this is for make the password visible -->
<script>
$(document).ready(function(){
    const password = $('#password') ;
    $('#eye').click(function(){
        if(password.prop('type') == 'password'){
            $(this).addClass('fa-eye-slash');
            password.attr('type','text')
        }
        else {
            $(this).removeClass('fa-eye-slash');
            password.attr('type','password');
        }
    })
})
</script>
