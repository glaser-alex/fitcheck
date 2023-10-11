<?php
if (empty($_COOKIE['username'])) {
    echo $_SERVER['PHP_SELF'];
    header('Location: https://'.$_SERVER['SERVER_NAME'].'/login');
}