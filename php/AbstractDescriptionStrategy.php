<?php
declare(strict_types=1);

abstract class AbstractDescriptionStrategy extends AbstractStrategy
{

    private const INVALID_SCORE_EXCEPTION_MESSAGE = 'Lo score deve essere <= 3';

    protected function getDescriptionForScore(int $score): string {

        if($score > 3) {
            throw new InvalidArgumentException(self::INVALID_SCORE_EXCEPTION_MESSAGE);
        }

        return self::SCORE_DESCRIPTION[$score];

    }

}
