<?php

$q_score = $_POST['quality'];
$feedback_txt = $_POST['suggestion'];
$firstname_txt = $_POST['firstname'];
$lastname_txt = $_POST['lastname'];
$email_txt = $_POST['email'];


$conn = mysqli_connect("localhost", "root","", "login");
$query ="insert into feedback(quality_score, feedback,firstname,lastname,email)values($q_score, '$feedback_txt','$firstname_txt','$lastname_txt','$email_txt')";
$result = mysqli_query($conn, $query);
if($result)
echo 'Thank you for your feedback. We\'ll appreciate!';
else
die("Thank you for your feedback. We'll appreciate!");
?>