<Doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<title>Podsumowanie zamówienia</title>
</head>

<body>

<?php
		$poczkow = $_POST['poczkow'];
		$grzebieni = $_POST['grzebieni'];
		$suma = 0.99*$poczkow + 1.39*$grzebieni;

echo<<<END



		 <h2>Podsumowanie zamowienia</h2>

		 <table border="1"cellpadding="10" cellspacing="0">
		 	<tr>
		 	<td>Pączek (0.99PLN/szt.)</td><td>$poczkow</td>
		 	</tr>
		 	<tr>
		 	<td>Grzebień (1.39 PLN/szt.)</td><td>$grzebieni</td>
		 	</tr>
		 	<tr>
		 	<td>SUMA</td><td>$suma PLN</td>
		 	</tr>
		 </table>

		 <br/><a href="index.php">Powrót do strony zamówienia</a>
END;


?>
	

	
</body>
</html>