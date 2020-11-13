<html>
	<head>
		<title>Thank You for Submitting</title>
		<meta charset="utf-8">
		 <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet"> 
		<style type="text/css">
			.result {
				font-family: 'Staatliches', cursive;
			        font-size: 32px;	
				color: black;
				text-align: center;
			}
			.redirect {
				font-family: 'Staatliches', cursive;
				font-size: 25px;
				color: black;
				text-align: center;
			}
		</style>
	</head>
	<body>
	</body>
</html>

<?php

if (isset($_POST['submit'])) {
	$candidate = $_POST["candidate"];
	$name = $_POST["name"];

	require_once 'db-server.php';

	if(empty($candidate)) {
		echo '<script type="text/javascript">';
		echo 'alert("You have not chosen a candidate. Please try redoing the ballot.");';
		echo 'window.location.href = "../ballot/index.php";';
		echo '</script>';
	}

	elseif(empty($name)) {
		echo '<script type="text/javascript">';
                echo 'alert("You have not typed in your name. Please try redoing the ballot.");';
                echo 'window.location.href = "../ballot/index.php";';
                echo '</script>';
	}

	else {
		$sql = "INSERT INTO data(name, candidate) VALUES('$name', '$candidate');";
                $query_run = mysqli_query($conn, $sql);

		if ($query_run) {
                echo "<br>";
                echo "<br>";
                echo "<div class=result><h2>You have voted for the candidate: $candidate.</h2></div>";
                echo "<div class=redirect><h3>To go back to the main voting page, please click <a href=../index.html>here</a>.</h3></div>";
                # header("Location: ../MainPage/index.html");
        	} 
		
		else {
                echo "We're sorry, but there seems to be an error.";
                echo "<br>";
                echo "Please try redoing the ballot by clicking the link below.";
                echo "<br>";
                echo "<br>";
                echo "For System Admins: ";
                echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
}

else {
	header("location: ../ballot/index.php");
	exit();
}

