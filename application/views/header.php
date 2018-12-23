	<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />-->
<meta name="viewport" content="initial-scale=1.0">
<meta name="keywords" content=" ">
<meta name="description" content="At Sewashram Health & Wellness Care, we believe in continuity of care. Our care team records every nuance when we treat you.">
<meta name="author" content="https://sevashramhospitalgzp.com/">
<meta name="distribution" content="global">
<meta name="language" content="english">
<meta name="revisit-after" content="3 days">
<meta name="content-type" content="text/html;">
<meta name="cache-control" content="public">
<meta name="rating" content="general">
<meta name="copyright" content="Sewashram Health & Wellness Care - FAMILY HEALTH EXPERTS HOME">
<meta name="generator 	" content="Dreamweaver">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<input type="hidden" name="getAllstrdatesforcloseit" id="getAllstrdatesforcloseit" value=""/><input type="hidden" name="holidayconst" id="holidayconst" value="//-"/>
<title>Home | Sewashram Health & Wellness Care</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/assets/outcss/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/assets/outcss/owl.theme.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/assets/css/bootstrap.min.3.1.1.css">
<link href="<?php echo base_url();?>assets/assets/css/admin.css" title="style" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/assets/css/animate.css" media="screen" />
<link href="<?php echo base_url();?>assets/assets/css/style.css" title="style" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/assets/css/dental.css" title="style" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/assets/css/menu.css" title="style" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/assets/css/webslidemenu.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/assets/outcss/jquery.bxslider.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/assets/css/neededcss.css" media="screen" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/assets/css/datepick.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/assets/outcss/responsiveslides.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/assets/css/tabs.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/assets/css/style-2.css">

<script src="<?php echo base_url();?>assets/assets/outjs/jq_recent.js"></script>
<script src="<?php echo base_url();?>assets/assets/js/bootstrap.min.3.1.1.js"></script>
<script src="<?php echo base_url();?>assets/assets/customjs/validate.js"></script>
<script src="<?php echo base_url();?>assets/assets/customjs/datepick.js"></script>
<script src="<?php echo base_url();?>assets/assets/customjs/timepicker.js"></script>
<script src="<?php echo base_url();?>assets/assets/outjs/responsiveslides.js"></script>
  <script src="<?php echo base_url();?>assets/assets/js/cbpFWTabs.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/outjs/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/assets/outjs/owl.carousel.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>assets/assets/js/webslidemenu.js"></script>	
<script>
 $(document).ready(function(){

   $("#myCarousel .carousel-inner").owlCarousel(
   {
	items :4,
        itemsDesktop : [870, 4],
        itemsDesktopSmall : [991, 3],
        itemsTablet : false,
        itemsMobile : [479, 2],
	  autoPlay : 6000,
	  autoplayTimeout:300,
		loop: true,
		pagination: true,
		dots: true,
		
		
});
 /* $('#tickercontent').mouseover(function(){
		 $('marquee').unwrap();
		
	}); */	
if ($(window).width()==768)
	{
		$('.pressBoxMargin').css({"width": "50%"});
		$('.pressBox').css({"height": "250px"});
		
		}
		
		
		else if ($(window).width()==1349)
	{
		$('.tabBox').css({"height": "220px"});
		
		
		}
		
		else if ($(window).width()==320)
	{

		$('.tabBox').css({"height": "auto", "width": "30%"});
		$('.tabImg').css({"display": "none"});
		$('.box2').css({"width": "30%", "margin-left": "0px"});
		$('.tabs ul li').css({"width": "30%", "float": "left" });
		$('.boxFont').css({"font-size": ".85"});
		$('.centerHead').css({"background-image": "none", "font-size":".8em", "text-transform": "none"});
		
		}
		
			$('.jb').click(function(){
			var s=$('.dn').text();
			$('#applyfor').val(s);
			$('#applyfor').prop("readonly", true);
		});
//$('.timer').countTo();
//$("#myCarousel .carousel-inner").owlCarousel();
$("#doctor_profile .carousel-inner3").owlCarousel({
	items :1,
        itemsDesktop : [991, 4],
        itemsDesktopSmall : [991, 2],
        itemsTablet : false,
        itemsMobile : [479, 1],
	  autoPlay : 6000,
	  autoplayTimeout:300,
		loop: true,
		pagination: false,
		dots: false,
	responsive:{
			0:{
				items:1,
				nav:true
			},
			320:{
				items:1,
				nav:false
			},
			1000:{
				items:1,
				nav:false,
				loop:true
			}
		}
		
		
});

$("#clients_testimonial .carousel-inner2").owlCarousel({
	items :1,
        itemsDesktop : [991, 4],
        itemsDesktopSmall : [991, 2],
        itemsTablet : false,
        itemsMobile : [479, 1],
	  autoPlay : 6000,
		loop: true,
		pagination: false,
		dots: false,
		responsiveClass:true,
});
///////////////////////////////////////////////////////////////////////////////

$("#clients_testimonial .carousel-inner2").owlCarousel({
	items :1,
        itemsDesktop : [991, 4],
        itemsDesktopSmall : [991, 2],
        itemsTablet : false,
        itemsMobile : [479, 1],
	  autoPlay : 6000,
		loop: true,
		pagination: false,
		dots: false,
		responsiveClass:true,
});

	$('.jb').click(function(){
			var s=$('.dn').text();
			$('#applyfor').val(s);
			$('#applyfor').prop("readonly", true);
		});
		
		$('.closeSlider').click(function(){
			$('#slideTwo').slideToggle('slow');
		
		});
 });
   // count to 100
   (function() {

				[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
					new CBPFWTabs( el );
				});

			})();
			    $(function () {

      // Slideshow 1
      $("#slideshowdata").responsiveSlides({
        auto: true,
        pager: true,
        //nav: true,
        speed: 500,
        maxwidth: 1920,
         timeout: 6000,
		pagerCustom:true,
      });
    });
	
	

