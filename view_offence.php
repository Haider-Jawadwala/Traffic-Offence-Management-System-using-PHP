    
<?php
    session_start();
?>
<!DOCTYPE>
<head>
<title>Search/View Logged Offence</title>
<link rel="stylesheet" href="css/dcss.css">
</head>
<body>
<a class="back" href="dashboard.php">Back To Home</a>
	<div class="login-page">
		<div class="form">
<form action='' method='POST'>
	<h2>Search/View Offence</h2><hr/>
        <table>
        <tr><td><input type='text' name='search' placeholder='enter reportID/OfficerUsername' size='80'/></td>

        <td><input class='btn' type='submit' value='submit'name='submit'></td>
            </tr>
            </table>
    
<?php
require_once 'dbconn.php';
  if(isset($_POST['submit'])){
      $best=$_POST['search'];
      
      $query= "SELECT * FROM off_details WHERE rp_id LIKE '%$best' OR officer_reporting LIKE '%$best'";
       $result= $conn->query($query);
	   $row=0;
    $row=$result->num_rows;
  }
?>
</div>
        </div>
</form>
    <?php
	error_reporting(0);
    if ($row >=1){
       echo'<table border=1>';
     echo "<table class='r_table'border='2'><tr>
            <th>Report ID</th>
            <th>Offender FirstName</th>
            <th>Offender's Surname</th>
            <th>Vehicle Number</th>
            <th>Driver License No</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Offence</th>
            <th>Offence Code</th>
            <th>Penalty</th>
            <th>Reporting Officer</th>
            </tr><tr>";
    
for ($i=0; $i<$row; ++$i)
{
	
echo'<tr>'; 
	$result->data_seek($i);
	
	echo '<td>'. "RP000".$result->fetch_assoc()['rp_id'].'</td>';
	$result->data_seek($i);
	echo '<td>'. $result->fetch_assoc()['o_fname'].'</td> <br>';
	$result->data_seek($i);
	echo '<td>'. $result->fetch_assoc()['o_lname'].' </td> <br>';
    $result->data_seek($i);
    echo '<td>'. $result->fetch_assoc()['vehicle_no'].'</td>';
	$result->data_seek($i);
	echo '<td>'. $result->fetch_assoc()['driver_license'].'</td> <br>';
	$result->data_seek($i);
	echo '<td>'. $result->fetch_assoc()['gender'].' </td> <br>';
    $result->data_seek($i);
	echo '<td>'. $result->fetch_assoc()['address'].'</td> <br>';
	$result->data_seek($i);
	echo '<td>'. $result->fetch_assoc()['offence'].' </td> <br>';
    $result->data_seek($i);
    echo '<td>'. $result->fetch_assoc()['offence_code'].'</td>';
	$result->data_seek($i);
	echo '<td>'. "₹".$result->fetch_assoc()['penalty'].'</td> <br>';
	$result->data_seek($i);
	echo '<td>'. $result->fetch_assoc()['officer_reporting'].' </td> <br>';
	echo '</tr>';
}
}
echo'</table>';
         ?>   
</body>	