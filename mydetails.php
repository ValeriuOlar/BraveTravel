<?php 
session_start();
include ('conn.php');
  if ($_SESSION['loggedin'] !== 1) {
      header("Location: index.php");
    }
include('header.php');
?>

<div data-role="header">
  <div data-role="navbar">
        <ul>
          <li><a href="clients.php">Products</a></li>
          <li><a href="myOrders.php?id=<?php echo $_SESSION['userid']; ?>">My Orders</a></li>
          <li><a href="mydetails.php?id=<?php echo $_SESSION['userid']; ?>" class="ui-btn-active">My Details</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
  </div><!-- /navbar -->
<?php
try {
        $DBH = new PDO($connStr,$DB_USER,$DB_PASS);
        $sql = "select * from users where id=" . $_GET['id'];
          $sth = $DBH->prepare($sql);
          $sth->execute();

        } catch(PDOException $e) {echo $e;}

        $row = $sth->fetch(PDO::FETCH_ASSOC);
?>
<div data-role="content">
<form action="updateUser.php" id="register-form" class="form-horizontal" role="form" method="post">
            <div class="form-group">
              <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
            </div>
            <div class="form-group">
              <label  class="col-sm-2 control-label" for="fname"> First Name</label>
              <div class="col-sm-10">
              <input id="fname" type="text" class="form-control" name="fname" placeholder="First Name" value="<?php echo $row['fname']; ?>"/>
              </div>
            </div>
            <div class="form-group">
              <label  class="col-sm-2 control-label" for="lname"> Last Name</label>
              <div class="col-sm-10">
                <input id="lname" type="text" class="form-control" name="lname" placeholder="Last Name" value="<?php echo $row['lname']; ?>"/>
              </div>
            </div>
            <div class="form-group">
              <label  class="col-sm-2 control-label" for="email">Email</label>
              <div class="col-sm-10">
                <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $row['email']; ?>"/>
              </div>
            </div>
            <div class="form-group">
              <label  class="col-sm-2 control-label" for="phone">Telefone</label>
              <div class="col-sm-10">
                <input id="phone" type="text" class="form-control" name="phone" placeholder="Phone" value="<?php echo $row['phone']; ?>"/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="address">Address</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="text" name="address" rows="2" placeholder="Address" maxlength="500"><?php echo $row['address']; ?></textarea>
                <h6 class="pull-right" id="count_address"></h6>
              </div>
            </div>
            <div class="form-group">
              <label  class="col-sm-2 control-label" for="username">Username</label>
              <div class="col-sm-10">
                <input id="username" type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $row['username']; ?>"/>
              </div>
            </div>
            <div class="form-group">
              <label  class="col-sm-2 control-label" for="password">Password</label>
              <div class="col-sm-10">
                <input id="password" type="password" class="form-control" name="password" placeholder="password" value="<?php echo $row['password']; ?>"/>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Enviar</button>
              </div>
            </div>
            <div id="message" class="form-group">
              <div class="col-sm-offset-2 col-sm-8 help-block" id="form-messages"></div>
            </div>

          </form>
          <button id="cancelform" onclick="window.location='clients.php'" class="ui-btn ui-corner-all ui-mini">Back</button> 
          </div>
          <script src="js.js"></script> 
          </body>
          </html>