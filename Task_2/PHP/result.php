<?
function entry()
{
if(count($_GET) != 0)
{
$ip = trim($_GET['ip']);
$ip_true = "185.85.0.29";
$name = trim($_GET['name']);
$name_true = "PHP_manual";
$url = "https://www.php.net/";
$method = trim($_GET['method']);
$method_true = "GET";
if($ip == $ip_true || $name == $name_true || $method == $method_true)
{
print_r(get_headers($url));
    echo "<pre>";
echo $_SERVER['SERVER_NAME'];
    echo "</pre>";
    echo "<pre>";
echo $_SERVER['REQUEST_METHOD'];
    echo "</pre>";
    echo "<pre>";
echo $_SERVER['REMOTE_ADDR'];
    echo "</pre>";

}
else{
header("Location: end.php");
exit();
}
}
}
entry()
?>
