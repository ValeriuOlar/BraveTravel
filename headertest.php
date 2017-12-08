<!DOCTYPE html>
<html lang='en'>
<head>
    <title><?php echo $name ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/areasOfInterest.css" type="text/css" />

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src ="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
    <script src="assets/js/jquery-3.2.1.min.js"</script>

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





</head>
<body>
  <div class="container">
  <h1 id="pageTitle"><?php echo $name ?></h1>
