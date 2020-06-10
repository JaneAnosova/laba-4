<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Адаптивный сайт на Bootstrap 4 | Главная</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12" id="header">
                <img src="img/logo.png" alt="Логотип" class="col-lg-12">
            </div>
            <div class="col-lg-12">
                <!--Меню сайта-->
                    <div id="mainmenu">
                        <ul class="row">
                            <li class="col-12 col-md-3"><a href="index.php">Главная</a></li>
                            <li class="col-12 col-md-3"><a href="index.php?id=about">О компании</a></li>
                            <li class="col-12 col-md-3"><a href="index.php?id=contacts">Контакты</a></li>
                            <li class="col-12 col-md-3"><a href="index.php?id=form">Гостевая книга</a></li>
                        </ul>
                    </div>
                <!--Конец меню сайта-->
            </div>
            <?php
                include 'routing.php';
            ?>
            <div class="col-12" id="footer">
                <p>Этот сайт был сделан Евгенией Аносовой.</p>
			    <p>Все права защищены &copy;2020</p>
            </div>
        </div>
    </div>

    <!-- Подключение jQuery и Popper.js и Boostrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
