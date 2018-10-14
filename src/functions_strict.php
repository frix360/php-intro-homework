<?php declare(strict_types=1);


namespace Nfq\Akademija\Strict {
    function calculateStrictSum(int ...$numbers): int
    {
        return array_sum($numbers);
    }

    function calculateHomeWorkSum(...$numbers) {
        echo __FUNCTION__ . ':';
       return calculateStrictSum(...$numbers);
    }

}





