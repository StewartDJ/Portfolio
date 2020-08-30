<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$reason=$_POST['reason'];
		$msg=$_POST['msg'];

		$to='deshastewart@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$subject="Name :".$name."\n"."Reason :".$reason."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $subject, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", you will be hearing back shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>