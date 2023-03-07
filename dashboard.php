 <?php
session_start();
if(!$_SESSION['username']){
    
}

?>
<!DOCTYPE html>
<html>

	<title>Traffic Offence System</title>
	<link rel="stylesheet" href='css/dcss.css'

<body>
<aside>
	<div class='user'>
		<img class='avatar' src='img/avatar.png'>
	<?php
// Echo session variables that were set on previous page
echo "<p> User: " . $_SESSION["username"] . "<br></p>";
?>
<a href="logout.php">logout</a><hr/>
</div>

<ul class='nav_container'>
	<li class='nav_list'><a href='dashboard.php'><img src="img/home.png">Home</li><hr/>
	<li class='nav_list' ><a href='add_offence.php'><img src="img/add.png">Add Offence</li><hr/>
	<li class='nav_list'><a href='view_offence.php'><img src="img/view.png">View Offence</li><hr/>
	
	</a>
</ul>

</aside>
<section>
    <div class='prof_details'>
        <h2>Profile Details</h2><hr>
        <?php
    
include 'dbconn.php';
    $user=$_SESSION['username'];
    $query="SELECT id, fname,lname,email,username FROM user WHERE username='$user'";
            $result=$conn->query($query);
            if(!$result){
                echo 'failed';
            }
			else{
    $row=$result->fetch_assoc();
                
    
			}
?>
        <div class='user_border'>
        <div class='user_list'>
        <p>UserId: <?php echo '000'.$row['id']?></p>
        <p>Username: &nbsp;<?php echo $row["username"] ?></p>
        <p>First Name:<?php echo $row["fname"] ?></p>
        <p>Last Name:<?php echo $row["lname"] ?></p>
        <p>Email:<?php echo $row["email"] ?></p>
        
        <p><input type='submit' name='logout' value='Logout' onclick="window.location='logout.php'"></p>
		<p></p>
        </div>
        </div>
    </div>
</section>

</body>
</html> 
