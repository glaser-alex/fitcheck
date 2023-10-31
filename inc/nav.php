<nav class="top-nav">
    <a href="https://<?= $_SERVER['SERVER_NAME'] ?>">
      <img src="https://<?= $_SERVER['SERVER_NAME'] ?>/favicon.ico" alt="logo" height="50">
    </a>
    <input id="menu-toggle" type="checkbox">
    <label class='menu-button-container' for="menu-toggle">
      <div class='menu-button'></div>
    </label>
    <ul class="menu">
      <a href="https://<?= $_SERVER['SERVER_NAME'] ?>/view/sommer">Sommer</a>
      <a href="https://<?= $_SERVER['SERVER_NAME'] ?>/view/herbst">Herbst</a>
      <a href="https://<?= $_SERVER['SERVER_NAME'] ?>/view/winter">Winter</a>

      <?php if (@$_COOKIE['username'] == 'admin'): ?>
        <a style='color: cyan;' href='https://<?= $_SERVER['SERVER_NAME'] ?>/administration?action=einträge'>Login Einträge</a>
        <a href='https://<?= $_SERVER['SERVER_NAME'] ?>/administration?action=nachrichten'>Nachrichten</a>
        <a style='color: red;' href='https://<?= $_SERVER['SERVER_NAME'] ?>/administration?action=erstellen'>Login Tabelle zurücksetzen</a>
        <a style='color: lime;' href='https://<?= $_SERVER['SERVER_NAME'] ?>/administration?action=anzeigen'>Login Tabelle anzeigen</a>
      <?php endif ?>

      <a class="space-line"></a>

      <?php if (!isset($_COOKIE['username'])): ?>
        <a href='https://<?= $_SERVER['SERVER_NAME'] ?>/login'>Login</a>
      <?php else: ?>
        <a href='https://<?= $_SERVER['SERVER_NAME'] ?>/login/logout.php'>Logout</a>
      <?php endif ?>

      <a style="cursor: auto;"></a>
    </ul>
  </nav>
  