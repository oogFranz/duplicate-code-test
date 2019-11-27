<?php


class Fizz
{
    public function FizzBuzz(int $int): array
    {
        $result = [];
        for ($i = 1; $i < $int; $i++) {
            //Buzzクラスと変数名が違っても重複と判断される
            if ($i % 3 === 0) {
                if ($i % 5 === 0) {
                    $result[] = 'FizzBuzz';
                    continue;
                }
                $result[] = 'Fizz';
                continue;
            }
            if ($i % 5 === 0) {
                $result[] = 'Buzz';
                continue;
            }
            $result[] = $i;
        }
        return $result;
    }

}
