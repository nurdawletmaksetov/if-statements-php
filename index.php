<?php
    // $age = 103;
    // if($age >= 100){
    //     echo "You are too old to endter this site";
    // }
    // elseif ($age >= 18) {
    //     echo "You may enter this site";
    // }
    // elseif($age <= 0) {
    //     echo "That was not a valid age";
    // }
    // else {
    //     echo "You can't enter this site";
    // }

    //

    // $adult = false;
    // if($adult) {
    //     echo "You may enter this site";
    // }
    // else {
    //     echo "You must be adult to enter";
    // }

    //

    $hours = 50;
    $rate = 15;
    $weekly_pay = null;

    if($hours <= 0){
        $weekly_pay = 0;
    }

    elseif($hours <= 40) {
        $weekly_pay = $hours * $rate;
    }
    else{
        $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }

    echo "Your made \${$weekly_pay} this week";
?>