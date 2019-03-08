<?php
declare(strict_types=1);

class Board
{

    /** @var Player */
    private $player1;

    /** @var Player */
    private $player2;

    public function __construct(Player $player1, Player $player2) {

        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    public function getScoreDescription():string {

        $strategy = null;

        switch(true) {
            case $this->areTied():
                $strategy = new Tied();
                break;
            case $this->areInAdvantage():
                $strategy = new Advantage();
                break;
            default:
                $strategy = new DefaultScore();
                break;
        }

        return $strategy->getDescription($this->player1, $this->player2);

    }

    private function areTied():bool
    {
        return $this->player1->getScore() === $this->player2->getScore();
    }

    private function areInAdvantage():bool
    {
        return $this->player1->getScore() >= 4 || $this->player2->getScore() >= 4;
    }


}

