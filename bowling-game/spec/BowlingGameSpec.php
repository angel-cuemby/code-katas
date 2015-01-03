<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BowlingGameSpec extends ObjectBehavior
{

    function it_scores_a_gutter_game_as_zero()
    {
        $this->rollTimes(20, 0);

        $this->score()->shouldBe(0);
    }

    function it_scores_the_sum_of_all_knocked_down_pins_for_a_game()
    {
        $this->rollTimes(20, 1);

        $this->score()->shouldBe(20);
    }

    function it_awards_a_one_roll_bonus_for_every_spare()
    {
        $this->rollSpare(2, 8);
        $this->rollTimes(1, 5);

        $this->rollTimes(17, 0);

        $this->score()->shouldBe(20);
    }

    function it_awards_a_two_roll_bonus_for_a_strike_in_the_previous_frame() {
        $this->rollTimes(1, 10);
        $this->rollTimes(1, 7);
        $this->rollTimes(1, 2);

        $this->rollTimes(17, 0);

        $this->score()->shouldBe(28);
    }

    function it_scores_a_perfect_game() {
        $this->rollTimes(12, 10);

        $this->score()->shouldBe(300);
    }

    /**
     * @param $first_pins
     * @param $second_pins
     */
    private function rollSpare($first_pins, $second_pins)
    {
        $this->roll($first_pins);
        $this->roll($second_pins); // we got spare
    }

    /**
     * @param $times
     * @param $pins
     */
    private function rollTimes($times, $pins)
    {
        for ($i = 0; $i < $times; $i++) {
            $this->roll($pins);
        }
    }
}
