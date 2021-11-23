<?php

    function getStudentGrade ($grade = 0) {
        if ($grade >= 60) {
            echo "Primera Divisió";
        } elseif ($grade >= 45) {
            echo "Segona Divisió";
        } elseif ($grade >= 33) {
            echo "Tercera Divisió";
        } else {
            echo "Reprova";
        }
    }

    getStudentGrade(65);

?>