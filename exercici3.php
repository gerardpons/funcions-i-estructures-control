<?php

    function countTo($num) {
        for ($i = 2; $i <= $num; $i+=2) {
            echo $i;
        };
    };

    countTo(20);

?>