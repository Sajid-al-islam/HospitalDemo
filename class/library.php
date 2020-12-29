<?php
date_default_timezone_set('Asia/Dhaka');
require_once( 'connection.php');
	class Library extends Connection{

		public function addDoc($data,$img){
			$sql = "insert into tbl_doctor (name,degree,phone,email,visit_time,visit,imgUrl) values ('$data[name]','$data[degree]','$data[phone]','$data[email]','$data[visit_time]','$data[visit]','$img')";
			//echo $sql;
			if(mysqli_query($this->connection, $sql)){

				// $message = "Data Inserted Successfully";
				// return $message;
				HEADER("Location:viewDoctor.php");	
			}else{
			die("Error".mysqli_connect_error($this->connection));
			}
		}
		/*This is how to get all data from table*/
		 public function getAll(){
		 	$sql = "SELECT * FROM tbl_doctor";
		 	if(mysqli_query($this->connection, $sql)){
		 		$result = mysqli_query($this->connection, $sql);
		 		return $result;
		 	}else{
		 		die("Error".mysqli_connect_error($this->connection));
		 	}
		 }

		 public function deletedoc($id,$imgUrl) {
		 	$sql = "DELETE FROM tbl_doctor WHERE id='$id'";
		 	unlink($imageUrl);

		 	if(mysqli_query($this->connection, $sql)){
		 		$message = "DATA DELETED Successfully!";
		 		HEADER("Location:viewDoctor.php");
		 	}else{
		 		die("Error".mysqli_connect_error($this->connection));
		 	}
		 	
		 }

		 public function getsingledoc($id) {
		 	$sql = "SELECT * FROM tbl_doctor WHERE id='$id'";
		 	if(mysqli_query($this->connection, $sql)){
		 		$result = mysqli_query($this->connection, $sql);
		 		return $result;
		 	}else{
		 		die("Error".mysqli_connect_error($this->connection));
		 	}
		 }

		 public function editDoc($data) {
		 	$sql = "UPDATE tbl_doctor set name='$data[name]',degree='$data[degree]',phone='$data[phone]',email='$data[email]',visit_time='$data[visit_time]',visit='$data[visit]',imgUrl='$data[imgUrl]' where id ='$data[id]'";
		 	if(mysqli_query($this->connection, $sql)){
				$result =mysqli_query($this->connection, $sql);
				HEADER("Location:viewDoctor.php");	
			}else{
				die("Error".mysqli_connect_error($this->connection));
			}
		 }

		 public function addPatient($data) {
		 	$sql = "insert into tbl_patient (name,age,gender,email,phone) values ('$data[name]','$data[age]','$data[gender]','$data[email]','$data[phone]')";
			//echo $sql;
			if(mysqli_query($this->connection, $sql)){

				// $message = "Data Inserted Successfully";
				// return $message;
				HEADER("Location:viewPatient.php");	
			}else{
			die("Error".mysqli_connect_error($this->connection));
			}
		 }

		 public function getpatient() {
		 	$sql = "SELECT * FROM tbl_patient";
		 	if(mysqli_query($this->connection, $sql)){
		 		$result = mysqli_query($this->connection, $sql);
		 		return $result;
		 	}else{
		 		die("Error".mysqli_connect_error($this->connection));
		 	}
		 }

		 public function deletepatient($id) {
		 	$sql = "DELETE FROM tbl_patient WHERE id='$id'";

		 	if(mysqli_query($this->connection, $sql)){
		 		$message = "DATA DELETED Successfully!";
		 		HEADER("Location:viewPatient.php");
		 	}else{
		 		die("Error".mysqli_connect_error($this->connection));
		 	}
		 }

		 public function patientsingle($id) {
		 	$sql = "SELECT * FROM tbl_patient WHERE id='$id'";
		 	if(mysqli_query($this->connection, $sql)){
		 		$result = mysqli_query($this->connection, $sql);
		 		return $result;
		 	}else{
		 		die("Error".mysqli_connect_error($this->connection));
		 	}
		 }

		 public function editpatient($data) {
		 	$sql = "UPDATE tbl_patient set name='$data[name]',age='$data[age]',gender='$data[gender]',email='$data[email]',phone='$data[phone]' where id ='$data[id]'";
		 	if(mysqli_query($this->connection, $sql)){
				$result =mysqli_query($this->connection, $sql);
				HEADER("Location:viewPatient.php");	
			}else{
				die("Error".mysqli_connect_error($this->connection));
			}
		 }
		/*Single Blog View Query*/
		public function saveAppt($data){
			$time = date('h:i:sa');
			$sql = 'select time from tbl_appointment order by id desc'; 			
			if(mysqli_query($this->connection, $sql)){
				$result = mysqli_query($this->connection, $sql);
				if(mysqli_num_rows($result)>0 ){
					$lastApptTime = mysqli_fetch_assoc($result);
					$a = $lastApptTime['time'];
					$b = date('h:i:s',strtotime($a . ' +15 minutes'));
					$sql3 ="select id from tbl_appointment";
							if(mysqli_query($this->connection, $sql)){
								$totalApp =mysqli_query($this->connection, $sql);
								if(mysqli_num_rows($totalApp)>5 ){
								 echo 'Maximum Appointment Reached';
								}else{
									$sql2 = "insert into tbl_appointment (p_name,d_name,age,phone,date,time) values ('$data[p_name]','$data[d_name]','$data[age]','$data[phone]','$data[date]','$b')";
									if(mysqli_query($this->connection, $sql2)){
										HEADER("Location:viewappoinment.php");
									}else{
									die("Error".mysqli_connect_error($this->connection));
									}
								}
							}else{
								die("Error".mysqli_connect_error($this->connection));
							}
					
				}else{
					$c = $time;
					$sql = "insert into tbl_appointment (p_name,d_name,age,phone,date,time) values ('$data[p_name]','$data[d_name]','$data[age]','$data[phone]','$data[date]','$c')";
					if(mysqli_query($this->connection, $sql)){
						//HEADER("Location:viewPaitent.php");
					}else{
					die("Error".mysqli_connect_error($this->connection));
					}
				}
			}else{
			die("Error".mysqli_connect_error($this->connection));
			}			
		}

		public function getAppt() {
			$sql = "SELECT * FROM tbl_appointment";
		 	if(mysqli_query($this->connection, $sql)){
		 		$result = mysqli_query($this->connection, $sql);
		 		return $result;
		 	}else{
		 		die("Error".mysqli_connect_error($this->connection));
		 	}
		}
		
		
}