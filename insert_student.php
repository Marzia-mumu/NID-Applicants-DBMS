<?php
//connect dba_close
include('DBconnection.php');

//checking if the input empty
if(isset($_POST['sname'])&& isset($_POST['eml'])&& isset($_POST['wod']) && isset($_POST['phn'])){
	//write the query to check is this smthn exists or not
	echo"working";
		$u= $_POST['sname'];
		$e=$_POST['eml'];
		$p=$_POST['wod'];
		$r=$_POST['phn'];
		$sql="INSERT INTO user_login (Applicant_Name,Email,Pass,Phone_number) VALUES ('$u','$e','$p','$r')";
		//Execute the query
		$res=mysqli_query($conn, $sql);
	//echo $sql;
		if($res){
			
			echo "LEt him enter";
		}
		else{
			echo "nothing";
			}		
			
}	





?>