</script> 
<!--<script src="https://www.sevashramhospitalgzp.com/assets/js/count-to.js"></script>-->
<script>


	
	function playvideo(){
//console.log('hi');
		var youtube = '<iframe width="" height="227" src="https://www.youtube.com/embed/hNtTyvHyVaM" frameborder="0" allowfullscreen></iframe>';
//console.log(youtube);
		$('#vdo_contener').html('');
		$('#vdo_contener').html(youtube);
		
	}
	
		function search_for(){
				var search = $('#search').val();
				 if($('#city').is(':checked') == true){
					window.location.href = 	"https://www.sevashramhospitalgzp.com/search/by-city/"+search.replace(/ /g,'-');
				 }
				 else if($('#center').is(':checked') == true){
					window.location.href = 	"https://www.sevashramhospitalgzp.com/search/by-centre/"+search.replace(/ /g,'-');
				 }else{
					  $('#search').val('');
					  $('#search').attr('placeholder','Choose city/centre');
				 }
			}
</script>

<style>

/*.rslides_tabs.rslides1_tabs {
    height: 0;
    position: relative;
    text-align: center;
	right:642px;
	top:3px
}

.rslides_tabs li {
    float: right;
    margin-left: 0;
    margin-right: 8px;
	list-style:none;
}*/

.rslides_tabs li {
    float: left;
    left: 253px;
    list-style: outside none none;
    margin-left: 414px;
    margin-right: -388px;
    position: relative;
}
.rslides_tabs{right:114px !important}
.rslides_tabs li a {
    background-color: #ccc;
    border-radius: 25px;
    display: block;
    font-size: 1px;
    height: 16px;
    width: 17px;
}
#search{font-size: 11px;}

*::before, *::after {
    box-sizing: border-box;
}
*::before, *::after {
    box-sizing: border-box;
}
/*.profile div {
    color: #000;
    font-family: "OpenSans";
    font-size: 15px;
    font-weight: normal;
    padding-top: 2px;
}*/
.doctorBox {
    height: 180px;
}
</style><!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
/* window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?3idTMkdAlryVSxp2HpVUcyZq9GHZWnMX";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script"); */
$(document).ready(function(){
	var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
if(isChrome == true){
	var strVar="";
strVar += "<marquee onmouseover=\"this.stop();\" onmouseout=\"this.start();makeOne();\" direction=\"left\" this.setAttribute('scrollamount', 0, 0);\" behavior=\"scroll\"><p class=\"scroll\" id=\"tickercontent\"><\/p><\/marquee>";

	$('#marquee_remover').html(strVar);
	
}else{
	
	var strVar="";
strVar += "<marquee onmouseout=\"this.setAttribute('scrollamount', 5, 0);\" onmouseover=\"this.setAttribute('scrollamount', 0, 0);\" scrollamount=\"5\">";
strVar += "						<p id=\"tickercontent\" class=\"scroll\"><\/p>";
strVar += "					<\/marquee>";
$('#marquee_remover').html(strVar);
}
	
});
function makeOne(){
	$('marquee').attr('scrollamount','1');
}
//alert(isChrome);
</script>

