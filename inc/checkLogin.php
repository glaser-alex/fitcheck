<?php
if (!isset($_COOKIE['username'])) {
    header('Location: ../login?location='.$_SERVER['PHP_SELF']);
}