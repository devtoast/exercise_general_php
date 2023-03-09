<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ausgabe</title>

</head>

<body>






    <?php

    $vorname = htmlentities($_POST["vorname"]);
    $nachname = htmlentities($_POST["nachname"]);
    $password = htmlentities($_POST["password"]);
    $mail = htmlentities($_POST["mail"]);
    $ok = htmlentities($_POST["ok"]);



    // FEHLERPRÜFUNG

    // Zu Beginn leeres Fehler-Array
    $fehler = array();

    if (empty($vorname)) {
        $fehler[] = "Bitte Vornamen eingeben.";
    } else if (mb_strlen($vorname) < 4) {
        $fehler[] = "Ihr Vorname muß aus mindestens 4 Zeichen bestehen.";
    } else if (!preg_match('/^[a-zA-Z ]*/', $vorname)) {
        $fehler[] = "Ihr Vorname darf nur aus Groß- und Kleinbuchstaben bestehen";
    }

    if (empty($mail)) {
        $fehler[] = "Bitte Ihre Mail-Adresse eingeben.";
    } else if (mb_strlen($mail) < 5) {
        $fehler[] = "Ihre Mail-Adresse muß aus mindestens 5 Zeichen bestehen.";
    } else if (!preg_match('/^[a-zA-Z ]*/', $mail)) { //'@ .'
        $fehler[] = "Ihre Mailadresse muß ein @ Zeichen sowie einen Punkt enthalten";
    }

    if (empty($password)) {
        $fehler[] = "Bitte Passwort eingeben.";
    } else if (mb_strlen($password) < 10) {
        $fehler[] = "Ihr Passwort muß aus mindestens 10 Zeichen bestehen.";
    } else if (!preg_match('/^[a-zA-Z ]*/', $password)) { //'[A-Za-z0-9]+ÄÖÜöäü#\\+\\?=\\)\\(/&%\\$§"!/i'
        $fehler[] = "Ihr Passwort muß Groß- und Kleinbuchstaben sowie Zahlen und Sonderzeichen enthalten";
    }

    if (empty($ok)) {
        $fehler[] = "Bitte stimmen Sie zu.";
    }



    // Ausgabe Fehlermeldungen – Fehlerarray ist gefüllt
    if (!empty($fehler)) {
        echo "<br>";
        echo "<strong>Fehler!</strong>";
        echo "<ul>";
        foreach ($fehler as $fehlermeldung) {
            echo "<li>{$fehlermeldung}</li>";
        }
        echo "</ul>";
        echo "<br>";
        echo "<br>";
        // Erfolgsmeldung – Fehlerarray ist leer
    } else if (empty($fehler)) {
        echo "<br>";
        echo "<strong>Übertragung erfolgreich, vielen Dank!</strong>";
        echo "<br>";
        echo "<br>";

        $benutzerdatenBezeichnung = date("Y.m.d – H:i:s"); // Weist den Benutzerdaten eine eindeutige ID zu (Datum + Uhrzeit)
        $benutzerdaten = $benutzerdatenBezeichnung . " / Vorname: " . $vorname . " / Nachname: " . $nachname . " / Passwort: " . $password  . " / E-Mail: " . $mail . " / Ok = " . $ok;
        echo $benutzerdaten;
        file_put_contents("Benutzerdaten/Benutzerdaten.txt", $benutzerdaten);
        // file_put_contents – Sollte die gesammelten Benutzerdaten in einer Textdatei speichern
    }






    echo "<br>";

    //
    echo "<pre>";
    print_r($name);
    echo "</pre>";
    //


    ?>





</body>

</html>