<?php include 'functions.php'; ?>
<?php error_reporting(E_ALL & ~E_NOTICE ); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>groen</title>
    <link rel="stylesheet" href="styles/main.css">
  </head>
  <body class="groenTemplate">
    <header>
      <div class="titleBar">
        <h1 class="logo">Rhein</h1>
        <h1 class="pageTitle">Hijstabel</h1>
      </div>
      <nav>
        <ul>
          <li>
            <a onclick="window.open('groenTemplate.php');" href="#">bestand</a>
            <ul>
              <li><a onclick="window.open('groenTemplate.php');" href="#">subMenuItem</a></li>
            </ul>
          </li>
          <li>
            <a onclick="window.open('groenTemplate.php');" href="#">info</a>
            <ul>
              <li><a onclick="window.open('groenTemplate.php');" href="#">subMenuItem</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>
    <main>

    </main>
    <footer>
      <button onclick="window.close();" class="exitButton" type="button" name="button">exit</button>
    </footer>
  </body>
</html>
