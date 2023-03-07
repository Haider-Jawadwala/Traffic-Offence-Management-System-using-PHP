<!DOCTYPE>
<head>
<title>Sign Up</title>
<link rel="stylesheet" href="css/dcss.css">
</head>
<body>
	<div class="login-page">
		<div class="form">
<form action='' method='post'>
	<legend>
	<h2>Sign Up</h2><hr/>
	<input type='text' name='fname' placeholder='firstname' /><br>
	
	<input type='text' name='lname' placeholder='lastname' /><br>
	
	<input type='text' name='username' placeholder='enter username'required/><br>

	<input type='password' name='password' placeholder='password'required/><br>

	<input type='password' name='c_password' placeholder='re-enter password'required/>
	<input type='e-mail' name='email' placeholder='email@mail.com'required/><br>

	<button class='btn'> submit </button>
	<a href="index.php"> Login Here</a>

<?php
require_once 'dbconn.php';
        
if(isset($_POST['fname']) //check if browser has posted any data to be collected
&& isset($_POST['lname'])
&& isset($_POST['username'])
&& isset($_POST['password'])
&& isset($_POST['c_password'])
	&& isset($_POST['email']))
{
	$username = get_post($conn, 'username');//check if inputed data contain escape sequence such as /n
$password = get_post($conn, 'password');
$fname = get_post($conn, 'fname');
$lname = get_post($conn, 'lname');
$c_password = get_post($conn, 'c_password');
$email = get_post($conn, 'email');
$epassword=md5($password);
$ec_password=md5($c_password);
	$query= "INSERT INTO user VALUES". "(null,'$fname','$lname','$username','$epassword', '$ec_password','$email')"; //insert data to database
	$result= $conn->query($query);
	echo "account successfully created";
	
}
function get_post($conn, $var)
{
return $conn->real_escape_string($_POST[$var]);
}
?>

</form>
</body>	