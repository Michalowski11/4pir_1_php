<form action="zadanie.php" method="post">
    Podaj nazwę miasta: <input type="text" name="zmienna">
    <input type="submit" value="SPRAWDŹ" name="przycisk">
</form>

<?php
    if (isset($_POST['przycisk'])) {
        $connect = mysqli_connect("localhost", "root", "", "dane");
        $nm = $_POST['zmienna'];
        $quest = "SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto = '$nm'";
        $wynik = mysqli_query($connect, $quest);
        WHILE ($row = mysqli_fetch_array($wynik)) {
            echo "$row[0], $row[1]";

        }
    }