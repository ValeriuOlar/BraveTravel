<?php
include('conn.php');
session_start();

  if ($_SESSION['loggedin'] !== 1) {
      header("Location: index.php");
    }


include('header.php');
?>

<div data-role="page">
  <div data-role="header">
    <div data-role="navbar"><!-- /navbar -->
              <ul>
                  <li><a href="clients.php">Products</a></li>
                  <li><a href="myOrders.php?id=<?php echo $_SESSION['userid']; ?>" class="ui-btn-active">My Orders</a></li>
                  <li><a href="mydetails.php?id=<?php echo $_SESSION['userid']; ?>">My Details</a></li>
                  <li><a href="logout.php">Logout</a></li>
              </ul>
    </div><!-- /navbar -->
    <div>
            <?php if(isset($_SESSION['cart'])) {
                    $items = count($_SESSION['cart']); 
                    echo "<a href='mycart.php'>My Cart <span class='glyphicon glyphicon-shopping-cart'> </span><span class='badge'> ". $items . "</span></a><br>";
                  } 
            ?>
    </div>
  </div> 

<?php

    $userid = $_GET['id'];

    try {

        $DB_TYPE = 'mysql'; //Type of database<br>
        $DB_HOST = 'localhost'; //Host name<br>
        $DB_USER = 'root'; //Host Username<br>
        $DB_PASS = ''; //Host Password<br>
        $DB_NAME = 'webdev'; //Database name<br><br>

        $connStr = "mysql:host=".$DB_HOST.";port=3306;dbname=".$DB_NAME; 
        $DBH = new PDO($connStr,$DB_USER,$DB_PASS);
        $sth = $DBH->prepare("select * from orders where user= :userid");
        $sth->bindValue(':userid', $userid);
        $sth->execute();

         } catch(PDOException $e) {echo $e;}
         ?>
            
              <table class="table table-hover">
               	<tr>
                  <th>ID</th>
                  <th>Date</th>
                  <th>Status</th>
                </tr>
            <?php 

              while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
                
                  echo '<tr>';
                  echo '<td>' . $row['id'] . '</td>';
                  echo '<td>' . $row['order_date'] . '</td>';
                  echo '<td>' . ($row['status'] == 0 ? "Not Shipped" : "Shipped") . '</td>';
                  echo "<td><a href='viewOrder.php?id=" . $row['id'] . "' class='btn btn-warning'>Details</a></td>";
                  echo '</tr>';
        		}

            ?>
              </table>
    <a href="clients.php" class="ui-btn ui-btn-inline">Back</a>
    </div>     
</body>
</html>

