<?php
$un=$_POST['username'];
$em=$_POST['useremail'];
$ph=$_POST['userphone'];
$servic=$_POST['services'];
$meesg=$_POST['mesg'];
if(trim($un)!="Your Name" && trim($em)!="Your Email" && trim($servic)!="Your services" && trim($meesg)!="Your message" && trim($un)!="" && trim($em)!="" && trim($ph)!="" && trim($servic)!="" && trim($meesg)!="")
{
	if(filter_var($em, FILTER_VALIDATE_EMAIL))
	{
		$message="Hi Admin..<p>".$un." has sent a query having email id as ".$em." </p><p>Message is : ".$meesg."</p>";
		
		$message_user="Hi ".$un."<p> Thank you so much for your valuable comments. <br> Our Support team will get back to you ASAP.</p><p>Have a great day ahead.</p>";
		
		
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: <support@himanshusofttech.com>' . "\r\n";

		if(mail('jhini.mehta@gmail.com','Query for Lawyer',$message,$headers ))
		{
		mail($em,'Reply from Lawyer Template Team',$message_user,$headers );
			
		echo '1#<p style="color:green;">Mail has been sent successfully.</p>';
		}
		else
		{
		echo '2#<p style="color:red;">Please, Try Again.</p>';
		}
	}
	else
		echo '2#<p style="color:red">Please, provide valid Email.</p>';
}
else
{
echo '2#<p style="color:red">Please, fill all the details.</p>';
} 
?>