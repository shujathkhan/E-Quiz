<?php
session_start();
require_once 'dbconfig.php';
$query = sprintf('SELECT answers FROM quiz_table_it1001 where quiztype="tf" ');
$result=mysqli_query($conn,$query);
$count=0;
$score=0;
if (isset($_POST['submit'])) {
while($row=mysqli_fetch_array($result)){
	$answer=$_POST['answer'];
	if($answer[$count]==$row[0]){
		++$score;
		}	
		$count++;
}
echo "<script>alert('Your score is $score');location.href='quiz_stud.php';</script>";
}



?>