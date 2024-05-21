<?php

//PHP switch Statement
$grade = 75;
switch ($grade) {
    case($grade > 0 && $grade < 50):
        echo "Failed";
        break;
    case($grade >= 50 && $grade < 65):
        echo "Good";
        break;
    case($grade >= 65 && $grade < 90):
        echo "Very Good";
        break;
    default:   
        echo "Excellent";
}