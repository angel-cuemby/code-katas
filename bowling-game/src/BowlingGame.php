<?php

class BowlingGame
{

    private $rolls = [];

    /**
     * @param $pins
     * @internal param $roll
     */
    public function roll($pins)
    {
        $this->rolls[] = $pins;
    }

    /**
     * @return int|mixed
     */
    public function score()
    {
        $score = 0;
        $roll = 0;

        for ($frame = 1; $frame <= 10; $frame++) {
            if ($this->isStrike($roll)) {
                $score += $this->strikeBouns($roll);
                $roll += 1;

                continue;
            }

            if ($this->isSpare($roll)) {
                $score += $this->spareBouns($roll);
            } else {
                $score += $this->simpleScore($roll);
            }

            $roll += 2;
        }

        return $score;
    }

    /**
     * @param $roll
     * @return bool
     */
    public function isSpare($roll)
    {
        return $this->rolls[$roll] + $this->rolls[$roll + 1] == 10;
    }

    /**
     * @param $roll
     * @return mixed
     */
    public function simpleScore($roll)
    {
        return $this->rolls[$roll] + $this->rolls[$roll + 1];
    }

    /**
     * @param $roll
     * @return bool
     */
    private function isStrike($roll)
    {
        return $this->rolls[$roll] == 10;
    }

    /**
     * @param $roll
     * @return int
     */
    private function strikeBouns($roll)
    {
        return 10 + $this->rolls[$roll + 1] + $this->rolls[$roll + 2];
    }

    /**
     * @param $roll
     * @return int
     */
    private function spareBouns($roll)
    {
        return 10 + $this->rolls[$roll + 2];
    }
}
