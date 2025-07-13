<?php

$paintings = [
    "Jean-Léon Gérôme" => "img/paintings/The_leap_of_Marcus_Curtius_(1850-55),_by_Jean-Léon_Gérôme.jpg",
    "Justus Sustermans" => "img/paintings/BMVB1452-Justus_Sustermans-La_familia_de_Darius_davant_Alexandre_el_Gran.jpeg",
    "Matthias Laurenz Gräff" => "img/paintings/Matthias_Laurenz_Gräff,__Traum_Österreich_-_Vorstellung_und_Wirklichkeit_.jpg",
    "Sebastiano Ricci" => "img/paintings/Sebastiano_Ricci_-_A_Recusa_de_Arquimedes.jpg"
];

$paintings["Niels Simonsen"] = "img/paintings/Episoden_af_Træfning_ved_Sankelmark,_den_6._Februar.jpg";
$paintings["Gustave Moreau"] = "img/paintings/Moreau_-_Thomyris_et_Cyrus,_Inv._13978.jpg";


?>

<h2>Key/value array: Gissa artisten</h2>

<p>Här är ett galleri med historiska målningar. Försök gissa vilken konstnär eller målning det är. När du håller musen över bilden så framträder svaret.</p>

<div class="gallery">
<?php foreach ($paintings as $key => $value) : ?>
    <?php
        $paintingName = str_replace("_", " ", $value);
        $paintingName = str_replace(["img/", ".jpg", ".jpeg"], "", $paintingName);
    ?>
    <img src="<?= $value ?>" title="<?= $key . "  -  " . $paintingName ?>" alt="<?= $value ?>">
<?php endforeach; ?>
</div>