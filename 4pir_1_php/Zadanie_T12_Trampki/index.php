<!DOCTYPE HTML>
<html>
<head>
    <title>Formularz rejestracyjny</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Formularz konkursu ,,Podrasuj swoje buty!"</h1>
<p>Chcesz zamienić swoje stare trampki na nową parę zaprojektowanych przez siebie butów Forcefield? Napisz nam, dlaczego sądzisz, że powinieneś pożegnać się ze swoimi wysłużonymi butami, a być może zostaniesz jednym z laureatów konkursu!</p>

<form action="wynik.php" method="post">
    <p id="pd">Podstawowe dane:</p>
    Imie i Nazwisko:<br>
    <input type="text" name="iin" value=" " size="30"><br>
    E-mail:<br>
    <input type="email" name="em" value=" " size="30"><br>
    Telephone:<br>
    <input type="text" name="tlf" value=" " size="30"><br>
    Moje buty są TAKIE stare...<br>
    <textarea name="buty" >Moje buty są TAKIE stare...</textarea><br><br>

    <h1>Zaprojektuj własne trampki:</h1>
    <p id="wpb">Własny projekt butów</p>
    <p id="kol" name="kol">Kolor (wybierz jeden):</p>
    <input type="radio" value="czerwony" name="kolor">Czerwony<br>
    <input type="radio" value="niebieski" name="kolor">Niebieski<br>
    <input type="radio" value="czarny" name="kolor">Czarny<br>
    <input type="radio" value="srebrny" name="kolor">Srebrny<br><br>

    <p id="opc" name="opc">Opcje (możesz wybrać kilka)</p>
    <input type="checkbox" name="opcje[]" id="opcje" value="Błyszczące sznurówki">Błyszczące sznurówki<br>
    <input type="checkbox" name="opcje[]" id="opcje" value="Metalowe logo">Metalowe logo<br>
    <input type="checkbox" name="opcje[]" id="opcje" value="Świecące podeszwy">Świecące podeszwy<br>
    <input type="checkbox" name="opcje[]" id="opcje" value="Odtwarzanie MP3">Odtwarzanie MP3<br><br>

    <p id="rozm" name="rozm">Rozmiar zgodny ze standardowymi numerami butów:</p>
    <select id="nrb" name="nrb" multiple>
        <option value="36" id="rozmiar" name="rozmiar">36</option>
        <option value="37" id="rozmiar" name="rozmiar">37</option>
        <option value="38" id="rozmiar" name="rozmiar">38</option>
        <option value="39" id="rozmiar" name="rozmiar">39</option>
        <option value="40" id="rozmiar" name="rozmiar">40</option>
        <option value="41" id="rozmiar" name="rozmiar">41</option>
        <option value="42" id="rozmiar" name="rozmiar">42</option>
        <option value="43" id="rozmiar" name="rozmiar">43</option>
        <option value="44" id="rozmiar" name="rozmiar">44</option>
        <option value="45" id="rozmiar" name="rozmiar">45</option>
        <option value="46" id="rozmiar" name="rozmiar">46</option>
        <option value="47" id="rozmiar" name="rozmiar">47</option>
    </select>
    <br><br><input type="submit" value="Podrasuj swoje buty!" name="Podrasuj swoje buty!">
<input type="submit" value="Resetuj" name="Resetuj">

</form>

</form>
</body>
</html>