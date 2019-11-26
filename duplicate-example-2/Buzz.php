<?php


class Buzz
{
    public function run(int $int): array
    {
        $array = [];
        for ($tmp = 1; $tmp <= $int; $tmp++) {
            if ($tmp % 3 === 0) {
                if ($tmp % 5 === 0) {
                    $array[] = 'FizzBuzz';
                    continue;
                }
                $array[] = 'Fizz';
                continue;
            }
            if ($tmp % 5 === 0) {
                $array[] = 'Buzz';
                continue;
            }
            $array[] = $tmp;
        }
        return $array;
    }

}