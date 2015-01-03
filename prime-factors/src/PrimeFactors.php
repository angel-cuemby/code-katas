<?php

class PrimeFactors
{
    public function generate($number) {

        $primes = [];

        for ($candidate = 2; $number > 1; $number++) {
            for (; $number % $candidate == 0; $number /= $candidate) {

                $number /= $candidate;
            }
        }

        return $primes;
    }
}
