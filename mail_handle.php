<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
.body{
	font: Helvetica;
}
.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 10px;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}
#crossmark{
    font-color:red;
}
.errorIcon{
    font-size:74px;
    margin: 15px;
    color: red;
}
</style>	

<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>
<body>

	
<?php
	if(isset($_POST['Submit'])){
		$name=$_POST['Name'];
		$email=$_POST['Email'];
		$phone=$_POST['Phone'];
		$msg=$_POST['Message'];
		

		$to='info@navrasart.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
            echo	"<header class=\"site-header\" id=\"header\">";
echo		"<h1 class=\"site-header__title\" data-lead-id=\"site-header-title\">THANK YOU!</h1>";
echo	"</header>";

echo	"<div class=\"main-content\">";
echo		"<i class=\"fa fa-check main-content__checkmark\" id=\"checkmark\"></i>";
echo	"	<p class=\"main-content__body\" data-lead-id=\"main-content-body\">Dear " .$name;
echo  "<br><strong>We will contact you soon! </strong>";
echo "</p>";

echo	"</div>";
echo "<br>";
echo "<center>";
echo "<a href=\"index.html\">";
echo "<button class=\"button button1\">Back to home Page</button>";
echo "</a>";
echo "</center>";
echo "</div>";

		}
		else{
			echo	"<header class=\"site-header\" id=\"header\">";
echo		"<h1 class=\"site-header__title\" data-lead-id=\"site-header-title\">Something went wrong!</h1>";
echo	"</header>";

echo	"<div class=\"main-content\">";
echo "<div class=\"errorIcon\">";
echo		"<i class=\"fa fa-times\"></i>";
echo "</div>";
echo	"	<p class=\"main-content__body\" data-lead-id=\"main-content-body\"><strong>Please try again later</strong>" ;

echo	"</div>";
echo "<br>";
echo "<center>";
echo "<a href=\"index.html\">";
echo "<button class=\"button button1\">Back to home Page</button>";
echo "</a>";
echo "</center>";
echo "</div>";
		}
	}
?>	
<footer class="site-footer" id="footer">
		<p class="site-footer__fineprint" id="fineprint">Copyright ©2019-2020 | All Rights Reserved</p>
	</footer>
</body>
</html>


