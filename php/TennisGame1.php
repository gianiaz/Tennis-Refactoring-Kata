<?php

class TennisGame1 implements TennisGame
{
    /** @var Player */
    private $player1;

    /** @var Player */
    private $player2;

    /** @var Board */
    private $board;

    public function __construct($player1Name, $player2Name)
    {
        $this->player1 = new Player($player1Name);
        $this->player2 = new Player($player2Name);
        $this->board = new Board($this->player1, $this->player2);
    }

    public function wonPoint(string $playerName): void
    {

        if ($this->player1->getName() === $playerName) {
            $this->player1->incrementScore();
            return;

        }

        $this->player2->incrementScore();
    }

    public function getScore(): string
    {
        return $this->board->getScoreDescription();
    }
}

