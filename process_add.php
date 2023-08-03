<?php

//set up for mysql Connection
//$dbuser = 'root';
//$dbpass = '';

//$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
//test if the connection is established successfully then it will proceed in next process else it will throw an error message




$conn = new mysqli('localhost', 'root', '', 'maggi');


   











if(! $conn )
{
  die('Could not connect: ' . mysqli_error());
}

//we specify here the Database name we are using
//mysqli_select_db('maggi');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email	= $_POST['email'];
$phone= $_POST['phone'];
$address= $_POST['address'];
$services= $_POST['services'];
$services2= $_POST['services2'];
$calender= $_POST['calender'];
$time= $_POST['time'];

//It wiil insert a row to our tblstudent`
$sql = "INSERT INTO `maggi`.`appointment` (`id`, `fname`, `lname`, `email`, `phone`,`address`,`services`,`services2`,calender,time) 
		VALUES (NULL, '{$fname}', '{$lname}', '{$email}', '{$phone}', '{$address}','{$services}','{$services2}','{$calender}','{$time}' );";
//we are using mysql_query function. it returns a resource on true else False on error
$retval = mysqli_query($conn,$sql );
if(! $retval )
{
  die('Could not enter data: ' . mysqli_error());
}
?>
					<script type="text/javascript">
						alert("New Record is Added to the Database");
						window.location = "index.php";
					</script>
					<?php
//close of connection
mysqli_close($conn);
?>
