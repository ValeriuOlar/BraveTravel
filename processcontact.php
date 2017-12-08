<!DOCTYPE html>
<html lang="en">
  <head>
      <title>

      </title>
  <head>
    <body>

<!--Contact page data handling -->

<?php
  if(isset($_POST))
  {
    $name = $_POST["customerName"];
    $email = $_POST["customerEmail"];
    $queryText = $_POST["CustomerQuery"];
    $msg = "Query from " . $name . " :\n" . $queryText;
  }

 // Sending mail to BraveTravel
 mail("donal@localhost", "Customer query", $msg);

?>

    </body>
</html>
