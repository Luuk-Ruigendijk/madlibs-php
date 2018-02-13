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
				<p>Er zijn veel mensen die niet kunnen <?php echo $_POST["quest1"]; ?>. Neem bijvoorbeeld <?php echo $_POST["quest2"]; ?>. Zelfs met de hulp van een potloot of zelfs <?php echo $_POST["quest3"]; ?> kan <?php echo $_POST["quest2"]; ?> niet <?php echo $_POST["quest1"]; ?>. Dat heeft niet te maken met een gebrek aan <?php echo $_POST["quest4"]; ?>, maar met een teveel aan <?php echo $_POST["quest5"]; ?>. Te veel <?php echo $_POST["quest5"]; ?> leidt tot <?php echo $_POST["quest6"]; ?> en dat is niet goed als je wilt <?php echo $_POST["quest1"]; ?>. Helaas voor <?php echo $_POST["quest2"]; ?></p>
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