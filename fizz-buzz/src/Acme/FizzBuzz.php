<?php

namespace Acme;

class FizzBuzz
{

    public function execute($number)
    {
        if ($number % 15 == 0) return 'fizzbuzz';
        if ($number % 5 == 0) return 'buzz';
        if ($number % 3 == 0) return 'fizz';

        return $number;
    }

    public function executeUpTo($number)
    {
        $output = [];

        foreach (range(1, $number) as $i) {
            $output[] = $this->execute($i);
        }

        return $output;
    }
}
