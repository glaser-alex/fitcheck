<?php
if (!isset($_COOKIE['username'])) {
    header('Location: /fitcheck/login/index.php?location='.$_SERVER['PHP_SELF']);
}