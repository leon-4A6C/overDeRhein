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
      <form action="<?php echo $_SERVER["php_self"] ?>" method="post">
        opdrachtnummer: <input type="text" name="opdrachtnummer" value=""><br>
        <b>keuring</b><br>
        keuringsdatum <input type="text" name="keuringsdatum" value=""><br>
        uitgevoerd door: <input type="text" name="uitgevoerd_door" value=""><br>

        <br><b>Materieel</b><br><br>

        <b>Hijskraan</b><br>
        Fabrikant: <input type="text" name="hijskraan_fabrikaat" value=""><br>
        Model / type: <input type="text" name="hijskraan_model_type" value=""><br>
        serienummer: <input type="text" name="hijskraan_serienummer" value=""><br>
        bedrijfsnummer: <input type="text" name="hijskraan_bedrijfsnummer" value=""><br>
        bouwjaar: <input type="text" name="hijskraan_bouwjaar" value=""><br>
      </form>
    </main>
    <footer>
      <button onclick="window.close();" class="exitButton" type="button" name="button">exit</button>
    </footer>
  </body>
</html>
