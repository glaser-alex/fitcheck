<nav class="top-nav">
    <a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>/home">
      <img src="https://<?php echo $_SERVER['SERVER_NAME']; ?>/img/logo.png" alt="logo" height="50">
    </a>
    <input id="menu-toggle" type="checkbox">
    <label class='menu-button-container' for="menu-toggle">
      <div class='menu-button'></div>
    </label>
    <ul class="menu">
      <a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>?jahreszeit=sommer">Sommer</a>
      <a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>?jahreszeit=herbst">Herbst</a>
      <a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>?jahreszeit=winter">Winter</a>
      <?php

        if ($_COOKIE['username'] == 'admin' || $_SESSION['username'] == 'admin') {
          echo "<a style='color: cyan;' href='https://".$_SERVER['SERVER_NAME']."/administration?action=einträge'>Login Einträge</a>";
          echo "<a href='https://".$_SERVER['SERVER_NAME']."/administration?action=nachrichten'>Nachrichten</a>";
          echo "<a style='color: red;' href='https://".$_SERVER['SERVER_NAME']."/administration?action=erstellen'>Login Tabelle zurücksetzen</a>";
          echo "<a style='color: lime;' href='https://".$_SERVER['SERVER_NAME']."/administration?action=anzeigen'>Login Tabelle anzeigen</a>";
        }

        if (!isset($_COOKIE['username'])) {
          echo "<a href='https://".$_SERVER['SERVER_NAME']."/login'>Login</a>";
        } else {
          echo "<a href='https://".$_SERVER['SERVER_NAME']."/login/logout.php'>Logout</a>";
        }
      ?>
      <a style="cursor: auto;"></a>
    </ul>
  </nav>