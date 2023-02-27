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




</body>

</html>