<?php

// Imagina que som a una botiga on es ven

// Xocolata: 1 euro
// Xiclets: 0.50 euros
// Carmels: 1.50 euros

// Implementa un programa que permeti afegir càlculs a un total de compres
// d'aquest tipus. Per exemple, que si comprem:

// 2 xocolates, 1 de xiclets i 1 de carmels, tinguem un programa que permeti anar
// afegint els subtotals a un total, tal que així:

// funció(2 xocolates) + funció(1 de xiclets) + funció(1 de carmels) = 2 + 0.5 + 1.5

// Sent per tant el total, 4.

function addChoco($chocoQ) {

    return $chocoQ * 1;

}

function addGum($gumQ) {

    return $gumQ * 0.5;

}

function addCandy($candyQ) {

    return $candyQ * 1.5;

}

echo 'El preu total és de: ' . addChoco(2) + addGum(1) + addCandy(1);

?>