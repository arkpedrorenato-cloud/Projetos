<html>
	<head>
		<title>Exenplo PHP</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<center>

		<?PHP

			$numero = 1;
			$i = 1;

			while ($i <= 6){
				$numero = rand (1,6);
				$i = $i + 1;
				echo "<font color=\"red\">$numero</font><br>";
		}

		?>

		</center>
	</body>
</html>