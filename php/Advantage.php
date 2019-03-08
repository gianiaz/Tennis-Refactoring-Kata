<?php
declare(strict_types=1);

class Advantage extends AbstractStrategy
{
    public function getDescription(Player $player1, Player $player2): string
    {

        $diff = abs($player1->getScore() - $player2->getScore());

        if($diff > 1) {
            return self::WIN_FOR .' '.$this->getWinner($player1, $player2)->getName();
        }

        return self::ADVANTAGE .' '.$this->getWinner($player1, $player2)->getName();

    }

    private function getWinner(Player $player1, Player $player2): Player {

        if($player1->getScore() === $player2->getScore()) {
            throw new InvalidArgumentException('Can\'t decide winner');
        }

        if($player1->getScore() > $player2->getScore()) {
            return $player1;
        }

        return $player2;
    }


}
