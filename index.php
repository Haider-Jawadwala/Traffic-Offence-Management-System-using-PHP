<?php 
 session_start();
?>
<!DOCTYPE>
<head>
<title>Sign In</title>
<link rel="stylesheet" href="css/dcss.css">
</head>
<body>
    <center><img src="img/logo.png" width=""></center>
	<div class="login-page">
		<div class="form">
<form action='' method='post'>

	<h2>Sign In</h2><hr/>
	
	<input class='usimg'type='text' name='username' placeholder='enter username'required/><br>

	<input class='paimg' type='password' name='password' placeholder='enter password'required/><br>

	<input class='btn' type='submit' name='Login' >
	

<?php

require_once 'dbconn.php';

	if(isset($_POST['Login'])){ //check if browser has posted any data to be collected
$username=$_POST['username'];
$password=$_POST['password'];
$password=md5($password);
	$query= "SELECT * FROM user where username='$username' AND password='$password'"; //insert data to database
	$result=$conn->query($query);


if (!$result->num_rows ==1){

    echo"failed";
}
else{
	
	$_SESSION['username']= $username;
	header("location: dashboard.php");

}	
}
function get_post($conn, $var)
{
return $conn->real_escape_string($_POST[$var]);
}
?>

</form>
</body>	