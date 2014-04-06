<?php

class StringCalculator {

    public function add( $numbers )
    {

        $glauco = explode( ',',$numbers );
        $sum = 0;
        foreach( $glauco as $item )
        {
            $sum += $item;
        }
        return (int) $sum;

    }


}