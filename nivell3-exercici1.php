<?php

// La criba d'Eratóstenes és un algoritme pensat per a trobar nombres primers
// dins d'un interval donat. Basats en l'informació de l'enllaç adjunt,
// implementa la criba d'Eratóstenes dins d'una funció, de tal forma que
// poguem invocar la funció per a un número concret.

function criba($tope) {

    for ($i = 11; $i < $tope; $i += 2) {

        if ($i % 3 == 0 || $i % 5 == 0 ||  $i % 7 == 0) {
            continue;
        }

        echo "$i <br />";

    }

}

echo criba(20);
echo '<br>';
echo criba(100);

?>