<html>
	<head>
		<title>Exenplo PHP</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<center>

		<?PHP

			$numero = 5;
			$i = 1;

			while ($i <= 10){
				$numero = 5 * $i;
				$i = $i + 1;
				echo "<font color=\"red\">$numero</font><br>";
		}

		?>

		</center>
	</body>
</html>