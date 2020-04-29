<?php

namespace MunculGroup\Calculator;

class Calculator
{
    public function add($a, $b)
    {
        $result = $a + $b;
        echo "Sum of {$a} and {$b} is {$result}\n";
    }

    public function substract($a, $b)
    {
        $result = $a - $b;
        echo "Substract of {$a} and {$b} is {$result}\n";
    }

    public function multiply($a, $b)
    {
        $result = $a * $b;
        echo "Multiply of {$a} and {$b} is {$result}\n";
    }

    public function divide($a, $b)
    {
        $result = $a / $b;
        echo "Divide of {$a} and {$b} is {$result}\n";
    }
}
