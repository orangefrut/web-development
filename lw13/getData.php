<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/style_data.css">
  <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&family=Roboto+Condensed&display=swap" rel="stylesheet">
  <title>Форма получения данных</title>
</head>
<body>
	<form action="http://localhost:8080/viewData.php"> 
		<input class="record-form__email record-place" type="text" name="email" placeholder="Email">
		<input class="record-form__button" type="submit" value="Получить данные">
	</form>
	<?php include 'getDataAlgorithm.php'; ?>
</body>
</html>