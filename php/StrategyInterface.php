<?php
declare(strict_types=1);

interface StrategyInterface
{
    public function getDescription(Player $player1, Player $player2): string;

}
