<?php
/******************************** Verbindungsaufbau zur Datenbank ********************************/
// für localhost
if ($_SERVER['SERVER_NAME'] == 'localhost') {
  $pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
} else {
  try {
    $pdo = new PDO('mysql:host=10.35.46.104:3306;dbname=k208538_alex_glaser;charset=utf8', 'k208538_alexglaser', 'uI%4m355x');
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // echo "Verbindung erfolgreich";
  } catch (Exception $e) {
    echo "Verbindung fehlgeschlagen!<br><br>$e";
  }
}

 function tryLogin($username, $password) {
    global $pdo;
    
    $ergebniss = $pdo->query('SELECT * FROM alexglaserLogin');
  
    while ($row = $ergebniss->fetchObject()) {
      $password_aus_db = $row->password;
      $pw_verify = password_verify($password, $password_aus_db);
      // echo "User Passwort: ".$password."<br>Datenbank Passwort: ".$password_aus_db."<br>Verify: ".($pw_verify?"true":"false");
      if ($username == $row->username && $pw_verify) {
        echo "gefunden<br>";
        return true;
      }
      echo "nicht gefunden<br>";
    }
  }