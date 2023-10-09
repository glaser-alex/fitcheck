<?php

/******************************** Verbindungsaufbau zur Datenbank ********************************/
$server = "10.35.46.104:3306";
$db = "k208538_alex_glaser";
$user = "k208538_alexglaser";
$pwd = "uI%4m355x";

// try {
    $pdo = new PDO('mysql:host=10.35.46.104:3306;dbname=k208538_alex_glaser;charset=utf8', 'k208538_alexglaser', 'uI%4m355x');
    // $pdo = new mysqli($server, $user, $pwd, $db);
    // $pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
    // $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
// } catch (Exception $e) {
    // echo "Verbindung fehlgeschlagen!<br><br>$e";
// }


function tryLogin($username, $password) {
    global $pdo;
    
    $ergebniss = $pdo->query('SELECT * FROM alexglaserLogin');
  
    while ($row = $ergebniss->fetchObject()) {
      $password_aus_db = $row->pwd;
      $pw_verify = password_verify($password, $password_aus_db);
      // echo "User Passwort: ".$password."<br>Datenbank Passwort: ".$password_aus_db."<br>Verify: ".($pw_verify?"true":"false");
      if ($username == $row->username && $pw_verify) {
        echo "gefunden";
        // return true;
      }
      echo "nicht gefunden";
    }
  }