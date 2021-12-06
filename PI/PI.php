<?
session_start();
// Алгоритм, используемый для вычисления Pi построен на основе
//формулы Мэчина. Данная формула выбрана из-за своей краткости и простоты.
/*$P = 4 * (4 * atan(0.2) - atan(0.00418410041841));
echo $P . "</br>";
*/
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>Формула Мэчина:</div>
<div><img src="Image/Screenshot.jpeg"></div>
<form>
    <div>Укажите, какое количество знаков Вы хотели бы видеть после запятой для числа Pi</div>
    <input type="text" name="precision">
    <input type="submit">
</form>
<?
$_SESSION['precision'] = $_GET['precision'];
if (count($_GET) > 0)
    /*$a = 1 / 5;
    $b = 1 / 239;
    $P = 4 * (4 * atan($a) - atan($b));
    */
    $P = 4 * (4 * atan(0.2) - atan(0.00418410041841));
    $n = trim($_GET['precision']);
{
    /*
    echo "Число Pi равно:" . " ". round($P, (int)$n);
    */

    echo "Число Pi равно:" . " ". number_format((float)$P, (int)$n , '.', '');

}
?>
<!-- Проблема, которую не смог решить, заключается в том, что при открытии страницы в браузере сразу же выводится
значение "3". Однако, полагаю, что при первичном открытии страницы ничего выводится не должно(?).
 Кроме того, корректный вывод реализуется только до 16 символа после запятой (для number_format()). Начиная с 16-го симовола вывод
 некорректен. Возможно, делов в выбранной формуле для расчета.
 Также понимаю, что корректнее было бы использовать функцию round(), однако она значения только до 13-го символа.
 Поэтому остановился на number_format(), с попыткой явного преобразования типов в обоих случаях.
 -->
</body>
</html>
