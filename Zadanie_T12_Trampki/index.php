<!DOCTYPE HTML>
<html>
<head>
    <title>Formularz rejestracyjny</title>
    <meta charset="UTF-8">
</head>
<body>
<h1>Formularz konkursu ,,Podrasuj swoje buty!"</h1>
<p>Chcesz zamienić swoje stare trampki na nową parę zaprojektowanych przez siebie butów Forcefield? Napisz nam, dlaczego sądzisz, że powinieneś pożegnać się ze swoimi wysłużonymi butami, a być może zostaniesz jednym z laureatów konkursu!</p>

<form action="wynik.php" method="post">
    <p id="pd">Podstawowe dane:</p>
    Imie i Nazwisko:<br>
    <input type="text" name="iin" value=" " size="30"><br>
    E-mail:<br>
    <input type="text" name="em" value=" " size="30"><br>
    Telephone:<br>
    <input type="text" name="tlf" value=" " size="30"><br>
    Moje buty są TAKIE stare...<br>
    <textarea name="buty" >Moje buty są TAKIE stare...</textarea><br><br>

    <h1>Zaprojektuj własne trampki:</h1>
    <p id="wpb">Własny projekt butów</p>
    <p id="kol">Kolor (wybierz jeden):</p>
    <input type="radio" value="czerwony" name="czerw">Czerwony<br>
    <input type="radio" value="niebieski" name="nieb">Niebieski<br>
    <input type="radio" value="czarny" name="czarn">Czarny<br>
    <input type="radio" value="srebrny" name="srebr">Srebrny<br><br>

    <p id="opc">Opcje (możesz wybrać kilka)</p>
    <input type="checkbox" name="bs" id="bs">Błyszczące sznurówki<br>
    <input type="checkbox" name="ml" id="ml">Metalowe logo<br>
    <input type="checkbox" name="sp" id="sp">Świecące podeszwy<br>
    <input type="checkbox" name="om" id="om">Odtwarzanie MP3<br><br>

    <p id="rozm">Rozmiar</p>
    <p>Rozmiar zgodny ze standardowymi numerami butów:</p>
    <select id="nrb[]" name="nrb[]" multiple>
        <option value="36">36</option>
        <option value="37">37</option>
        <option value="38">38</option>
        <option value="39">39</option>
        <option value="40">40</option>
        <option value="41">41</option>
        <option value="42">42</option>
        <option value="43">43</option>
        <option value="44">44</option>
        <option value="45">45</option>
        <option value="46">46</option>
        <option value="47">47</option>
    </select>
    <br><br><input type="submit" value="Podrasuj swoje buty!" name="Podrasuj swoje buty!">
    <input type="submit" value="Resetuj" name="Resetuj">

</form>

</form>
</body>
</html>