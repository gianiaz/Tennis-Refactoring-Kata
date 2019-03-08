<?php
declare(strict_types=1);

class Tied extends AbstractDescriptionStrategy
{

    public function getDescription(Player $player1, Player $player2): string
    {
        if($player1->getScore() >= 3) {
            return self::DEUCE;
        }

        return $this->getDescriptionForScore($player1->getScore()).'-'. self::ALL;
    }
}
