
<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="petwelfare";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save5']))
{	
	 $Sname = $_POST['Sname'];
	 $Semail = $_POST['Semail'];
	 $Sdates = $_POST['Sdates'];
	 $Stime = $_POST['Stime'];
	 $Sservice = $_POST['Sservice'];

	 $sql_query = "INSERT INTO service_detail (Sname,Semail,Sdates,Stime,Sservice)
	 VALUES ('$Sname','$Semail','$Sdates','$Stime','$Sservice')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>