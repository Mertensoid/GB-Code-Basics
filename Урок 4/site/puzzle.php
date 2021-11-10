<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="content">
	<?php
		include "menu.php";
	?>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Игра в загадки</h1>

			<div class="box">

				<?php
					if (isset($_GET["userAnswer1"]) && isset($_GET["userAnswer2"]) && isset($_GET["userAnswer3"]) && isset($_GET["userAnswer4"])) {
						$userAnswer = $_GET["userAnswer1"];
						$score = 0;
						if ($userAnswer == "ведьма" || $userAnswer == "старуха с метлой"){
							$score++;
						}

						$userAnswer = $_GET["userAnswer2"];
						if ($userAnswer == "тыква" || $userAnswer == "тыковка"){
							$score++;
						}

						$userAnswer = $_GET["userAnswer3"];
						if ($userAnswer == "летучая мышь" || $userAnswer == "летучая мышка"){
							$score++;
						}

						$userAnswer = $_GET["userAnswer4"];
						if ($userAnswer == "вампир" || $userAnswer == "дракула"){
							$score++;
						}
						echo "Вы угадали " . $score . " загадок";
					}
				?>

				<form method="GET">
					<p>В остроконечной шляпе ходит,<br>Ужас на детей наводит,<br>Варит зелья в чугунке,<br>И летает в темноте!</p>
					<input type="text" name="userAnswer1">

					<p>У нее золотистая кожа,<br>А еще очень страшная рожа,<br>Она круглая, как шар,<br>И светится как фонарь.</p>
					<input type="text" name="userAnswer2">

					<p>Символ ночи, символ зла,<br>Вверх ногами спит она!</p>
					<input type="text" name="userAnswer3">

					<p>Жертву по ночам он ищет,<br>Чтобы кровью насладиться.<br>Может стать летучей мышью.<br>Только чеснока боится.</p>
					<input type="text" name="userAnswer4">

					<br>
					<input type="submit" value="Ответить" name="button1"></a>
				</form>
			</div>

        </div>
    </div>
</div>

	

</div>
<div class="footer">
	Copyright &copy; Matsuk Maksim
<div>


</body>
</html>