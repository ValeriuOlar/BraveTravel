<?php 
include('conn.php');  
include('header.php');

?>


  <div>

    <div data-role="header">
        
      </div>
        <div data-role="main" class="ui-content">
          <form id="register-form" method="post" action="register.php">
            <div class="form-group">
              <label  class="col-sm-2 control-label" for="fname"> First Name</label>
              <div class="col-sm-10">
                <input id="text-basic" type="text" class="form-control" name="fname" placeholder="First Name"/>
              </div>
            </div>
            <div class="form-group">
              <label  class="col-sm-2 control-label" for="lname"> Last Name</label>
              <div class="col-sm-10">
                <input id="lname" type="text" class="form-control" name="lname" placeholder="Last Name"/>
              </div>
            </div>
            <div class="form-group">
              <label  class="col-sm-2 control-label" for="email">Email</label>
              <div class="col-sm-10">
                <input id="email" type="email" class="form-control" name="email" placeholder="Email"/>
              </div>
            </div>
            <div class="form-group">
              <label  class="col-sm-2 control-label" for="phone">Telefone</label>
              <div class="col-sm-10">
                <input id="phone" type="text" class="form-control" name="phone" placeholder="Phone"/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="address">Address</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="text" name="address" rows="2" placeholder="Address" maxlength="500"></textarea>
                <div class="pull-right" id="count_address"></div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="username">Username</label>
              <div class="col-sm-10">
                <input id="username" type="text" class="form-control" name="username" placeholder="Username"/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="password">Password</label>
              <div class="col-sm-10">
                <input id="password" type="password" class="form-control" name="password" placeholder="password"/>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="ui-btn ui-corner-all ui-mini">Enviar</button>
              </div>
            </div>
            <div id="message" class="form-group">
              <div class="col-sm-offset-2 col-sm-8 help-block" id="form-messages"></div>
            </div>
          </form>
          <button id="cancelform" onclick="window.location='index.php'" class="ui-btn ui-corner-all ui-mini">Cancel</button>
          
        </div>
          
      </div>
      
      <script src="js.js"></script>      
</body>
</html>
