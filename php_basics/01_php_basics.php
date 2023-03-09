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



    <!-- ARRAYS ///////////////////////////////////// -->



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



    <!-- KONTROLL Anweisungen IF ELSE ///////////////////////////////////// -->



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



    <!-- FUNKTIONEN ///////////////////////////////////// -->



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

    $efText2 = "substr - Datum neu formatieren";
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
    echo "<br>";


    $efText3 = "explode - Datum neu formatieren";
    echo $efText3;
    echo "<br>";

    function formatDate2($datum_falsch)
    {
        $teile = explode("-", $datum_falsch);
        return $teile[2] . "." . $teile[1] . "." . $teile[0];
    }
    echo formatDate2($datum_mysql);
    //explode - Teilt einen String mithilfe eines Strings (Zeichens)
    // Der explode-string der zum Teilen verwendet wird 
    // ist in diesem Fall "-" der Bindestrich
    // Werte werden in ein Array gespeichert

    echo "<br>";

    $datum_mysql = explode("-", $datum_mysql,);
    // Werte werden in ein Array gespeichert
    //
    echo "<pre>";
    print_r($datum_mysql);
    echo "</pre>";
    //

    echo "<br>";

    echo date("l.d.m.y");
    // Mit date Funktion Datum ausgeben - (day.month.year)
    echo "<br>";
    echo date("Y.m.d");
    // Mit date Funktion Datum ausgeben - (Year.month.day) Y gross = 4stellig
    echo "<br>";
    echo "<br>";

    // Datum auf Deutsch
    /*
    $date = new DateTime('2013-02-25');
    echo $date;

    // Unser internationalisiertes Datum
    $formatter = new IntlDateFormatter(
        "de-DE",
        IntlDateFormatter::LONG,
        IntlDateFormatter::NONE,
        "Europe/Berlin",
        IntlDateFormatter::GREGORIAN,
        "EEEE', der' dd. MMMM YYYY"
    );
    echo $formatter->format($date); // Montag, der 25. Februar 2013
    */

    echo "<br>";


    $efText4 = "strlen - Text abschneiden und Wert anhängen";
    echo $efText4;
    echo "<br>";

    $text = "1234567890abcde";
    // Nach 10 Zeichen abschneiden und … anhängen

    function textCutter($textTooLong)
    {
        $textLength = mb_strlen($textTooLong);
        // Textlänge = MultByte_Stringlänge(Text aus Varible)
        echo $textLength;
        echo "<br>";

        if ($textLength >= 10) {
            return substr($textTooLong, 0, 10) . "…";
        } else {
            return $textTooLong;
            // return "{$textTooLong}";
            // return "$textTooLong";
        }
        // if Textlänge ist größer od. geich 10 
        // gib die Positionen (von 0(Start oist 0!!) – 10) aus und hänge … an
    }

    echo textCutter($text);


    echo "<br>";


    // 2 Version: variabel einstellbare Textlänge mit zweitem Parameter
    $text2 = "lskdjfalsdflksdjsdfhdfdfgsdfhg";
    function textCutter2($textTooLong, $length = 5)
    {
        $textLength = mb_strlen($textTooLong);
        // Textlänge = MultByte_Stringlänge(Text aus Varible)
        echo $textLength;
        echo "<br>";

        if ($textLength > $length) {
            return substr($textTooLong, 0, $length) . "…";
        } else {
            return $textTooLong;
            // return "{$textTooLong}";
            // return "$textTooLong";
        }
        // if Textlänge ist größer od. geich 10 
        // gib die Positionen (von 0(Start oist 0!!) – 10) aus und hänge … an
    }

    echo textCutter2($text2, 20);

    ?>


    <br>
    <br>

    <div class="underline" style="border-bottom: 1px solid #000"></div>



    <!-- SCHLEIFEN ///////////////////////////////////// -->



    <br>
    <br>
    <h3>Schleifen – <mark>while / foreach / for</mark></h3>
    <h5 style="color: #DC143C;"></h5>

    <?php

    // WHILE
    $efText4 = nl2br("while - Durchläuft einen Codeblock,
    solange die angegebene Bedingung wahr ist.
    Es wird IMMER mindestens EIN Schleifendurchlauf ausgeführt!
    Vorsicht Endlos-Schleife!! (set_time_limit()).");
    echo $efText4;
    echo "<br>";
    echo "<br>";

    set_time_limit(1);
    // limitiert Ausführungszeit auf 1 Sek. - Vorteil: Bricht bei Endlosschleife ab

    $whileInt = 1;
    while ($whileInt <= 10) {
        echo $whileInt++ . " ";
    };

    echo "<br>";

    $whileInt2 = 5;
    while ($whileInt2 <= 10) {
        echo $whileInt2++ . " ";
    };
    // Vorsicht vor Endlos-Schleifen! – set_time_limit(1);

    echo "<br>";
    echo "<br>";


    // FOREACH
    $efText5 = nl2br("foreach - Super für Arrays!
    Die Arraywerte werden in eine seperate Variable gespeichert –
    Indizes können auch mit durchlaufen werden
    KANN NICHT ENDLOS SEIN!");
    echo $efText5;
    echo "<br>";
    echo "<br>";

    $farbenArr = array("Blau", "Grün", "Rot", "Cyan", "Magenta", "Yellow");
    // Numerisches Array

    //
    echo "<pre>";
    print_r($farbenArr);
    echo "</pre>";
    //

    foreach ($farbenArr as $farbe) {
        echo $farbe . " ";
    }
    echo "<br>";
    echo "<br>";
    foreach ($farbenArr as $index => $farbe) {
        echo $index . " " . $farbe . " ";
        // echo "{$index} {$farbe}";
        echo "<br>";
        echo "Die Arrayposition {$index} ist {$farbe}";
        echo "<br>";
    }


    echo "<br>";
    echo "<br>";


    $toolArr = array(
        "Hammer",
        "Amboss",
        "Schraubenzieher",
        "Hammer",
        "Schraubzwinge",
        "Stemmeisen",
        "Säge",
        "Hobel"
    );

    //
    echo "<pre>";
    print_r($toolArr);
    echo "</pre>";
    //


    // Tolle Array-Sortiermaschine
    function arraySorter($arrayContent)
    {
        $arraySorted = array_unique($arrayContent);
        asort($arraySorted);
        sort($arraySorted);

        return $arraySorted;
    }


    //
    echo "<pre>";
    print_r(arraySorter($toolArr));
    echo "</pre>";
    //


    foreach (arraySorter($toolArr) as $tool) {
        echo $tool;
        echo "<br>";
    }

    echo "<br>";

    foreach (arraySorter($toolArr) as $index => $tool) {
        echo $index . " " . $tool;
        echo "<br>";
    }
    // Tolle Array-Sortiermaschine END



    echo "<br>";
    echo "<br>";


    // FOR SCHLEIFE
    $efText6 = nl2br("for - Schleife
    = vereinfachte Form von while-Schleifen –
    for (1. \$index=1;  2. \$index <= 9;  3. \$index++)
    1. Ausgangswert (Variable) = 1, 
    2. Ausführungsbedingungen (solange Index = kleiner/gleich 9), 
    3. was passiert (++ zählt eins rauf / -- zählt eins runter)");
    echo $efText6;
    echo "<br>";
    echo "<br>";


    // 1 – 10 in einer HTML Tabelle darstellen

    echo "<table border='1'>";
    echo "<tr>";
    // tr außerhalb der Schleife Erzeugtnur NUR eine row !!!! - 
    // = also nebeneinander!!
    for ($row = 1; $row <= 10; $row++) {
        echo "<td>";
        // td innerhalb der Schleife Erzeugt bei jedem Durchlauf eine Wert von 1 – 10  
        // NEBENEINANDER – tr ist ja außerhalb!!
        echo $row;
        echo "</td>";
    }
    echo "</tr>";
    echo "</table>";

    echo "<br>";




    echo "<table border='1'>";
    for ($row = 1; $row <= 10; $row++) {
        echo "<tr>";
        // tr innerhalb der Schleife Erzeugt bei jedem Durchlauf eine eigene row !!!! - 
        // = also untereinander!!
        echo "<td>";
        // td innerhalb der Schleife Erzeugt bei jedem Durchlauf eine Wert von 1 – 10  
        // UNTEREINANDER – tr ist ja innerhalb!!
        echo $row;
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "<br>";




    echo "<table border='1'>";

    for ($row = 1; $row <= 10; $row++) {
        echo "<tr>";

        for ($column = 1; $column <= 10; $column++) {
            echo "<td>";
            echo $row * $column;
            echo "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";

    echo "<br>";




    echo "<table style='border: solid 0px black; text-align: center;'>";

    for ($row = 1; $row <= 10; $row++) {
        echo "<tr>";

        if ($row == 5 || $row == 6) continue;
        // Überspringt Reihe 5 und 6 (row ist 5 ODER 6)
        // bzw. führt Durchlauf 5 und 6 NICHT aus 
        // sondern geht in den nächsten (übernächsten) Schleifendurchlauf also 7

        for ($column = 1; $column <= 10; $column++) {
            echo "<td style='border: solid 1px black; width: 30px; height: 30px;'>";
            echo $row * $column;
            echo "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";

    echo "<br>";




    echo "<table style='border: solid 0px black; text-align: center;'>";

    for ($row = 1; $row <= 10; $row++) {
        echo "<tr>";

        for ($column = 1; $column <= 10; $column++) {
            echo "<td style='border: solid 1px black; width: 30px; height: 30px;'>";

            if ($row * $column % 7 != 0) {
                echo $row * $column;
            }
            // Entferne alle Zahlen wo bei einer Division / 7 mehr als Rest 0 bleibt
            // Bzw. lass alles stehen wo Rest NICHT 0 ist
            // Alle durch 7 teilbaren Zahlen verschwinden

            echo "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";

    echo "<br>";

    ?>

    <br>
    <br>

    <table border="1">
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>...</td>
        </tr>
        <tr>
            <td>2</td>
            <td>4</td>
            <td>6</td>
            <td>...</td>
        </tr>
        <tr>
            <td>3</td>
            <td>6</td>
            <td>9</td>
            <td>...</td>
        </tr>
    </table>



    <br>
    <br>

    <div class="underline" style="border-bottom: 1px solid #000"></div>



    <!-- REGEX ///////////////////////////////////// -->



    <br>
    <br>
    <h3>Reguläre Ausdrücke – Regular Expressions <mark>regex</mark></h3>
    <h5 style="color: #DC143C;">regex = Zeichenfolge, die ein Suchmuster bildet. <br>
        Kann ein einzelnes Zeichen oder ein komplizierteres Muster sein. <br>
        z.B.: [A-Za-z] od. [A-Za-z0-9]+ usw.</h5>

    <?php

    // https://regex-generator.olafneumann.org

    // https://cheatography.com/davechild/cheat-sheets/regular-expressions/


    $efText7 = nl2br("preg_match - 2 Parameter
    1. Parameter – wie wird geprüft
    2. Parameter – was wird geprüft");
    echo $efText7;
    echo "<br>";
    echo "<br>";

    // preg_match 
    // 1. Parameter (was/wie wird geprüft) - 2. Parameter was wird geprüft (welche Variable/Wert)
    // ^ ...Start of string
    // $ ... End of 

    $benutzerName = "mustermann7"; //abc… 0–9
    if (preg_match("/^[0-9a-z]+$/", $benutzerName)) {
        echo "Benutzername ist korrekt";
    } else {
        echo "Benutzername ist nicht korrekt!";
    }

    echo "<br>";
    echo "<br>";


    //    function useRegex($input)
    //  {
    //    $regex = '/[A-Za-z0-9]+\\+-\\*/#\\?=\\)\\(/&%\\$§!/i';
    //  return preg_match($regex, $input);
    //  }


    echo "<br>";
    echo "<br>";


    function randomPw()
    {
        $PwordSigns = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890#?&%$§!';
        $PwordSignsLength = strlen($PwordSigns) - 1; // Länge -1 in den Zwischenspeicher (eignetlich 70, nicht 69 / wg. Arrayzählung?)
        $Pwords = array();

        for ($PwordIndex = 0; $PwordIndex <= 9; $PwordIndex++) {
            $PwordSingleSigns = rand(0, $PwordSignsLength);
            // random Zeichen zwischen Pos 0 und Länge von $PwordSignsLength
            // Wird in Array gespeicher - startet bei 0 - deswegen vorher -1?
            $Pwords[] = $PwordSigns[$PwordSingleSigns];
        }

        return implode($Pwords);
        // implode - Gibt Arraywerte als String aus

    }

    echo randomPw();
    /*
    //
    echo "<pre>";
    print_r(randomPw());
    echo "</pre>";
    //
    */

    echo "<br>";
    echo "<br>";



    function randomPwx10()
    {
        for ($i = 0; $i <= 9; $i++) {
            echo randomPw();
            echo "<br>";
        }
    }

    echo randomPwx10();



    echo "<br>";
    echo "<br>";


    $PwordSigns = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890#?&%$§!';
    echo $PwordSigns;
    $PwLength = strlen($PwordSigns) - 1;
    echo $PWLength;
    //
    echo "<pre>";
    print_r($PwLength);
    echo "</pre>";
    //


    echo "<br>";
    echo "<br>";


    echo "<br>";
    $test = random_bytes(11);
    echo $test;
    echo "<br>";

    echo "<br>";

    function randomPwx10_2()
    {
        for ($i = 0; $i <= 9; $i++) {
            $randPW = random_bytes(11);
            echo $randPW;
            echo "<br>";
        }
    }

    echo randomPwx10();


    $Pword = "maxi";
    $Pwords = array();

    array_push($Pwords, $Pword);
    // echo $Pwords;
    //
    echo "<pre>";
    print_r($Pwords);
    echo "</pre>";
    //


    function randomPassword()
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string

    }

    echo randomPassword();
    // https://stackoverflow.com/questions/6101956/generating-a-random-password-in-php












    ?>




















</body>

</html>