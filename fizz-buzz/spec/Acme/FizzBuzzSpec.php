<?php

namespace spec\Acme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior {
    function it_is_initializable()
    {
        $this->shouldHaveType('Acme\FizzBuzz');
    }

    function it_translate_1_for_fizzbuzz() {
        $this->execute(1)->shouldReturn(1);
    }

    function it_translate_2_for_fizzbuzz() {
        $this->execute(2)->shouldReturn(2);
    }

    function it_translate_3_for_fizzbuzz() {
        $this->execute(3)->shouldReturn('fizz');
    }

    function it_translate_5_for_fizzbuzz() {
        $this->execute(5)->shouldReturn('buzz');
    }

    function it_translate_6_for_fizzbuzz() {
        $this->execute(6)->shouldReturn('fizz');
    }

    function it_translate_10_for_fizzbuzz() {
        $this->execute(10)->shouldReturn('buzz');
    }

    function it_translate_15_for_fizzbuzz() {
        $this->execute(15)->shouldReturn('fizzbuzz');
    }

    function it_translate_153_for_fizzbuzz() {
        $this->execute(153)->shouldReturn('fizz');
    }

    function it_translate_a_sequence_of_5_numbers_for_fizzbuzz() {
        $this->executeUpTo(5)->shouldReturn([1, 2, 'fizz', 4, 'buzz']);
    }

    function it_translate_a_sequence_of_10_numbers_for_fizzbuzz() {
        $this->executeUpTo(10)->shouldReturn([1, 2, 'fizz', 4, 'buzz', 'fizz', 7, 8, 'fizz', 'buzz']);
    }

    function it_translate_a_sequence_of_15_numbers_for_fizzbuzz() {
        $this->executeUpTo(15)->shouldReturn([1, 2, 'fizz', 4, 'buzz', 'fizz', 7, 8, 'fizz', 'buzz', 11, 'fizz', 13, 14, 'fizzbuzz']);
    }
}
