<?php
require_once 'core/init.php';

if($_POST){
  $username = $_POST['username'];
  $password = $_POST['password'];

  try {
    $user = DB::getInstance()->query("SELECT * 
                                      FROM users 
                                      WHERE username= :username and password= :password 
                                      LIMIT 1", 
                                      $username, $password);
   var_dump($user);

   if(!empty($user)){
     $_SESSION['loggedin'] = true;
     $_SESSION['username'] = $user->results()[0]->username;
   }else {
    $_SESSION['loggedin'] = false;
  }

  if ($user->count() > 0){

    echo 'Code ran.....<br>';
          //getting values from the row            
    $id = $user->results()[0]->id;
    $type = $user->results()[0]->account_type;

    $_SESSION['userid'] = $id;
    $_SESSION['loggedin'] = 1;
  }
} catch(PDOException $e) {echo $e;}
}

?>