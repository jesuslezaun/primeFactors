<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate;

class PrimeFactors
{

    public function calculate($numberToCalculate): array
    {
        $primeNumberList = array();

        if($this->isValidToBeCalculated($numberToCalculate))
        {
            if($numberToCalculate == 1)
            {
                $primeNumberList[] = 1;
            }
            else
            {
                while($numberToCalculate != 1)
                {
                    $divisor = 2;
                    for(; $numberToCalculate % $divisor != 0; $divisor++);
                    $numberToCalculate /= $divisor;
                    $primeNumberList[] = $divisor;
                }
            }
        }

        return $primeNumberList;
    }

     private function isValidToBeCalculated($numberToValidate): bool
    {
        return ($numberToValidate > 0);
    }
}