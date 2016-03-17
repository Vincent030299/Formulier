<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
		include 'config.php';

	?>
</head>
<body>
	<form action="" method="POST">
		<label>Naam</label>
		<input type="text" name="naam" id="naam" placeholder="vul je naam in">
		<br>
		<br>
		<label>Bericht</label>
		<input type="text" name="bericht" id="bericht" placeholder="bericht">
		<br>
		<br>
		<label>Email</label>
		<input type="text" name="email" id="email" placeholder="je email">

		<br>
		<br>
		<input type="submit">
	</form>

<?php
		$stmt = $conn->prepare("INSERT INTO form2 (naam,bericht,email) VALUES (:naam,:bericht,:email)");
		$stmt->bindParam(':naam', $naam);
		$stmt->bindParam(':bericht', $bericht);
		$stmt->bindParam(':email', $email);

		//De insert
		$naam = $_POST['naam'];	
		$bericht = $_POST['bericht'];
		$email = $_POST['email'];
		$stmt->execute();
?>
</body>
</html>