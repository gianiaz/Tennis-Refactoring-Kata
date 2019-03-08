<?php
declare(strict_types=1);

class Player
{

    /** @var string */
    private $name;

    /** @var int */
    private $score;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->score = 0;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getScore():int {
        return $this->score;
    }

    public function incrementScore():void {
        $this->score++;
    }

}
