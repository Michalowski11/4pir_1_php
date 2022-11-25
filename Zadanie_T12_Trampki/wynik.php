<?php
echo "Dziękujemy! Rejestracja przebiegła pomyślnie.<br>";
echo "Wprowadzone dane:<br>";
echo "Imię i Nazwisko: " . trim($_POST['iin']) . "<br>";
echo "E-mail: " . trim($_POST['em']) . "<br>";
echo "Telephone: " . trim($_POST['tlf']) . "<br>";
echo "Zgłoszenie: " . trim($_POST['buty']) . "<br>";
echo "<p>Wybrałeś dla swoich butów:</p><br>";
echo "Kolor trampek: " . trim($_POST['kol']) . "<br>";
echo "Rozmiar trampek: ";
if (!empty($_POST['nrb[]'])) {
    echo "<p>";
    foreach ($_POST['nrb[]'] as $wartosc) {
        echo "$wartosc<";
    }
    echo "</p>";
} else {
    echo "<p>" . $_POST['nrb[]'] . " Nie wybrano.</p>";}
echo "Dodatki: " . trim($_POST['opc']) . "<br>";
?>