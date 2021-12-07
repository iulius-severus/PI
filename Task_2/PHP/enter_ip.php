<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/enter_ip.css">
    <title>Ввод IP-адреса</title>
</head>
<body>
<form class="in" action="result.php" method="get">
    <p class="start">Запрос к удаленному серверу</p>
    <p>
        Введите IP-адрес сервера </br> в формате 255.255.255.255 <input class="ip" pattern="^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$" name="ip">
    </p>
    <p>
        Введите имя сервера <input class="ip" type="text" name="name">
    </p>
    <p>
        Укажите метод отправки данных <input class="ip" type="text" name="method">
    </p>

    <div class="button"><button>Отправить запрос</button></div>
</form>
</body>
</html>
