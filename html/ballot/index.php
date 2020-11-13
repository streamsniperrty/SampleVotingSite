<!DOCTYPE html>
<html>
	<head>
		<title>Vote For The Next President</title>
		<link rel="icon" href="../vote-logo.png" type="image/x-icon"/>
		<link rel="stylesheet" href="style.css" type="text/css">
		<link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet"> 
		<meta charset="utf-8">
	</head>
	<body>
		<div class="header">
			<span class="title"><h1>NEW YORK PRESIDENTAL ELECTION</h1></span>
		</div>
		<span class="line"><hr></span>
		<br>
		<form action="../server/submit-server.php" method="POST" class="ballot">
			<span class="name"><h4>Please type in your full name: </h4><input type="text" name="name" placeholder="Full Name"></input></span>
			<br>
			<br>
			<span class="details">
				<h4 style="color: #0c0d12;">Please fill out the other information:</h4>
				<input type="text" name="address" placeholder="Address"></input>
				<br>
				<br>
				<input type="text" name="city" placeholder="City"></input>
				<br>
				<br>
				<input type="text"  name="zipcode" placeholder="Zip Code"></input>
				<br>
				<br>
			</span>
			<span class="joe"><h4>Please choose the candidate that you want to vote as President for the 2020-2024 term:</h4><input type="radio" name="candidate" value="Joe Biden">   <span class="damnJoe">Joe Biden</span>  <span class="vpa">Kamala Harris</span></input></span>
			<br>
			<div class="statusa">
				<p class="statpa">Democrat, President <span class="statvpa">Democrat, Vice President</span></p>
			</div>
			<br>
			<span class="donald"><input type="radio" name="candidate" value="Donald Trump"><span class="damnDonald">Donald Trump</span> <span class="vpb">Mike Pence</span></input></span>
			<br>
			<div class="statusb">
				<p><span class="statpb">Republican, President</span> <span class="statvpb">Republican, Vice President</span></p>
			</div>
			<br>
			<h4>When you are ready to submit the ballot, press "Cast Your Vote"</h4>
			<span class="submit"><input type="submit" name="submit" value = "Cast Your Vote"></input></span>
		</form>
		<br>		
		<hr>
	</body>
	<footer>
		<p class="footer">2020 Federal Voting Program</p>
	</footer>
</html>
