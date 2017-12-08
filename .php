<!DOCTYPE html>
<html lang="en">
<head>
  <title>Brave Travel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body background="assets/img/background.jpg">
  <div class="container">
    <div class="row">
      <div id="custom-search-input"  style="position: absolute; left:15%; top: 40%">
        <label id="search-bar-title" for="place">Where do you want to go?</label>
        <div class="input-group col-sm-10">
          <form action="viewPlace.php" method="GET">
          <input id="place" type="text" name="place" class="search-query form-control" placeholder="Search" />
          <span class="input-group-btn">
            <button id="search" class="btn btn-danger" type="submit">
              <span class=" glyphicon glyphicon-search"></span>
            </button>
          </span>
        </form>
        </div>
        <div id="footer">
          <div class="">
              <div class="list-group list-group-horizontal">
                  <a href="contact.php" class="home-page">Contact Us | </a> 
                  <a href="index2.php" class="home-page">Login | </a>
                  <span class="home-page">&copy; <?php echo date("Y"); ?></span>
              </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  </div>
<script type="text/javascript">
  function search(){
    var input = document.getElementById("place");
    var autocomplete = new google.maps.places.Autocomplete(input);
  }
</script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwShNIRbQ1o9eevmGD9loCcXtGkcLxZIk&libraries=places&callback=search"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
