<?php

define("CLIENT_ID", "AVaZpYkhrEH8mBhhDon_T75ZG6Q_teszbbHrpFMOvV6L2HQUaS2Lm05JiuMhHjxkInjgylvvo-g0DjyX");
define("CURRENCY", "USD");

define("KEY_TOKEN", "APR.wqc-354*");
define("MONEDA", "$");

session_start();

$num_cart = 0;
if(isset($_SESSION['carrito']['productos'])){
    $num_cart = count($_SESSION['carrito']['productos']);
}

?>
