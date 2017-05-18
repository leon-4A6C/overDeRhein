<?php include 'functions.php'; ?>
<?php error_reporting(E_ALL & ~E_NOTICE ); ?>
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
                </ul>
            </nav>
        </header>
        <main>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <select name="Opdrachtnummer">
                    <option value=""></option>
                    <?php
                    $opdrachtnummers = sqlSelect("83.82.240.2", "amin", "leon", "over_de_rhein", "SELECT Opdrachtnummer FROM Hijstesten2");
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
            if (isset($_POST["submit"]) && $_POST["Opdrachtnummer"] != "") {
                $sql = "SELECT * FROM Hijstesten2 WHERE Opdrachtnummer = $_POST[Opdrachtnummer]";
            } else {
                $sql = "SELECT * FROM Hijstesten2";
            }
            echo twoDimenTable(sqlSelect("83.82.240.2", "amin", "leon", "over_de_rhein", $sql));
            ?>
        </main>
        <footer>
            <button onclick="window.close();" class="exitButton" type="button" name="button">exit</button>
        </footer>
    </body>
</html>
