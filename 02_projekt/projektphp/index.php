<?php

// EINE Seite 5 Inhalte!!!!

if (empty($_GET["seite"])) { // Wenn beim Browseraufruf leer – hol dir die Seite "seite" (ist nur URL-Bezeichnung im Browser – siehe Seite "nav.php")
    $seite = "home";
    // Variable "$seite" wird auf nav.php generiert ($seite = $href – "home", "kontakt", "leistungen", "oeffnungszeiten",)
    // foreach-Schleife durchläuft Array und erzeugt aus $href(Array-Indexbezeichnungen "home"…) die Seitenbezeichnungen
} else {
    $seite = $_GET["seite"];
}


if ($seite == "home") {
    $include_datei = "home.php";
} else if ($seite == "leistungen") {
    $include_datei = "leistungen.php";
} else if ($seite == "oeffnungszeiten") {
    $include_datei = "oeffnungszeiten.php";
} else if ($seite == "kontakt") {
    $include_datei = "kontakt.php";
} else {
    $include_datei = "error404.php";
}


include "kopf.php"; // KOPF Aus "kopf.php" mit eingebauter "nav" – für alle Seiten gleich (außer class"active")
include "inhalt/" . $include_datei; // Gibt je nach aufgerufener Seite ("nav") den dazugehörigen Inhalt aus - variiert
include "fuss.php";// FUSS - für alle Seiten gleich
