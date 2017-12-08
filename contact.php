

<!DOCTYPE html>
<html lang="en">
<head>
		<title>Brave Travel</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link href="css/main.css" rel='stylesheet' type='text/css' />
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
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

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
										<li><a href="aboutus.php"><span>About</span></a></li>
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
<?php
$name = "Contact Us";
include('headertest.php');
 ?>

<div class="container">
    <br> <br> <br> <br> <br> <br> <br> <br> <br>
<form action="processcontact.php" method="POST" class="form-horizontal">

    <div class="form-group form-group-sm has-success has-feedback">
        <label for="customerName" id="name-label" class="control-label">Name</label>
        <input type="text" class="form-control" name="customerName" placeholder="Enter your name" required="">
    </div>

    <div class="form-group form-group-sm has-success has-feedback">
        <label for="customerEmail" id="email-label" class="control-label">Email</label>
        <input type="email" class="form-control input-sm" name="customerEmail" placeholder="Enter your email" required="">
    </div>

    <div class="form-group form-group-sm has-success has-feedback">
        <label for="CustomerQuery" id="comments" class="control-label">Query</label>
        <textarea name="CustomerQuery" class="form-control" placeholder="Enter your query here..." required=""></textarea>
    </div>
    <button type="submit" class="i-btn ui-corner-all ui-shadow ui-mini" >Submit</button>
</form>
</div>
 <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 

<?php
include('footer.php');
?>

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

</body>
</html>