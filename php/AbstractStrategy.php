<?php
declare(strict_types=1);

abstract class AbstractStrategy implements StrategyInterface
{

    protected const LOVE = 'Love';
    protected const FIFTEEN = 'Fifteen';
    protected const THIRTY = 'Thirty';
    protected const FORTY = 'Forty';
    protected const ALL = 'All';
    protected const DEUCE = 'Deuce';
    protected const ADVANTAGE = 'Advantage';
    protected const WIN_FOR = 'Win for';

    protected const SCORE_DESCRIPTION = [
        0 => self::LOVE,
        1 => self::FIFTEEN,
        2 => self::THIRTY,
        3 => self::FORTY
    ];


}
