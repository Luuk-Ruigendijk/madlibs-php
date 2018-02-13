<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>mad libs</title>
		<link rel="stylesheet" type="text/css" href="graphics.css">
	</head>
	<body>
		<ul>
			<a href="#">Er heerst paniek...</a>
			<a href="Onkunde.php">Onkunde</a>
		</ul>
		<main>
			<h1>
				Er heerst paniek...
			</h1>
			<section id="questions">
				<p>Er heerst paniek in het koninkrijk <?php echo $_POST["quest3"]; ?>. Koning <?php echo $_POST["quest6"]; ?> is ten einde raad en als koning <?php echo $_POST["quest6"]; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["quest2"]; ?>.</p>
				<p>"<?php echo $_POST["quest2"]; ?>! Het is een ramp! Het is een schandel"</p>
				<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
				<p>"Mijn <?php echo $_POST["quest1"]; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST["quest5"]; ?> voor hem gekocht"</p>
				<p>"Majesteit, uw <?php echo $_POST["quest1"]; ?> komt vast vanzelf weer terug?"</p>
				<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST["quest8"]; ?> leren?"</p>
				<p>"Maar Sire, daar kunt u toch uw <?php echo $_POST["quest7"]; ?> voor gebruiken."</p>
				<p>"<?php echo $_POST["quest2"]; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
				<p>"<?php echo $_POST["quest4"]; ?>, Sire."</p>
			</section>
		</main>
		<footer>
			<p id="foots">
				Deze website is gemaakt door Luuk.
			</p>
		</footer>

	</body>
	<script type="text/javascript" src="script.js"></script>
</html