<!--End of Zopim Live Chat Script-->


<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','../connect.facebook.net/en_US/fbevents.js');
fbq('init', '382548828751662', {
em: 'insert_email_variable,'
});
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=382548828751662&amp;ev=PageView&amp;noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->

<!-- Linkedin Code -->
<script type="text/javascript">
_linkedin_data_partner_id = "34274";
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "../snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<!-- End Linkedin Pixel Code -->
</head>

<body>
    <header class="top">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<marquee  scrolldelay="120" behavior="alternate"  onmouseover="this.stop();" onmouseout="this.start();"> 
 
<p>
 
 welcome to sevashram hospital ghazipur.
 
  </p>
</marquee> 
				</div>
			</div>
		</div>
	</header>
	<input type="hidden" name="siteurl" value="https://www.sevashramhospitalgzp.com/" id="baseurl"/>
	<div class="">
		<div class="container">
			<div class="row">
				<div class="col-sm-2 text-center">
					<a href="index.html"><img src="<?php echo base_url();?>assets/assets/images/logo.png" width="187px" height="98px" class="logo"></a>
				</div>
				<div class="col-sm-10 text-left" style="margin-top:20px;">
                
                    <div class="col-sm-12 headerRow">
                    	<div class="col-sm-6 headerRow" id="loadonpageLoad">
                        </div>
                        
                        
                    	
                        
                     	<div class="col-sm-2 headerRow lMargin">
                        	<div id="getbtn">
                        
					</div>
					
                        <a href="<?php echo base_url();?>" target="_blank"><img src="<?php echo base_url();?>assets/assets/images/icons/head-btn4.jpg" width="128px" height="38px" class="img-responsive headerIcons"/></a>
					 <a href="#"><img src="<?php echo base_url();?>assets/assets/images/icons/head-btn1.jpg" width="128px" height="38px" class="img-responsive headerIcons"/></a>
                        <a href="#"><img src="<?php echo base_url();?>assets/assets/images/icons/head-btn2.jpg" width="128px" height="38px" class="img-responsive headerIcons"/></a>
                        <a href="#"><img src="<?php echo base_url();?>assets/assets/images/icons/head-btn3.jpg" width="128px" height="38px" class="img-responsive headerIcons"/></a>
<a href="#" target="_blank"><img src="<?php echo base_url();?>assets/assets/images/icons/head-btn5.jpg" width="265px" height="38px" class="img-responsive headerIcons nBr"/></a>
						                         <div class="logeduser">
							


						</div>
					
						</div>
                       
                       
                        
                    </div>
                    
                     <div class="col-sm-12">
                    </div>
					
				</div>
			</div>
			
			<div class="row">
				<div class="container">
					<div class="wsmenucontainer clearfix">
					  <div class="wsmenucontent overlapblackbg"></div>
					  <div class="wsmenuexpandermain slideRight">
							<a id="navToggle" class="animated-arrow slideLeft"><span></span></a>
					  </div>
					  
					<div class="header-content bigmegamenu clearfix">
                      
					  
					  
	
	<nav class="wsmenu slideLeft clearfix" >
                    <ul class="mobile-sub wsmenu-list">
                      <li><a href="<?php echo base_url();?>">Home</a></li>
                      
                      
                      
                      
                       <li><a href="<?php echo base_url();?>index.php/welcome/about">About Us</a>
                        
                      </li>
                      
                      
                      <li><a href="<?php echo base_url();?>index.php/welcome/service">Services</a>
                        
                      </li>
                    <li><a href="<?php echo base_url();?>index.php/welcome/treatment">Treatment</a></li>
                    <li><a href="<?php echo base_url();?>index.php/welcome/vision">Vision & Mission</a></li>
                    <li><a href="#">Product</a></li>
                    <li><a href="<?php echo base_url();?>index.php/welcome/gallery">Gallery</a></li>
					  <li><a href="<?php echo base_url();?>index.php/welcome/career">Career</a></li>
					  
                      <li><a href="<?php echo base_url();?>index.php/welcome/contactUs">Contact Us</a> </li>
                    </ul>
                  </nav>					  
					  <!--<div style="position: fixed; z-index: 1000; width: 117px; height: 67px; bottom: 15px; left: 15px; margin-left: -58px;"><a href="#" onClick="window.open('https://www.sitelock.com/verify.php?site=sevashramhospitalgzp.com','SiteLock','width=600,height=600,left=160,top=170');" ><img class="img-responsive" alt="SiteLock" title="SiteLock" src="//shield.sitelock.com/shield/sevashramhospitalgzp.com" /></a></div>-->
					  
					  
                </div>
				</div>
					
					
					
				</div>
			</div>
            
            
			
		</div>
	</div>
	
	<script>
	$(document).ready(function(){
		//var url      = window.location.href;
		//alert(url);
				//window.location.href = url;
				$('#tickercontent').load('https://www.sevashramhospitalgzp.com/login/tickermanegment');
		
				 	$.ajax({
		  url: 'https://www.sevashramhospitalgzp.com/login/emptyticker',
   type: "POST",
   dataType: "text",
  cache: false,
  data: { ticker:'emptycheck' },
  success: function(html){
	  if(html == 'hide'){
		  
	  }
  }
});

$('marquee').mouseover(function(){
	//alert('test');
	 $('marquee').attr('scrollamount',0,0);
	
})
		
	})
	
	function get_site_viewr_count(tickerID,ip){
					 	$.ajax({
		  url: 'https://www.sevashramhospitalgzp.com/login/push-site-viewer',
   type: "POST",
   dataType: "text",
  cache: false,
  data: { ticker:'1',tickerID:tickerID,ip:ip},
  success: function(html){
	console.log(html);
  }
});
	}
	
	function get_submenu(menuid){
		$('#'+menuid).toggle('slow');
		
	}
	</script>
