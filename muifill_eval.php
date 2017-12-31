<?php
session_start();
require_once 'dbconfig.php';
$table=$_SESSION['quiztable'];
$query = sprintf("SELECT answers FROM $table where quiztype='fib' ");
$result=mysqli_query($conn,$query);
$count=0;
$score=0;
if (isset($_POST['submit'])) {
while($row=mysqli_fetch_array($result)){
	$answer=$_POST['ans'];
	if($answer[$count]==$row[0]){
		++$score;
		}	
$count++;
		}
		echo "<script>alert('Your score is $score');location.href='quiz_stud.php';</script>";
}



?>