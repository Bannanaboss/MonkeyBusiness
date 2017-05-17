<?php
    include('header.php');

    include_once('Programma.php');
    include_once('Aap.php');

    $ao = new AapOverzicht();
    $ao->voegAapToe(new Aap('<a href="https://www.google.nl/search?q=Baviaan&tbm=isch ">Baviaan</a>'));
    $ao->voegAapToe(new Aap('<a href="https://www.google.nl/search?q=Guereza&tbm=isch ">Guereza</a>'));
    $ao->voegAapToe(new Aap('<a href="https://www.google.nl/search?q=Langoer&tbm=isch ">Langoer</a>'));
    $ao->voegAapToe(new Aap('<a href="https://www.google.nl/search?q=Neusaap&tbm=isch ">Neusaap</a>'));
    $ao->voegAapToe(new Aap('<a href="https://www.google.nl/search?q=Tamarin&tbm=isch ">Tamarin</a>'));
    $ao->voegAapToe(new Aap('<a href="https://www.google.nl/search?q=Brulaap&tbm=isch ">Brulaap</a>'));
    $ao->voegAapToe(new Aap('<a href="https://www.google.nl/search?q=Halfaap&tbm=isch ">Halfaap</a>'));
    $ao->voegAapToe(new Aap('<a href="https://www.google.nl/search?q=Mandril&tbm=isch ">Mandril</a>'));
    $ao->voegAapToe(new Aap('<a href="https://www.google.nl/search?q=Oeakari&tbm=isch ">Oeakari</a>'));
    $ao->voegAapToe(new Aap('<a href="https://www.google.nl/search?q=Faunaap&tbm=isch ">Faunaap</a>'));
    $ao->voegAapToe(new Aap('<a href="https://www.google.nl/search?q=Hoelman&tbm=isch ">Hoelman</a>'));
    $ao->voegAapToe(new Aap('<a href="https://www.google.nl/search?q=Meerkat&tbm=isch ">Meerkat</a>'));
    $ao->voegAapToe(new Aap('<a href="https://www.google.nl/search?q=Oormaki&tbm=isch ">Oormaki</a>'));
    $ao->voegAapToe(new Aap('<a href="https://www.google.nl/search?q=Gorilla&tbm=isch ">Gorilla</a>'));
    $ao->voegAapToe(new Aap('<a href="https://www.google.nl/search?q=Kuifaap&tbm=isch ">Kuifaap</a>'));
    $ao->voegAapToe(new Aap('<a href="https://www.google.nl/search?q=Mensaap&tbm=isch ">Mensaap</a>'));
    $ao->voegAapToe(new Aap('<a href="https://www.google.nl/search?q=Spinaap&tbm=isch ">Spinaap</a>'));

    foreach($ao->getApen() as $aap) {
        echo $aap->getAap()."<br>";
    }

    include('footer.php');

?>