<?php
session_start();
require_once 'dbconfig.php';
if (isset($_POST['submit'])) {
	$table=$_SESSION['quiztable'];
$query = sprintf("SELECT answers FROM $table where quiztype='mcq' ");
$result=mysqli_query($conn,$query);
$i=1;
$score=0;
while($row=mysqli_fetch_array($result)){
if(isset($_POST['op'.$i]))
{	$op=$_POST['op'.$i];
echo $op.'<br>'.$row[0];
	if($row[0]==$op){
		++$score;
		}
}
$i++;
}
echo $message = 'Your score is '.$score;
		echo "<script>alert('$message');location.href='quiz_stud.php';</script>";
}
?>
