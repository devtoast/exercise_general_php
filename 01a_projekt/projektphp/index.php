<?php


if (empty($_GET["seite"])) { // seite ist nur Bezeichnung für URL-Bezeichnung im Browser 
    $seite = "eingabe";
} else {
    $seite = $_GET["seite"];
}

if ($seite == "home") {
    $include_datei = "home.php";
} else if ($seite == "seite2") {
    $include_datei = "seite2.php";
}





include "kopf.php";

include "inhalte/" . $include_datei;

include "fuss.php";
