<?php

class StringCalculator {

    public function add( $numbers )
    {
        $numbersList = $this->getNumbersList($numbers);
        $sum = 0;
        foreach( $numbersList as $item )
            $sum += $item;

        return (int) $sum;

    }

    /**
     * @param $numbers
     * @param $delimiter
     * @return array
     */
    public function getNumbersList($numbers)
    {
        $delimiter = $this->getDelimiter($numbers);
        //esquisito
        $numbers = str_replace('\n', $delimiter, $numbers);
        $numbersList = explode($delimiter, $numbers);
        return $numbersList;
    }

    /**
     * @param $numbers
     * @return array
     */
    public function getDelimiter(&$numbers)
    {
        if ($this->hasNewDelimiter($numbers))
            return $this->getNewDelimiter($numbers);

        return ',';
    }

    /**
     * @param $numbers
     * @return string
     */
    public function getNewDelimiter(&$numbers)
    {
        $newDelimiter = substr($numbers, 2, strpos($numbers, '\n') - 2);
        $numbers = substr($numbers, strpos($numbers, '\n') + 2);

        return $newDelimiter;
    }

    /**
     * @param $numbers
     * @return bool
     */
    public function hasNewDelimiter(&$numbers)
    {
        return substr($numbers, 0, 2) == '//';
    }


}