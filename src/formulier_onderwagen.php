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

        <b>Onderwagen:</b><br>
        Fabrikaat: <input type="text" name="onderwagen_fabrikaat" value=""><br>
        model / type: <input type="text" name="onderwagen_model_type" value=""><br>
        identieficatienummer: <input type="text" name="onderwagen_identieficatienummer" value=""><br>
        bedrijfsnummer: <input type="text" name="onderwagen_bedrijfsnummer" value=""><br>

        <b>Uitvoering Onderwagen:</b><br>
        <input type="radio" name="uitvoering" value="banden">op banden (zelfrijdend)<br>
        <input type="radio" name="uitvoering" value="truck">op truck<br>
        <input type="radio" name="uitvoering" value="weg">weg-/ruwterrein(kenteken)<br>
        <input type="radio" name="uitvoering" value="rupsen">op rupsen<br>
      </form>
    </main>
    <footer>
      <button onclick="window.close();" class="exitButton" type="button" name="button">exit</button>
    </footer>
  </body>
</html>
