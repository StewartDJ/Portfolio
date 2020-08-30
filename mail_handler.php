<!-- <?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$reason=$_POST['reason'];
		$msg=$_POST['msg'];

		$to='deshastewart@gmail.com'; 
		$subject='Form Submission';
		$subject="Name :".$name."\n"."Reason :".$reason."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $subject, $headers)){
			echo "<h1>Sent Successfully!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?> -->