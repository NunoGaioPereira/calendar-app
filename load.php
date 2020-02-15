<?php
	$host = "localhost";
	$user = "root";
	$password = "nGlwwzfu4d5pdH2a";
	$dbname = "fullcalendar_test";
	$dsn = "mysql:host=$host;dbname=$dbname";

	try	{
		// Connect to database
		$conn = new PDO($dsn, $user, $password);
		// set the PDO error mode to exception
   		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $exception) {
		echo("<p>Error: ");
		echo($exception->getMessage());
		echo("</p>");
		exit();
	}


	$data = array();
	$query = "SELECT * FROM events ORDER BY id";
	$stmt = $conn->prepare($query);
	$stmt->execute();

	$result = $stmt->fetchAll();

	foreach ($result as $row) {
		$data[] = array(
			'id' => $row['id'],
			'title' => $row['title'],
			'start' => $row['start_event'],
			'end' => $row['end_event']
		);
	}

	echo json_encode($data);

?>
