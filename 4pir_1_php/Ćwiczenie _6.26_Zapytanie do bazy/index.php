<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>wiczenie 6.26</title>
</head>
<body>
<header>
    <h1>Ćwiczenie 6.26</h1>
    <h2>Autor: Michał Wołoch 4pir_1</h2>
    <hr>
</header>
<section>
    <p>Z bazy danych o nazwie dane wyświetl dane pracowników z tabeli pracownicy.</p>
</section>

<?php
$do_bazy = mysqli_connect('localhost', 'root', '', 'dane');
if (!$do_bazy) {
    echo "Błąd połączenia z serwerem MySQL<br>";
?>
<?php
exit;
} else {
    $zapytanie = mysqli_query($do_bazy, 'SELECT * FROM pracownicy');
    if (!$zapytanie) {
        mysqli_close();
        echo "Błąd w zapytaniu<br>";

?>
<?php
exit;
    } else {
?>

<table>
    <tr>
        <td>ID</td>
        <td>Nazwisko</td>
        <td>Imię</td>
        <td>Stanowisko</td>

    </tr>
<?php
while ($wiersze = mysqli_fetch_row($zapytanie)) {
    echo "<tr>";
echo "<td>$wiersze[0]</td>";
echo "<td>$wiersze[1]</td>";
echo "<td>$wiersze[2]</td>";
echo "<td>$wiersze[3]</td>";
echo "</tr>";
}
?>
</table>
<?php
mysqli_close($do_bazy);
    }
}
?>
</body>
</html>