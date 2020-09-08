<?php


namespace Model  ; 

class Yeap {
    function is_leap_year($year = null) {
        if (null === $year) {
            $year = date('Y');
        }
        return 0 === $year % 400 || (0 === $year % 4 && 0 !== $year % 100);
    }
}