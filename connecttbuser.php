<?php
	depart();
	function connect()
	{
	 	$host='localhost'; 
		$user='root'; 
		$pass='Area_73reg'; 
		$database='reqdb';
		$conn = new mysqli($host, $user, $pass, $database);	
		return $conn;
	}
//depart($conn);
function depart()
{
	$conn = connect();
	$sql = "SELECT * FROM users";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo '<option value='.$row['department'].'">'.$row['department'].'</option>';
	    }
	} else {
	    echo "0 results";
	}
	$conn->close();
}
?>