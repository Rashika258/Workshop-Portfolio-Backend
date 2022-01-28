<?php

date_default_timezone_set('Asia/Kolkata');
$con=mysqli_connect('localhost','root','','portfolio');

function get_safe_value($str){
	global $con;
	$str=mysqli_real_escape_string($con,$str);
	return $str;

}



if(isset($_POST['submit'])) {
    $firstName=get_safe_value($_POST['firstName']);
    $lastName=get_safe_value($_POST['lastName']);
    $email=get_safe_value($_POST['email']);
    $message=get_safe_value($_POST['message']);


  
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($con,"insert into contact_us(firstName, lastName,email,message,added_on) values('$firstName','$lastName','$email','$message','$added_on')");
    echo "Thank you for connecting with us, will get back to you shortly";
 
}
?>