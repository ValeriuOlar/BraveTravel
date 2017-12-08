<!DOCTYPE html>
<html lang="en">
<head>
		<title>Brave Travel</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="images/Brave Trave.png" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
					<script type="text/javascript">
		  function search(){
		    var input = document.getElementById("place");
		    var autocomplete = new google.maps.places.Autocomplete(input);
		  }
		</script>
		<!---start-click-drop-down-menu---->
		<script src="js/jquery.min.js"></script>
		<script type="text/javascript" src="script.js"></script>
        <!----start-dropdown-->
         <script type="text/javascript">
			var $ = jQuery.noConflict();
				$(function() {
					$('#activator').click(function(){
						$('#box').animate({'top':'0px'},500);
					});
					$('#boxclose').click(function(){
					$('#box').animate({'top':'-700px'},500);
					});
				});
				$(document).ready(function(){
				//Hide (Collapse) the toggle containers on load
				$(".toggle_container").hide(); 
				//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
				$(".trigger").click(function(){
					$(this).toggleClass("active").next().slideToggle("slow");
						return false; //Prevent the browser jump to the link anchor
				});
									
			});
		</script>
        <!----//End-dropdown--->
	</head>
	<body>
		<!---start-wrap---->
			<!---start-header---->
			<div class="header">
				<div class="wrap">
				<div class="logo">
					<a href="index.php"><img src="images/Brave Trave.png" title="Brave Trave" /></a>
				</div>
				<div class="nav-icon">
					 <a href="#" class="right_bt" id="activator"><span> </span> </a>
				</div>
				 <div class="box" id="box">
					 <div class="box_content">        					                         
						<div class="box_content_center">
						 	<div class="form_content">
								<div class="menu_box_list">
									<ul>
										<li><a href="index.php"><span>Home</span></a></li>
										<li><a href="about.php"><span>About</span></a></li>
										<li><a href="trips.php"><span>Trips</span></a></li>
										<li><a href="contact.php"><span>Contact</span></a></li>
										<div class="clear"> </div>
									</ul>
								</div>
								<a class="boxclose" id="boxclose"> <span> </span></a>
							</div>                                  
						</div> 	
					</div> 
				</div>       	  
					<div class="top-searchbar">
					<form action="viewPlace.php" method="GET" target="blank">
			         <input id="place" type="text" name="place" class="search-query form-control" placeholder="Search Destination" /><input type="submit" value="" />
			            
			              <span class=" loading"></span>
			            </button>
	                </form>
	   
				</div>
				<div class="userinfo">
					<div class="user">
						<ul>
							<li><a href="index2.php"><img src="images/user-pic.png" title="user-name" /><span>User Login</span></a></li>
						</ul>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		<!---//End-header---->
		<!---start-content---->
		<div class="content">
			<div class="wrap">
			<div class="single-page">
							<div class="single-page-artical">
								<div class="artical-content">
									<img src="images/Dubai.png" title="banner1">
									<img src="images/Dubai.png" title="banner2">
									<img src="images/Dubai.png" title="banner3">
									<img src="images/Dubai.png" title="banner4">
									<h1>London, the capital of England and the United Kingdom<a href="#"></a></h1>
										<p>Is a 21st-century city with history stretching back to Roman times. At its centre stand the imposing Houses of Parliament, the iconic ‘Big Ben’ clock tower and Westminster Abbey, site of British monarch coronations. Across the Thames River, the London Eye observation wheel provides panoramic views of the South Bank cultural complex, and the entire city.</p>

									<h3> Time Travel</h3>
									<p> Immersed in history, London's rich seams of eye-opening antiquity are everywhere. The city's buildings are striking milestones in a unique and beguiling biography, and a great many of them – the Tower of London, Westminster Abbey, Big Ben – are instantly recognisable landmarks. There’s more than enough innovation (the Shard, the Tate Modern extension, the planned Garden Bridge) to put a crackle in the air, but it never drowns out London’s seasoned, centuries-old narrative. Architectural grandeur rises up all around you in the West End, ancient remains dot the City and charming pubs punctuate the historic quarters, leafy suburbs and river banks. Take your pick.</p>
									<h2>Art & Culture</h2>
									<p>A tireless innovator of art and culture, London is a city of ideas and the imagination. Londoners have always been fiercely independent thinkers (and critics), but until not so long ago people were suspicious of anything they considered avant-garde. That’s in the past now, and the city’s creative milieu is streaked with left-field attitude, whether it's theatrical innovation, contemporary art, pioneering music, writing, poetry, architecture or design. Food is another creative arena that has become a tireless obsession in certain circles.
Diversity</p>
									
									
									<p class="para2"></p> 
								    </div>
								    <div class="artical-links">
		  						 	<ul>

		  						 	</ul>
		  						 </div>
		  						<div class="share-artical">
		  						 	<ul>
		  						 		<li><a href="#"><img src="images/facebooks.png" title="facebook">Facebook</a></li>
		  						 		<li><a href="#"><img src="images/twiter.png" title="Twitter">Twiiter</a></li>
		  						 		<li><a href="#"><img src="images/google+.png" title="google+">Google+</a></li>
		  						 		<li><a href="#"><img src="images/rss.png" title="rss">Rss</a></li>
		  						 	</ul>
		  						 </div>
		  						 <div class="clear"> </div>
							</div>
							<!---start-comments-section-->
							<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwShNIRbQ1o9eevmGD9loCcXtGkcLxZIk&libraries=places&callback=search"></script>
							<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

<?php
include('footer.php');
?>


</body>
</html>