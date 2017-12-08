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
	
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<!-- Global CSS for the page and tiles -->
  		<link rel="stylesheet" href="css/main.css">
  		<!-- //Global CSS for the page and tiles -->
		<!---start-click-drop-down-menu---->
		<script src="js/jquery.min.js"></script>
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
		<!---//End-click-drop-down-menu---->
		<!-- source W3 Designs -->


</head>

<body>
  </div>
  </div>
<div class="header">
				<div class="wrap">
				<div class="logo">
					<a href="index.php"><img src="images/Brave Trave.png" title="Brave Travel" /></a>
										
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
		                <span class="loading"></span>
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
			 <div id="main" role="main">
			      <ul id="tiles">
			        <!-- These are our grid blocks -->
			        <li onclick="location.href='NYC.php';"><!--Arts _HRM.html-->
			        	<img src="images/NYC.png" width="250" height="250">
			        	<div class="post-info">
			        		<div class="post-basic-info">
				        		<h3><a href="#">New York City</a></h3>
				        		<span><a href="#"><label> </label>USA</a></span>
				        		<p>New York City comprises 5 boroughs sitting where the Hudson River meets the Atlantic Ocean. At its core is Manhattan, a densely populated borough that’s among the world’s major commercial, financial and cultural centers.</p>
			        		</div>
			        		<div class="post-info-rate-share">
			        			<div class="rateit">
			        				<span> </span>
			        			</div>
			        			<div class="post-share">
			        				<span> </span>
			        			</div>
			        			<div class="clear"> </div>
			        		</div>
			        	</div>
			        </li>
			        <li onclick="location.href='London.php';"><!--Business.html-->
			        	<img src="images/London.png" width="250" height="250">
						<div class="post-info">
			        		<div class="post-basic-info">
				        		<h3><a href="#">London</a></h3>
				        		<span><a href="#"><label> </label>Capital of England</a></span>
				        		<p>
				        			London, the capital of England and the United Kingdom, is a 21st-century city with history stretching back to Roman times. At its centre stand the imposing Houses of Parliament, the iconic "Big Ben" clock tower and Westminster Abbey.
				        		</p>	</div>
			        		<div class="post-info-rate-share">
			        			<div class="rateit">
			        				<span> </span>
			        			</div>
			        			<div class="post-share">
			        				<span> </span>
			        			</div>
			        			<div class="clear"> </div>
			        		</div
			        	</div>
					</li>
			        <li onclick="location.href='Moscow.php';"><!---Cloud_Computing.html-->
			        	<img src="images/Moscow.png" width="250" height="250">
			        	<div class="post-info">
			        		<div class="post-basic-info">
			        		<h3><a href="#">Moscow</a></h3>
			        		<span><a href="#"><label> </label>Capital of Russia</a></span>
			        		<p> Moscow, on the Moskva River in western Russia, is the nation’s cosmopolitan capital. In its historic core is the Kremlin, a complex that’s home to the president and tsarist treasures in the Armoury. Outside its walls is Red Square.</p>
			        		</div>
			        		<div class="post-info-rate-share">
			        			<div class="rateit">
			        				<span> </span>
			        			</div>
			        			<div class="post-share">
			        				<span> </span>
			        			</div>
			        			<div class="clear"> </div>
			        		</div>
			        	</div>
			        </li>
			        <li onclick="location.href='Paris.php';"><!---MasterBA.html-->
			        	<img src="images/Paris.png" width="250" height="250">
			        	<div class="post-info">
			        		<div class="post-basic-info">
				        		<h3><a href="#">Paris</a></h3>
				        		<span><a href="#"><label> </label>Capital of France</a></span>
								<p>Paris, France's capital, is a major European city and a global center for art, fashion, gastronomy and culture. Its 19th-century cityscape is crisscrossed by wide boulevards and the River Seine.</p>
				        		</div>
			        		<div class="post-info-rate-share">
			        			<div class="rateit">
			        				<span> </span>
			        			</div>
			        			<div class="post-share">
			        				<span> </span>
			        			</div>
			        			<div class="clear"> </div>
			        		</div>
			        	</div>
			        </li>
			        <!----//-->
			        <li onclick="location.href='Rome.php';"> <!---DataAnalytic.html--->
			        	<img src="images/Rome.png" width="250" height="250">
			        	<div class="post-info">
			        		<div class="post-basic-info">
				        		<h3><a href="#">Rome</a></h3>
				        		<span><a href="#"><label> </label>Capital of Italy</a></span>
								<p>Rome, Italy’s capital, is a sprawling, cosmopolitan city with nearly 3,000 years of globally influential art, architecture and culture on display. Ancient ruins such as the Forum and the Colosseum evoke the power of the former Roman Empire. Vatican City</p>
			        		</div>
			        		<div class="post-info-rate-share">
			        			<div class="rateit">
			        				<span> </span>
			        			</div>
			        			<div class="post-share">
			        				<span> </span>
			        			</div>
			        			<div class="clear"> </div>
			        		</div>
			        	</div>
			        </li>
			     <li onclick="location.href='Toronto.php';"> <!---NEW.html--->
			        	<img src="images/Toronto.png" width="250" height="250">
			        	<div class="post-info">
			        		<div class="post-basic-info">
				        		<h3><a href="#">Toronto</a></h3>
				        		<span><a href="#"><label> </label>Capital of Canada</a></span>
								<p>Toronto, the capital of the province of Ontario, is a major Canadian city along Lake Ontario’s northwestern shore. It's a dynamic metropolis with a core of soaring skyscrapers</p>
			        		</div>
			        		<div class="post-info-rate-share">
			        			<div class="rateit">
			        				<span> </span>
			        			</div>
			        			<div class="post-share">
			        				<span> </span>
			        			</div>
			        			<div class="clear"> </div>
			        		</div>
			        	</div>
			        </li>
			        <li onclick="location.href='Sydney.php';"> <!---early-childhood-education.html--->
			        	<img src="images/Sydney.png" width="250" height="250">
			        	<div class="post-info">
			        		<div class="post-basic-info">
				        		<h3><a href="#">Sydney</a></h3>
				        		<span><a href="#"><label> </label> Australia </a></span>
				        		<p>Sydney, capital of New South Wales and one of Australia's largest cities, is best known for its harbourfront Sydney Opera House, with a distinctive sail-like design. Massive Darling Harbour and the smaller Circular Quay port are hubs of waterside life.</p>
			        		</div>
			        		<div class="post-info-rate-share">
			        			<div class="rateit">
			        				<span> </span>
			        			</div>
			        			<div class="post-share">
			        				<span> </span>
			        			</div>
			        			<div class="clear"> </div>
			        		</div>
			        	</div>
			        </li>
			        <li onclick="location.href='Dubai.php';"> <!---early-childhood-education.html--->
			        	<img src="images/Dubai.png" width="250" height="250">
			        	<div class="post-info">
			        		<div class="post-basic-info">
				        		<h3><a href="#">Dubai</a></h3>
				        		<span><a href="#"><label> </label> United Arab Emirates </a></span>
				        		<p>Dubai is a city and emirate in the United Arab Emirates known for luxury shopping, ultramodern architecture and a lively nightlife scene. Burj Khalifa, an 830m-tall tower, dominates the skyscraper-filled skyline</p>
			        		</div>
			        		<div class="post-info-rate-share">
			        			<div class="rateit">
			        				<span> </span>
			        			</div>
			        			<div class="post-share">
			        				<span> </span>
			        			</div>
			        			<div class="clear"> </div>
			        		</div>
			        	</div>
			        </li>
			      </ul>
			    </div>
			</div>
		</div>
		<!---//End-content---->
		<!----wookmark-scripts---->
		  <script src="js/jquery.imagesloaded.js"></script>
		  <script src="js/jquery.wookmark.js"></script>
		  <script type="text/javascript">
		    (function ($){
		      var $tiles = $('#tiles'),
		          $handler = $('li', $tiles),
		          $main = $('#main'),
		          $window = $(window),
		          $document = $(document),
		          options = {
		            autoResize: true, // This will auto-update the layout when the browser window is resized.
		            container: $main, // Optional, used for some extra CSS styling
		            offset: 20, // Optional, the distance between grid items
		            itemWidth:280 // Optional, the width of a grid item
		          };
		      /**
		       * Reinitializes the wookmark handler after all images have loaded
		       */
		      function applyLayout() {
		        $tiles.imagesLoaded(function() {
		          // Destroy the old handler
		          if ($handler.wookmarkInstance) {
		            $handler.wookmarkInstance.clear();
		          }
		
		          // Create a new layout handler.
		          $handler = $('li', $tiles);
		          $handler.wookmark(options);
		        });
		      }
		      /**
		       * When scrolled all the way to the bottom, add more tiles
		       */
		      function onScroll() {
		        // Check if we're within 100 pixels of the bottom edge of the broser window.
		        var winHeight = window.innerHeight ? window.innerHeight : $window.height(), // iphone fix
		            closeToBottom = ($window.scrollTop() + winHeight > $document.height() - 100);
		
		        if (closeToBottom) {
		          // Get the first then items from the grid, clone them, and add them to the bottom of the grid
		          var $items = $('li', $tiles),
		              $firstTen = $items.slice(0, 10);
		          $tiles.append($firstTen.clone());
		
		          applyLayout();
		        }
		      };
		
		      // Call the layout function for the first time
		      applyLayout();
		
		      // Capture scroll event.
		      $window.bind('scroll.wookmark', onScroll);
		    })(jQuery);
		  </script>
		<!----//wookmark-scripts---->
		<!--//www.w3designs.com-->
 
		<!----start-footer--->
		<div class="footer">
			<p></p>
		</div>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwShNIRbQ1o9eevmGD9loCcXtGkcLxZIk&libraries=places&callback=search"></script>
		