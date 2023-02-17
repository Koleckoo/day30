<?php
class Dice {
    public ?int $sides = null;
    public ?string $color = null;
    public bool $rolled_state = false;
    public ?int $rolled_number = null;

    public function __construct($sides)
    {
        $this->sides = $sides;
       
    }

    public function roll() {
        //switch the rolled state
        $this->rolled_state = !$this->rolled_state;
        // return random value from 1- to max (will be set by user input)
        return $this->rolled_number =  rand(1, $this->sides);
    }

    public function __toString()
    {
        return "<div class='dice'>". $this->rolled_number . "</div>";
    }
}