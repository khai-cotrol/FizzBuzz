<?php

class FizzBuzz
{
    public $status;

    public function __construct(int $number)
    {
        $isFizz = $number % 3 == 0;
        $isBuzz = $number % 5 == 0;
        if ($isFizz && $isBuzz) {
            $this->status = "FizzBuzz";
        } elseif ($isFizz) {
            $this->status = "fizz";
        } elseif ($isBuzz) {
            $this->status = "Buzz";
        } else {
            $this->status = $number . "";
        }
    }

    public function __toString(): string
    {
        return $this->status;
        // TODO: Implement __toString() method.
    }
}
