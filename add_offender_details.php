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
require_once 'dbconn.php';
     $select=  $_SESSION['dropdown'];
   $query="SELECT * FROM off_code_fine WHERE off_id='$select'";
       $result=$conn->query($query);
       if (!$result){
           echo "failed";
       }
       else{
$row=$result->fetch_assoc();
       }
?>
    <?php
    if (isset($_POST['submit'])){
        $fname=get_post($conn, 'fname');
        $lname=get_post($conn, 'lname');
        $vname=get_post($conn,'vno');
        $dvl=get_post($conn, 'dvl');
        $gender=get_post($conn, 'gender');
        $add=get_post($conn, 'add');
        $off=get_post($conn, 'off');
        $offc=get_post($conn, 'offc');
        $pen=get_post($conn, 'pen');
        $off_report=get_post($conn, 'off_report');
 $query= "INSERT INTO off_details VALUES". "(null,'$fname','$lname','$vname','$dvl','$gender','$add','$off','$offc','$pen','$off_report')";  
        $result=$conn->query($query);
        if (!$result){
            echo "<script>alert('failed, Something went wrong!!!');</script>";
        }
           
        else{
            echo "<script>alert('Report Logged Successfully');</script>";
           
    

        }
       
    }
        function get_post($conn, $var)
{
return $conn->real_escape_string($_POST[$var]);
}
?>
 
   
    <form action='' method='post' class='tform2'>
    <table  class="tform">
        <tr>
            <td colspan=""><label>FirstName </label></td>
        <td><input name='fname'></td>
        <td><label>Lastname</label></td>
            <td><input name='lname'></td></tr>
            <tr><td><label>Vehicle Reg. NO: </label></td>
            <td><input name='vno'/></td>
        <td><label>Driver's License: </label></td>
        <td><input name='dvl'></td></tr>
        <tr ><td ><label>Male<input type='radio' name='gender'value= 'male'checked="checked"/>       Female<input type='radio' name='gender' value= 'female'/></label></td></tr>
        <tr><td><label>Address:</label></td> <td><input name='add'></td>
        <td><label>Offence:</label></td> <td><input type='text'name='off' `size='90'value="<?php echo $row['off_name'] ?>"/></td></tr>
        <tr><td><label>Offence Code:</label></td><td> <input name='offc' value="<?php echo $row['off_code']?>"/></td>
            <td><label>Penalty:</label></td>  <td><input name='pen' value="<?php echo $row['penalty']?>"/> </td></tr>
        <tr><td><label>Officer Reporting:</label></td><td>  <input name='off_report'value="<?php echo $_SESSION['username'] ?>"/></td></tr>
        
            <td colspan='4'><input class='btn'type='submit' name='submit' value='submit'/></td>
        </table>    
    </form>
                    </div>
        </div>
       
</section>

</body>
<footer> A Richiehortiz Design &copy; 2017 </footer>
</html> 
