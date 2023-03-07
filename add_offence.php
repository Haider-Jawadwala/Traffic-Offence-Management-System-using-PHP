 <?php
session_start();
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
    
        <h2>Add Offence</h2><hr>
        <?php
    $session_start;
include 'dbconn.php';
   if (isset($_POST['submit'])){
    $select= $_POST['select'];
    $_SESSION['dropdown']= $select;
         header("location: add_offender_details.php");
   
   }
?>
    <div class='selectbar'>
    <form method='post'>
        <fieldset>
            <legend>Select Offence</legend>
        <select name='select'  autofocus maxlength='50'>
            <option selected disabled>.............Choose Offence Type.............</option>
                <option value="1">Attempting to corrupt Marshall on duty</option>
            <option value="2">Drinking & Driving</option>
             <option value="3">Assaulting Road Marshall</option>
             <option value="4">Dangerous Driving</option>
            <option value="5">Driver's License Violation</option>
            <option value="6">Do not move violation</option>
            <option value="7">Driving Under Drug Influence</option>
            <option value="8">Driving with worn out tyres</option>
            <option value="9">Constantly caught for No seatbelt</option>
            <option value="10">Excessive smoke emission</option>
            <option value="11">failure to fix red flag on projected load</option>
            <option value="12">Fire extinguisher violation</option>
            <option value="13">No Caution</option>
            <option value="14">Operating with forged documents</option>
            <option value="15">Riding Motorcycle without crash helmet</option>
            <option value="16">Road obstruction</option>
            <option value="17">Speed Limit violation</option>
            <option value="18">Under age driving</option>
            <option value="19">Making calls while driving</option>
            <option value="20">other offences and violation</option>
</select>
            </fieldset>
        <input type='submit' name='submit' value='submit'/>
    </form>
        </div>
</section>

</body>
<footer> A Richiehortiz Design &copy; 2017 </footer>
</html> 
