<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 2</h1>
    <h2>Autor: Michał Wołoch 4pir_1</h2>
    <hr>
</header>
<section>
    <p>Napisz program, który dla czterech liczb rzeczywistych oblicza i wyświetla ich średnią arytmetyczną. Wynik wyświetl w dwóch postaciach. Bez zaokrąglenia oraz z zaokrągleniem do trzech miejsc po przecinku.</p>
    <form action="Z02.php" method="post">
        <label for="liczba a">Podaj liczbę a:</label><input type="text" id="liczba a" name="liczba a">
        <label for="liczba b">Podaj liczbę a:</label><input type="text" id="liczba b" name="liczba b">
        <label for="liczba c">Podaj liczbę a:</label><input type="text" id="liczba c" name="liczba c">
        <label for="liczba d">Podaj liczbę a:</label><input type="text" id="liczba d" name="liczba d">
        <input type="submit" value="wyślij">

    </form>
    <?php
    if(isset($_POST['liczba_a'])) {
        $a = $_POST['liczba_a'];
        $b = $_POST['liczba_b'];
        $c = $_POST['liczba_c'];
        $d = $_POST['liczba_d'];

        $srednia = ($a + $b + $c + $d) / 4;
        $srednia_zaokroglana = round($srednia,3);
        echo "<br>Średnia niezaokrąglona = $srednia";
        echo "<br>Średnia zaokrąglona = $srednia_zaokroglana";
    }
?>
</section>
</body>
</html>