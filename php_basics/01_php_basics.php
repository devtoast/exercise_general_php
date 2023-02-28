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
    } else if ($tag != "Tuesday") {
        echo "Heute ist nicht Dienstag!";
    } else {
        echo "Heute ist anscheined gar kein Tag ;)";
    }

    echo "<br>";
    ?>
    <br>
    <br>

    <div class="underline" style="border-bottom: 1px solid #000"></div>

    <br>
    <br>
    <h3>FUNKTIONEN<mark></mark></h3>
    <h5 style="color: #DC143C;">Funktionen für Strings</h5>






</body>

</html>