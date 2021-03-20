<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>

<body>
	<?php
	session_start();
	include('config.php');
	if (isset($_POST['submit'])) {
		if ($_POST["vercode"] != $_SESSION["vercode"] or $_SESSION["vercode"] == '') {
			echo "<script>alert('Incorrect verification code');</script>";
		} else {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$ad = "insert into user(username,password) values(?,?)";
			$stmt = $mysqli->prepare($ad);
			$stmt->bind_param("ss", $username, $password);
			$stmt->execute();
			$stmt->close();
			echo "<script>alert('Data added Successfully');</script>";
		}
	}
	?>
	<section>
		<div class="container">
			<form name="stmt" method="post">
				<table>
					<h2>Form Login</h2>
					<tr>
						<td><input type="text" name="username" placeholder="Username" required="required" /> </td>
					</tr>
					<tr>
						<td><input type="password" name="password" placeholder="Password" required="required" /></td>
					</tr>
					<tr>
						<td><input type="text" name="vercode" size="10" placeholder="Masukan Kode" required="required" />&nbsp;<br><img src="captcha.php" style="margin-top: 1%"></td>
					</tr>

					<td><input id="submit" type="submit" name="submit" value="Login" /></td>

				</table>
			</form>
		</div>
	</section>
</body>

</html>