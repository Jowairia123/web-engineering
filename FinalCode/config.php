<?php
    $servername = "localhost";
    $username = "id9611534_jia";
    $password = "space";
    $databasename = "id9611534_web";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $databasename);

    // Check connection
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
	
	mysqli_select_db($conn,"id9611534_web");	
?>