<style>
.tickerslines {
    color: #000;
}
#loadonpageLoad > a {
    font-size: 15px !important;
}
</style>
		<div class="lefticon">
		<div class="row">
					 <div class="col-md-12 col-xs-12">
				<a href="<?php echo base_url();?>AdminPanel/"><img src="<?php echo base_url();?>assets/assets/images/icons/book.png" width="80" height="100"/></a>
			</div>
			<div class="col-md-12 col-xs-12">
				<a href="<?php echo base_url();?>index.php/welcome/enquiry"><img src="<?php echo base_url();?>assets/assets/images/icons/check.png" width="80" height="100"/></a>
			</div>
           
		
 
            
           <!-- <div class="col-md-12 col-xs-12">
				<a href="#" onClick="window.open('https://www.sitelock.com/verify.php?site=sevashramhospitalgzp.com','SiteLock','width=600,height=600,left=160,top=170');"><img class="img-responsive" alt="SiteLock" title="SiteLock" src="//shield.sitelock.com/shield/sevashramhospitalgzp.com" /></a>
			</div>-->
            
            
            
            
            
            
            
					</div>
	</div>
	
	<div class="righticon">
		<div class="text-right">
			<div class="icon">
				<a href="https://www.facebook.com/Sevashram-Health-Wellness-Care-1747216902018906/" target="_blank">
				<img src="<?php echo base_url();?>assets/assets/images/icons/fb.png" width="30" height="34"></a>
			</div>
			<div class="icon">
				<a href="https://twitter.com/?request_context=signup" target="_blank">
				<img src="<?php echo base_url();?>assets/assets/images/icons/tw.png" width="30" height="34"></a>
			</div>
			<div class="icon">
				<a href="https://www.linkedin.com/in/ashish-singh-3a857512" target="_blank">
				<img src="<?php echo base_url();?>assets/assets/images/icons/in.png" width="30" height="34"></a>
			</div>
			<div class="icon">
				<a href="#"><img src="<?php echo base_url();?>assets/assets/images/icons/yt.png" width="30" height="34"></a>
			</div>
		<!--	<div class="icon">
				<a href="#"><img src="https://www.sevashramhospitalgzp.com/assets/images/icons/gp.png" width="30" height="34"></a>
			</div>-->
		</div>
	</div><script>
/************************Statrt****************/
/*
New Code Updated offer page pop-up
Change By:SumitR
Date:18/09/2016
Description:Variable to catch the pop-up status
*/
var cookie_value;
/************************End****************/

   $(document).ready(function(){

	   $('#doctor_profile_box').load('Healthspring/getmydoctor.html');

	   $( 'center p:empty' ).remove();

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 $('.rslides_tabs li').css('float','left');
 $('.rslides_tabs li').css('left','-139px');
  $('.rslides_tabs li').css('list-style','none');
  $('.rslides_tabs li').css('margin-left','390px');
    $('.rslides_tabs li').css('margin-right','-383px');
     $('.rslides_tabs li').css('position','relative');
}

   })

 </script>
 