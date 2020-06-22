	<?php 	
		// $servername = "162.222.225.87:3306";
		$servername = "127.0.0.1:3306" ;
		$username ="u685553724_nareshkhurana4" ;
		$password = "KHURANA123" ;
		//$username = "naresh";
		// $password = "Khurana$%1234";
		$db = "u685553724_fees" ; 
		$conn = mysqli_connect($servername, $username, $password);
		mysqli_select_db($conn, $db);
		if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
	// echo "Connected successfully"; 
}
		?>