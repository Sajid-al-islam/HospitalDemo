<?php

    require_once('connection.php');
	class User extends Connection{
		public function login($data){
			$pass = md5($data['pass']);
			$sql = "SELECT * FROM tbl_users WHERE email='$data[email]' and pass='$pass'";
			//echo $sql;
			if(mysqli_query($this->connection, $sql)){
				$result =mysqli_query($this->connection, $sql);
				if($result->num_rows > 0){
					$uData = mysqli_fetch_assoc($result);
					$_SESSION['email'] = $uData['email'];
					$_SESSION['pass'] = $uData['pass'];
					$_SESSION['id'] = $uData['id'];
					HEADER("Location:admin/index.php");
				}else{
					HEADER("Location:login.php");	
				}
			}else{
				die("Error".mysqli_connect_error($this->connection));
			}
		}
		public function logout(){
			session_unset();
			HEADER("Location:login.php");	
		}
	}