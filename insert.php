<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'iskaner_db');

if($conn->connect_error){
	die("Connection Failed" .$conn->connect_error);

}
if(isset($_POST['text'])){
date_default_timezone_set('Asia/Manila');
$text =$_POST['text'];
$date =date('Y-m-d');
$time =date('H:i:s');
$bid =$_GET['bid'];

$sql = "SELECT * FROM attendance WHERE STUDENTID='$text' AND LOGDATE='$date' AND STATUS='0'";
$query=$conn->query($sql);

if ($query->num_rows>0){


	
	$sql = "UPDATE attendance SET TIMEOUT = Now() , STATUS = '1' WHERE STUDENTID = '$text' AND LOGDATE = '$date'";
	$query=$conn->query($sql);
	$_SESSION['success'] = 'Successful Time Out';




	//$sql = "UPDATE attendance SET TIMEIN =NOW(), STATUS = '1' WHERE STUDENTID = '$text' AND LOGDATE = '$date'";
	//$query=$conn->query($sql);
	//$_SESSION['success'] = 'Successful Time In';


}else{
	$sql = "INSERT INTO attendance (STUDENTID, TIMEIN, LOGDATE, STATUS, BUILDING) VALUES ('$text', '$time', '$date', '0', '$bid')";
	if($conn->query($sql) ===TRUE){
	$_SESSION['success'] = 'Successful Time In';
}else {
		$_SESSION['error'] = $conn->error;

      }
}

}else{
	$_SESSION['error'] = 'Please Scan Your QR Code';
     }
header("location: index.php?bid=".$bid);

$conn->close();
?>