<?php

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$dd = $_POST["dd"];
$nn = $_POST["nn"];
$yy = $_POST["yyyy"];
$uname = $_POST["uname"];
$pword = $_POST["pword"];

$to = "delicedurhin@example.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<br>
<p>Firstname : $fname;</p>
<p>Lastname : $lname;</p>
<p>Email : $email;</p>
<p>Phone : $phone;</p>
<p>Birthday : $dd / $nn / $yy</p>
<p>Username : $uname; </p>
<p>Password : $pword; </p>

<br>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'. $to .'>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);

$ar = "
<html>
<head>
<title>Accuse de reception</title>
<style>
	h1	{
		color: #141E6E;
		font-size: 60px;
		border-bottom: 2px solid #141E6E;
	}
	h1:before	{
		content: url('media/l0g0-1.png');
		position: relative;
		right: 25px;
		top: 25px;
		border-bottom: 2px solid #141E6E;
	}
	p {
		color: #141E6E;
	}
</style>
</head>
<body>
<header>
	<h1>Délices de nos rivières</h1>
</header>
<p>Nous avons bien reçu votre message nous vous rapellerons dans les plus bref délai.</p>
</body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <' .$to.'>' . "\r\n";

mail($email,$subject,$ar,$headers);

header("Location: index.html");

?>