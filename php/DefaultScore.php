<?php
declare(strict_types=1);

class DefaultScore extends AbstractDescriptionStrategy
{

    public function getDescription(Player $player1, Player $player2): string
    {
        return $this->getDescriptionForScore($player1->getScore()).'-'.$this->getDescriptionForScore($player2->getScore());
    }
}
