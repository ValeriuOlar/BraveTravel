<?php
$name = "Areas of Interest";
include('headertest.php');
 ?>


  <p><img src="assets/img/430x270_placeholder.gif" alt="430 x 270 placeholder image" class="placerHolder"></p>
  <p><img src="assets/img/430x270_placeholder.gif" alt="430 x 270 placeholder image" class="placerHolder"></p>
  <p><img src="assets/img/430x270_placeholder.gif" alt="430 x 270 placeholder image" class="placerHolder"></p>
  <p><img src="assets/img/430x270_placeholder.gif" alt="430 x 270 placeholder image" class="placerHolder"></p>
  <p><img src="assets/img/430x270_placeholder.gif" alt="430 x 270 placeholder image" class="placerHolder"></p>
  <p><img src="assets/img/430x270_placeholder.gif" alt="430 x 270 placeholder image" class="placerHolder"></p>
  <p><img src="assets/img/430x270_placeholder.gif" alt="430 x 270 placeholder image" class="placerHolder"></p>
  <p><img src="assets/img/430x270_placeholder.gif" alt="430 x 270 placeholder image" class="placerHolder"></p>

 <div id="float" class="float"><img src="assets/img/430x270_placeholder.gif" alt="430 x 270 placeholder image" class="placerHolder"></div>

 <script type="text/javascript">
 $(document).ready(function ()
 {
 var defaultOffset = 50;
 function floatDiv()
 {
 var offsetTop = $(document).scrollTop() + defaultOffset;
 $('#float').animate({top: offsetTop +
 "px"},{duration:500,queue:false});
 }
 $(window).scroll(floatDiv);
 floatDiv();
 });
 </script>

 <?php
 include('footer.php');
 ?>
