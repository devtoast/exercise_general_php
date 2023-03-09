<?php

/*
<nav>
    <ul>
        <li class="active"><a href="index.html">Home</a></li> // ACHTUNG Klasse "active" nicht vergessen!
        <li><a href="leistungen.html">Leistungen</a></li>
        <li><a href="oeffnungszeiten.html">Öffnungszeiten</a></li>
        <li><a href="kontakt.html">Kontakt</a></li>
    </ul>
</nav>
*/

// Navigation (nav) wird in php nachgebaut


// Array $nav_punkte wird in foreach-Schleife durchlaufen und erzeugt die li`s
$nav_punkte = array(
    "home" => "Startseite", // Assoziatives Array – Index ist "home"
    "leistungen" => "Leistungen",
    "oeffnungszeiten" => "Öffnungszeiten",
    "kontakt" => "Kontakt", // Assoziatives Array – Index ist "kontakt"
);

echo "<nav><ul>";

foreach ($nav_punkte as $href => $nav_punkt) { // foreach-Schleife durchläuft das "$nav_punkte"-Array (4x – foreach - für jede Arrayposition)

    echo "<li"; // ACHTUNG tag "li" wird hier noch nicht geschlossen ">" – Klasse "active" wird eingefügt

    if ($seite = $href) { // $seite = $href – also "home", "kontakt", "leistungen", "oeffnungszeiten", // $seite auf "index.php"
        echo " class= 'active'"; // Gibt die Klasse "active" aus (CSS) !! 
        // ACHTUNG ACHTUNG ACHTUNG - "LEERZEICHENclass= 'active'"!!!!!!!
    }

    echo ">"; // Tag "li" wird geschlossen


    echo "<a href='?seite=" . $href . "'>" . $nav_punkt . "</a>"; // ?seite - hier wird die URL-Bezeichnung definiert (Siehe Seite index.php)
    // Erstellt "a" tag – <a href='?seite="home"'> Startseite </a>
    // Erstellt "a" tag – <a href='?seite="kontakt"'> Kontakt </a> …

    echo "</li>";
}

echo "</nav></ul>";
