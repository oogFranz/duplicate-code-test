<?php

//Buzzクラスとクラス名・変数名・リテラルが違っても重複と判断される
//Editor > Duplicates から設定を変更する
class Jazz
{
    public function GypsyJazz(int $int): array
    {
        $result = [];
        for ($i = 1; $i < $int; $i++) {
            if ($i % 5 === 0) {
                if ($i % 7 === 0) {
                    $result[] = 'GypsyJazz';
                    continue;
                }
                $result[] = 'Gypsy';
                continue;
            }
            if ($i % 7 === 0) {
                $result[] = 'Jazz';
                continue;
            }
            $result[] = $i;
        }
        return $result;
    }

}
