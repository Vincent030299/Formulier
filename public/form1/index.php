<!DOCTYPE html>
<html>
<head>
	<title>Formulier</title>
	<?php
	include 'config.php';
	?>
</head>
<body>
		<form action="" method="post">
			<label>Naam</label><br/>
			<input type="tekst" name="naam" id="naam" placeholder="vul hier uw naam in"><br>

			<br><label>Email</label>
			<br><input type="tekst" name="email" id="naam" placeholder="vul hier uw email in"><br/>

			<input type="submit" placeholder="verzenden">
		</form>

		<?php
			$sql = "INSERT INTO form (naam, email)
			VALUES ('".$_POST["naam"]."','".$_POST["email"]."')";

	if ($conn->query($sql)) {
	echo "<script type= 'text/javascript'>alert('Het is gelukt');</script>";
	}
	else{
	echo "<script type= 'text/javascript'>alert('Fout');</script>";
	}
		?>
</body>
</html>