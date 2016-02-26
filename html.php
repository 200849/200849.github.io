<?php
$fisrt_name = $_POST('fisrt_name');
$last_name = $_POST('last_name');
$email=$_POST('email');
$message=$_POST('message');
$to="200849@hkis.edu.hk";
$subject= "New Message";

mail($to, $subject, $message, "From:" .$fisrt_name .$last_name);
echo "Your Message has been sent";

?>