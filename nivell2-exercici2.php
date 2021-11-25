<?php

// Escriu una funció que determini la quantitat total a pagar per una trucada
// telefònica d'acord a les següents premisses:

// Tota crida que duri menys de 3 minuts té un cost de 10 cèntims.
// Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.

    function priceToPay($minLength) {
        if ($minLength <= 3) {
            echo 'El preu de la trucada és de 10 cèntims';
        } else {
            
            $callPrice = (($minLength - 3) * 5) + 10;
            echo 'El preu de la trucada és de ' . $callPrice . ' cèntims';

        }
    }    

    priceToPay(2);
    echo '<br>';
    priceToPay(3);
    echo '<br>';
    priceToPay(6);

?>