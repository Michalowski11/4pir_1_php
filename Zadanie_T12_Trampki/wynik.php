<link rel="stylesheet" href="style.css">
<?php
echo "Dziękujemy! Rejestracja przebiegła pomyślnie.<br>";
echo "Wprowadzone dane:<br>";
echo "Imię i Nazwisko: " . trim($_POST['iin']) . "<br>";
echo "E-mail: " . trim($_POST['em']) . "<br>";
echo "Telephone: " . trim($_POST['tlf']) . "<br>";
echo "Zgłoszenie: " . trim($_POST['buty']) . "<br>";
echo "<p>Wybrałeś dla swoich butów:</p><br>";
echo "Kolor trampek: " . trim($_POST['kolor']) . "<br>";
echo "Dodatki: ";
if (!empty($_POST['opcje'])) {
    echo "<p>";
    foreach ($_POST['opcje'] as $wartosc) {
        echo "<p>$wartosc</p>";
    }
}
echo "Rozmiar trampek: " . trim($_POST['nrb']);