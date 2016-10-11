<!DOCTYPE html>
	<html lang="en">
		<head>
			<title>My First View</title>
		</head>
		<body>
			<h1>Welcome to Rolldice! </h1>
			<h3>Shake em' up!</h3>
			<table style="width:100%">
				  <tr>
				    <td>Let's See What you have</td>
				     <td>Die 1:</td>
				     <td><?= $die1; ?></td>
				    <td>Die 2:</td> 
				    <td><?= $die2; ?></td>
				  </tr>
				</table>
		<h3>You rolled: <?= $die1 + $die2; ?></h3>
		</body>
	</html>