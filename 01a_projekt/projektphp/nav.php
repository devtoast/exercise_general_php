<?php

/*
<nav>
    <ul>
        <li class="active"><a href="index.html">Eingabe</a></li>
        <li><a href="seite2.html">Seite2</a></li>
    </ul>
</nav>
*/


/*
Dynamische nav

1. Nav-Punkte in Ass. Array ($nav_punkte)
2. HTML-Tags nav und ul - /ul und /nav erstellen echo...
3. Array $nav_punkte mit foreach-Schleife auslesen und für jeden Eintrag einen li-Tag erstellen
wenn (if) ein Eintrag bzw. wenn ich dann auf der Seite bin $seite ist die Seite $href - setzte die Klasse (class) auf active
4. a tag erstellen mit nav_punkte
*/

$nav_punkte = array(
    "home" => "Startseite",
    "seite2" => "Seite2",
);


echo "<nav><ul>";


foreach ($nav_punkte as $href => $nav_punkt) {

    echo "<li><a href='?seite=" . $href . "'>" . $nav_punkt . "</a>";
}




echo "</nav></ul>";
