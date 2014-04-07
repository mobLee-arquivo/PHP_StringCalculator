<?php

class StringCalculator
{

    public function add($numbers)
    {
        $numbersList = explode(',', $numbers);
        $sum = 0;
        foreach ($numbersList as $item) {
            $sum += $item;
        }
        return (int)$sum;
    }

}