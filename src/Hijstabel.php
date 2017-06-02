<?php include 'functions.php'; ?>
<?php error_reporting(E_ALL & ~E_NOTICE ); ?>
<?php $mysql = new MysqliWrapper("83.82.240.2", "amin", "leon", "over_de_rhein"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>rood</title>
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
                    <li>
                        <a onclick="window.open('kabelchecklist.php');" href="#">kabelchecklist</a>
                    </li>
                    <li>
                        <a onclick="window.open('Hijstabel.php');" href="#">Hijstabel</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                selecteer een opdrachtnummer: <select onchange="document.getElementById('form').submit();" name="Opdrachtnummer">
                    <option value=""></option>
                    <?php
                      $opdrachtnummers = $mysql->select("SELECT Opdrachtnummer FROM Hijstesten2");
                    foreach ($opdrachtnummers as $key => $value) {
                        echo "<option value=\"$value[Opdrachtnummer]\"";
                        if ($_POST["Opdrachtnummer"] == $value["Opdrachtnummer"] && $_POST["Opdrachtnummer"] != "") {
                            echo " selected ";
                        }
                        echo ">$value[Opdrachtnummer]</option>";
                    }
                    ?>
                    <input type="submit" name="submit" value="klik">
                </select>
            </form>
            <?php
            $sql = "SELECT * FROM Hijstesten2";
            if ($_POST["Opdrachtnummer"] != "") {
              $sql .= " WHERE Opdrachtnummer = $_POST[Opdrachtnummer]";
            }
            echo $mysql->table($sql);
            $sql = "SELECT * FROM Opdrachten_1";
            if ($_POST["Opdrachtnummer"] != "") {
              $sql .= " WHERE Opdrachtnummer = $_POST[Opdrachtnummer]";
            }
            echo $mysql->table($sql);
            ?>
  </main>
  <footer>
    <button onclick="window.close();" class="exitButton" type="button" name="button">exit</button>
  </footer>
  </body>
  </html>
<?php $mysql->close(); ?>
