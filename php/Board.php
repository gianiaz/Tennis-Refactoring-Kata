<?php
declare(strict_types=1);

class Board
{
    private const INVALID_SCORE_EXCEPTION_MESSAGE = 'Lo score deve essere <= 3';

    private const LOVE = 'Love';
    private const FIFTEEN = 'Fifteen';
    private const THIRTY = 'Thirty';
    private const FORTY = 'Forty';
    private const ALL = 'All';
    private const DEUCE = 'Deuce';
    private const ADVANTAGE = 'Advantage';
    private const WIN_FOR = 'Win for';

    private const SCORE_DESCRIPTION = [
        0 => self::LOVE,
        1 => self::FIFTEEN,
        2 => self::THIRTY,
        3 => self::FORTY
    ];

    /** @var Player */
    private $player1;

    /** @var Player */
    private $player2;

    public function __construct(Player $player1, Player $player2) {

        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    public function getScoreDescription():string {

        if($this->areTied()) {
            return $this->getTied();
        }

        if($this->areInAdvantage()) {
            return $this->getAdvantage();
        }


        return $this->getDescriptionForScore($this->player1->getScore()).'-'.$this->getDescriptionForScore($this->player2->getScore());

    }

    private function getTied(): string {

        if($this->player1->getScore() >= 3) {
            return self::DEUCE;
        }

        return $this->getDescriptionForScore($this->player1->getScore()).'-'. self::ALL;

    }

    private function getAdvantage(): string {

        $divario = abs($this->player1->getScore() - $this->player2->getScore());

        if($divario > 1) {
            return self::WIN_FOR .' '.$this->getWinner()->getName();
        }

        return self::ADVANTAGE .' '.$this->getWinner()->getName();

    }

    private function getWinner(): Player {
        if($this->player1->getScore() > $this->player2->getScore()) {
            return $this->player1;
        }

        return $this->player2;
    }

    private function getDescriptionForScore(int $score): string {

        if($score > 3) {
            throw new InvalidArgumentException(self::INVALID_SCORE_EXCEPTION_MESSAGE);
        }

        return self::SCORE_DESCRIPTION[$score];

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

