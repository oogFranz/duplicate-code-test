<?php

class Foo
{
    private array $input;

    /**
     * Foo constructor.
     * @param array $input
     */
    public function __construct(array $input)
    {
        $this->input = $input;
    }

    /**
     * @return int|mixed
     */
    public function sum()
    {
        $result = 0;
        $length = count($this->input);
        for ($i = 0; $i < $length; $i++) {
            $tmp = $this->input[$i];
            if (is_int($tmp)) {
                $result += $this->input[$i];
            } elseif (is_float($tmp) || is_double($tmp)) {
                $result += (int)$this->input[$i];
            }
        }
        return $result;
    }
}
