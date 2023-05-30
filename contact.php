<?php
$servername='localhost';
$username='root';
$password='';
$dbname='sam';
$conn=mysqli_connect($servername,$username,$password,$dbname);

$name='';
$email='';
$message='';

if(isset($_POST['create'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mess=$_POST['comment'];
	$query="INSERT INTO coins values(?,?,?)";
	$stmt=mysqli_prepare($conn,$query); 
	mysqli_stmt_bind_param($stmt,'sss',$name,$email,$mess);
	mysqli_stmt_execute($stmt);
    if(mysqli_affected_rows($conn)>0){
    	echo '<script>alert("SENT SUCCESSFULLY")</script>';
    }
    else{
    	echo '<script>alert("NOT SENT")</script>';
    }
}
?>