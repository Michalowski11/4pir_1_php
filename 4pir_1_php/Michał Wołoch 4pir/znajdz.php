<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>

<div id="baner">
    <h1>Grupa Polskich Kwiaciarni</h1>
</div>
<div id="lewy">
    <h2>Menu</h2>
    <ol>
        <li><a href="index.html">Strona główna</a></li>
        <li><a href="https://www.kwiaty.pl/" target="_blank">Rozpoznaj kwiaty</a></li>
        <li><a href="znajdz.php">Znjadź kwiaciarnię</a></li>
        <ul>
            <li>w Warszawie</li>
            <li>w Malborku</li>
            <li>w Poznaniu</li>
        </ul>
    </ol>
</div>
<div id="prawy">
    <h2>Znajdź kwiaciarnię</h2>
    <form action="znajdz.php" method="post">
        Podaj nazwę miasta: <input type="text" name="zm">
        <input type="submit" value="SPRAWDŹ" name="przycisk">
    </form>
    <?php
    if(isset($_POST['przycisk'])) {
        $zm = $_POST['zm'];
        $connect = mysqli_connect("localhost", "root", "", "kwiaciarnia");
        $zap = "SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto = '$zm';";
        $wynik = mysqli_query($connect, $zap);
        WHILE ($row = mysqli_fetch_array($wynik)) {
            echo "<h3>$row[0], $row[1]";
        }
    }

    ?>
</div>
<div id="stopka">
    <p>Stronę opracował: Michał Wołoch</p>
</div>

</body>
</html>