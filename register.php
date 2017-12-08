<?php
require ('conn.php');

if(isset($_POST['fname'])) {

			$data = array(
				'fname' => $_POST['fname'],
				'lname' => $_POST['lname'],
				'email' => $_POST['email'],
				'phone' => $_POST['phone'],
				'address' => $_POST['address'],
				'username' => $_POST['username'],
				'password' => $_POST['password'],
				'type' => 1

				);

			try {
				$DBH = new PDO($connStr,$DB_USER,$DB_PASS);
    			$sql = $DBH->prepare("INSERT INTO users (fname, lname, email, address, phone, username, password, type) VALUES (:fname, :lname, :email, :address, :phone, :username, :password, :type)");
    			$sql->bindValue(':fname', $data['fname']);
    			$sql->bindValue(':lname', $data['lname']);
    			$sql->bindValue(':email', $data['email']);
    			$sql->bindValue(':address', $data['address']);
    			$sql->bindValue(':phone', $data['phone']);
    			$sql->bindValue(':username', $data['username']);
    			$sql->bindValue(':password', $data['password']);
    			$sql->bindValue(':type', $data['type']);
    			$sql->execute();
    			echo "New record created successfully";
    			} catch(PDOException $e)    {
    				echo $sql . "<br>" . $e->getMessage();
    		}

    		header("Location: index.php");
			

		} else {
			echo "error";
		}

?>