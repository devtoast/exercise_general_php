<!DOCTYPE html>
<html lang="de">

<head>
    <title>exercise_01_php_basics</title>
</head>

<body>
    <h1>php_basics</h1>
    <br>
    <h3>VARIABLEN – <mark>$</mark></h3>
    <h5>Beispiel: $name = "Klaus";</h5>

    <?php

    // echo = Ausgabe in php
    echo "Hallo Welt";

    // mit HTML-Tag umbrechen
    echo "<br>";


    // $… Variable in php – Trennen einzelner Abschnitte mit "." (Punkt) (statt +)!
    $alter = 45;
    echo "Alter ist " . $alter; // Abschnittstrennung mit "." !!

    echo "<br>";

    // Kommazahl (float) einer Variablen zuweisen
    $groesse = 1.5;
    echo $groesse;

    echo "<br>";

    // Text (string) einer Variablen zuweisen
    $name = "Max";
    echo $name;
    echo "<br>";

    ?>

    <h3>Möglichst keine Hochkomma ' verwenden – sonst passiert daß!</h3>

    <?php
    // Keine Hochkomma!!!
    $namen2 = "Klaus";
    echo 'Ich heiße $namen2';
    ?>

    <h3>Anführungszeichen " verwenden</h3>

    <?php
    $namen2 = "Klaus";
    echo "Ich heiße $namen2";
    echo "<br>";
    ?>

    <?php
    // Geschwungene Klammer definiert die Variable exakt in der Ausgabe – keine wilden Konstruktionen notwendig
    echo "Ich habe {$namen2}is Jacke an";
    echo "<br>";

    $textExtension1 = " und die ist zu klein!";
    echo "Ich habe {$namen2}is Jacke an" . $textExtension1;
    echo "<br>";
    ?>

    <br>
    <h3>Datentyp Boolan (Bool) – true, false und null</h3>

    <?php

    $true = true;
    echo "{$true}" . " – true ist eins (true)";

    echo "<br>";

    $false = false;
    echo ">{$false}<" . " – da is nix! (false)";

    echo "<br>";

    $null = null;
    echo ">{$null}<" . " – da is auch nix! (null)";
    echo "<br>";
    ?>


    <br>
    <br>

    <h3>KONSTANTEN – neue Schreibweise – <mark>const</mark>!</h3>
    <h5>Beispiel: const datenbank = "Irgendwas";</h5>

    <?php
    // ALTE Schreibweise
    define("datenbank", "jwe22");
    echo datenbank;
    echo "<br>";

    // NEUE Schreibweise
    const datenbank2 = "jwe23";
    echo datenbank2;
    echo "<br>";
    ?>

    <br>
    <br>

    <div class="underline" style="border-bottom: 1px solid #000"></div>

    <br>
    <br>

    /////////////////////////////////////

    <h3>ARRAYS – <mark>array</mark></h3>
    <h5 style="color: #DC143C;">1. Numerische Arrays – Index ist Zahl (Integer)</h5>

    <?php

    // Numerische Arrays
    $namenArray = array("Fritz", "Max", "Klaus");
    echo $namenArray[0] . " und " . $namenArray[2];
    //Ausgabe pos 0 und 2
    echo "<br>";
    echo "{$namenArray[0]} und {$namenArray[2]}";
    //Alternative Schreibweise
    echo "<br>";

    $namenArray[] = "Anna";
    // Wert im Nachhinein anhängen

    //
    echo "<pre>";
    print_r($namenArray);
    echo "</pre>";
    //

    /* <pre> Text in einem <pre>Element wird in einer Schriftart mit fester Breite angezeigt, 
    und der Text behält sowohl Leerzeichen als auch Zeilenumbrüche bei. 
    Der Text wird genau so angezeigt, wie er im HTML-Quellcode steht. */

    /* Die Funktion print_r() druckt die Informationen über eine Variable in einer für Menschen besser lesbaren Weise. */

    echo "<br>";

    // Index als Variable
    $index = 3;
    echo $namenArray[$index];
    echo "<br>";
    echo $namenArray[$index - 1];
    echo "<br>";
    ?>

    <h5 style="color: #DC143C;">2. Assoziative Arrays – Index ist Text (String)</h5>

    <?php
    // Assoziative Arrays (Index ist ein Text!!)
    $personen = array("Vorname" => "Klaus", "Nachname" => "Maier", "Alter" => "45", "Ort" => "Salzburg");
    echo $personen["Vorname"];
    echo "<br>";

    // Nur zum Debugging
    echo "<pre>";
    print_r($personen);
    echo "</pre>";
    //

    // Ausgabe – Hr. Maier (45) aus Salzburg.
    echo "Hr. {$personen["Nachname"]} ({$personen["Alter"]}) aus {$personen["Ort"]}.";
    echo "<br>";
    // oder
    echo "Hr. " . $personen["Nachname"] . " (" . $personen["Alter"] . ") " . "aus " . $personen["Ort"] .  ".";
    echo "<br>";

    $personen["Guthaben"] = 50;
    // Wert im Nachhinein anfügen

    // Nur zum Debugging
    echo "<pre>";
    print_r($personen);
    echo "</pre>";
    //
    ?>

    <h5 style="color: #DC143C;">3. Mehrdimensionale Arrays – Arrays in Array</h5>

    <?php
    // Mehrdimensionale Arrays – Arrays in Array (verschachtelt)
    $personenliste = array(

        array(
            "Vorname" => "Lisa",
            "Nachname" => "Bauer",
            "Alter" => "36",
            "Ort" => "Wien",
            "Guthaben" => "160"
        ),
        array(
            "Vorname" => "Gabriel",
            "Nachname" => "Lueger",
            "Alter" => "22",
            "Ort" => "Oberndorf",
            "Guthaben" => "80"
        ),
        $personen, // Bestehendes Array "von Oben" anfügen 
    );
    echo "<br>";

    // Nur zum Debugging
    echo "<pre>";
    print_r($personenliste);
    echo "</pre>";
    //

    // Ausgabe – Wien
    echo $personenliste[0]["Ort"];
    echo "<br>";
    // Ausgabe – Hr. Lueger aus Oberndorf.
    echo "Hr. {$personenliste[1]["Nachname"]} aus {$personenliste[1]["Ort"]}.";
    echo "<br>";

    // Ändern von Arraywerten
    $personenliste[0]["Alter"] = 33;
    echo $personenliste[0]["Alter"];

    // Nur zum Debugging
    echo "<pre>";
    print_r($personenliste);
    echo "</pre>";
    //
    ?>

    <br>
    <br>

    <div class="underline" style="border-bottom: 1px solid #000"></div>


    /////////////////////////////////////

    <br>
    <br>
    <h3>IF ELSE Anweisungen (Statements) – <mark>if / else if / else</mark></h3>
    <h5 style="color: #DC143C;">Verschiedene Aktionen basierend auf verschiedenen Bedingungen ausführen / Kontrolle</h5>

    <?php

    $stunde = date("G"); // Wert 0 – 23 / Stunden
    echo $stunde;
    echo "<br>";

    $uhrzeit = date("h:i:s"); // Wert 03:45:46 – Stunde:Minute:Sekunde
    echo $uhrzeit;
    echo "<br>";

    $tag = date("l"); // Wert Mo – Su
    echo $tag;
    echo "<br>";

    $monat = date("F"); // Wert Monat
    echo $monat;
    echo "<br>";

    $jahr = date("Y"); // Wert Jahr
    echo $jahr;
    echo "<br>";

    /*
    >= – Größer od. gleich
    <= – Kleiner od. gleich
    && – Und
    || – Oder
    == – Ist
    != – Ist NICHT
    */

    // 0-5: Schlaf gut!
    // 6-9: Guten morgen!
    // 12 / 18: Mahlzeit!
    // 19 - 23: Gute Nacht!
    // sonst: Hallo.

    // Mit Integer (Nummer)
    if ($stunde <= 5) {
        echo "Schlaf gut!";
    } else if ($stunde >= 6 && $stunde <= 9) {
        echo "Guten Morgen!";
    } else if ($stunde == 12 || $stunde == 18) {
        echo "Mahlzeit!";
    } else if ($stunde >= 19) {
        echo "Gute Nacht!";
    } else {
        echo "Hallo!";
    }

    echo "<br>";

    // Mit String
    if ($tag == "Tuesday") {
        echo "Heute ist Dienstag!";
    } elseif ($tag != "Tuesday") {
        echo "Heute ist nicht Dienstag!";
    } else {
        echo "Heute ist anscheined gar kein Tag ;)";
    }

    echo "<br>";
    ?>
    <br>
    <br>

    <div class="underline" style="border-bottom: 1px solid #000"></div>


    /////////////////////////////////////

    <br>
    <br>
    <h3>FUNKTIONEN<mark></mark></h3>
    <h5 style="color: #DC143C;">Funktionen für Strings</h5>

    <?php

    $text = "strtolower – String in Kleinbuchstaben";
    echo strtolower($text);
    echo "<br>";

    $text2 = "mb_strtolower – (mb - Multi Byte) bei z.B. Umlauten – belegen 2 Speicherplätze";
    echo mb_strtolower($text2);
    echo "<br>";

    echo "<br>";

    $text3 = " trim – Leerzeichen vor und nach einem String entfernen  ";
    echo trim($text3);
    echo "<br>";

    $text4 = " trim – Leerzeichen vor und nach einem String entfernen  ";
    echo trim($text4, "tren ");
    echo "<br>";
    // trim stutzt Leerzeichen IMMER von außen nach innen (links UND rechts)
    // "tren" t von links - ren von rechts - Leerzeichen von beiden Seiten

    echo "<br>";

    $text5 =
        "pre – Text in einem HTML -pre- Element wird in einer Schriftart mit fester Breite angezeigt, 
    und der Text behält sowohl Leerzeichen als auch Zeilenumbrüche bei. 
    Der Text wird genau so angezeigt, wie er im HTML-Quellcode steht.";

    //
    echo "<pre>";
    print_r($text5);
    echo "</pre>";
    //

    /* <pre> Text in einem <pre>Element wird in einer Schriftart mit fester Breite angezeigt, 
    und der Text behält sowohl Leerzeichen als auch Zeilenumbrüche bei. 
    Der Text wird genau so angezeigt, wie er im HTML-Quellcode steht. */

    /* Die Funktion print_r() druckt die Informationen über eine Variable in einer für Menschen besser lesbaren Weise. */

    echo "<br>";

    $text6 = "strip_tags – HTML-Tags aus einem String enfernen – <strong>fett</strong> und <em>kursiv</em>";
    echo strip_tags($text6);
    echo "<br>"; // 1. text6 wird erst nach echo br angezeigt??
    echo strip_tags($text6, "<strong>");

    //
    echo "<pre>";
    print_r($text6);
    echo "</pre>";
    //

    echo "<br>";

    $text7 = "strlen – Länge eines Strings zählen"; //39 = zu viel! Umlaute zählen doppelt!!
    echo $text7;
    echo "<br>";
    echo strlen($text7);
    echo "<br>";

    $text8 = "mb_strleng – Länge eines Strings zählen"; // 39 = ok! Umlaute zählen nur noch einfach!! 
    echo $text8;
    echo "<br>";
    echo mb_strlen($text8);
    echo "<br>";

    echo "<br>";

    $text9 = "ß"; // 2 Speicherplätze!
    echo $text9;
    echo "<br>";
    echo strlen($text9);
    echo "<br>";

    echo "<br>";


    $text10 = "substr – Teil eines Strings extrahieren";
    echo $text10;
    echo "<br>";
    echo substr($text10, 3, 10); // ACHTUNG Leerzeichen zählen auch doppelt!!!
    echo "<br>";
    echo mb_substr($text10, 3, 10); // Wieder mb_ (MultiByte) !!
    echo "<br>";
    // 3 mögliche Parameter 1. was ($text10)- 2. ab wann (start = 0!! (3)) - 3. wieviele Zeichen (10)

    echo "<br>";

    $text11 = "nl2br (new line to break) – Zeilenumbrüche in -br- umwandeln";
    echo $text11;
    echo "<br>";

    echo "<br>";

    $text12 = "Hier kommt ein Umbruch
    und noch ein Umbruch
    und ein Umbruch
    geht noch.";
    echo nl2br($text12);
    echo "<br>";

    // nl2br – Text wird wie im Code geschrieben dargestellt
    ?>

    <br>
    <br>
    <h5 style="color: #DC143C;">Funktionen für Arrays</h5>

    <?php

    $textArray1 = "count – Elemente (Werte) in einem Array zählen";

    echo $textArray1;
    echo "<br>";
    $namen = array("Max", "Max", "Klausi", "Prisca", "Herbert", "Susi",);
    echo "{$namen[0]} {$namen[1]} {$namen[2]} {$namen[3]} {$namen[4]} {$namen[5]}";
    echo "<br>";
    echo count($namen);
    echo "<br>";

    //
    echo "<pre>";
    print_r($namen);
    echo "</pre>";
    //
    echo "<br>";

    echo "<br>";

    $textArray2 = "array_rand – Einzelnen Arrayinhalt zufällig ausgeben (INDEX 0, 1…)";

    echo $textArray2;
    echo "<br>";
    echo array_rand($namen);
    echo "<br>";
    // Gibt die zufällige Arrayposition aus (0, 1…)

    $randomArrayIndex = array_rand($namen); // Wert in Variable gespeichert
    echo $namen[$randomArrayIndex];
    echo "<br>";
    // Gibt den zufällige Arrayinhalt aus (Klausi, Susi…)

    echo "<br>";

    $textArray3 = "array_unique – Doppelte Werte entfernen – ACHTUNG auf Index (gelöschter Wert fehlt)!";
    echo $textArray3;
    echo "<br>";

    $eindeutig = array_unique($namen);
    echo count($eindeutig); // 5 "eindeutige" Werte – einer wurde gelöscht (war doppelt vorhanden)
    echo "<br>";

    // ACHTUNG auf Index
    echo "<pre>";
    print_r($eindeutig);
    echo "</pre>";
    //
    echo "<br>";


    $textArray4 = "in_array – Prüfen ob ein Wert in einem Array existiert";
    echo $textArray4;
    echo "<br>";

    echo ">" . in_array("Heidi", $namen) . "<"; // Heidi gibt`s nicht
    echo "<br>";
    echo in_array("Klausi", $namen); // Klausi ist 1x vorhanden – echo = 1
    echo "<br>";

    $i = in_array("Prisca", $namen);

    if ($i) {
        echo "Dieser Name existiert";
    } else {
        echo "DieserName existiert nicht!";
    }
    echo "<br>";

    echo "<br>";

    $textArray5 = "asort – Array aufsteigend alphabetisch nach Namen sortieren (A – Z)";
    echo $textArray5;
    echo "<br>";

    asort($eindeutig);

    //
    echo "<pre>";
    print_r($eindeutig);
    echo "</pre>";
    //
    echo "<br>";

    $textArray6 = "array_push – Wert im Nachhinein zu Array hinzufügen";
    echo $textArray6;
    echo "<br>";

    array_push($eindeutig, "Lorenz", "Anna"); // Vorteil – Mehr als ein Wert möglich

    // Auch möglich – aber nur einzelne Werte – $eindeutig[] = "Patrick";

    //
    echo "<pre>";
    print_r($eindeutig);
    echo "</pre>";
    //

    echo "<br>";

    $textArray7 = "sort – Sortiern und Indizes neu zuweisen von A – Z UND numerisch von 0 – X";
    echo $textArray7;
    echo "<br>";

    sort($eindeutig);

    //
    echo "<pre>";
    print_r($eindeutig);
    echo "</pre>";
    //

    echo "<br>";
    ?>

    <br>
    <h5 style="color: #DC143C;">Eigenfunktionen</h5>

    <?php

    $efText1 = "Umrechnung von °C in °F – °F in °C";
    echo $efText1;
    echo "<br>";

    // °F = °C * 1.8 + 32  – Achtung Komma mit Punkt schreiben
    function celsiusToFarenheit($c)
    {
        $farenheit = $c * 1.8 + 32;
        return $farenheit;
    }
    echo celsiusToFarenheit(35);
    echo "<br>";

    // °C = (°F - 32) * 5 / 9;
    function farenheitToCelsius($f)
    {
        $celsius = ($f - 32) * 5 / 9;
        return $celsius;
    }
    echo farenheitToCelsius(95);
    echo "<br>";

    echo "<br>";

    $efText2 = "Datum neu formatieren";
    echo $efText2;
    echo "<br>";

    $datum_mysql = "2022-04-17";
    // Ausgabe soll sein 17.04.22

    function formatDate($dateFalse)
    {
        $day = substr($dateFalse, 8, 2);
        $month = substr($dateFalse, 5, 2);
        $year = substr($dateFalse, 0, 4);
        return "{$day}.{$month}.{$year}";
    }
    echo formatDate($datum_mysql);

    echo "<br>";



    /*
    function formatDate2($dateFalse2)
    {
        $dateFalse2 = "2022-04-17";
        $date = array();
        $date = array_push($date, $dateFalse2, "test");
        return $date;
        echo $date;
    }

    echo formatDate2($dateFalse2);

    echo "<br>";
    echo formatDate2($datum_mysql);
    echo "<br>";


    //
    echo "<pre>";
    print_r(formatDate2($datum_mysql));
    echo "</pre>";
    //
    */








    ?>








</body>

</html>