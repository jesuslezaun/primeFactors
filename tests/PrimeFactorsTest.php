<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    private PrimeFactors $primeFactors;

    /**
     * @setup
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->primeFactors = new PrimeFactors();
    }

    /**
     * @test
     */
    public function when_given_0_returns_empty_list()
    {
        $expectedList = array();

        $result = $this->primeFactors->calculate(0);

        self::assertEqualsCanonicalizing($expectedList, $result);
    }

    /**
     * @test
     */
    public function when_given_1_returns_list_containing_1()
    {
        $expectedList = array(1);

        $result = $this->primeFactors->calculate(1);

        self::assertEqualsCanonicalizing($expectedList, $result);
    }

    /**
     * @test
     */
    public function when_given_2_returns_list_containing_2()
    {
        $expectedList = array(2);

        $result = $this->primeFactors->calculate(2);

        self::assertEqualsCanonicalizing($expectedList, $result);
    }

    /**
     * @test
     */
    public function when_given_4_returns_list_containing_2_and_2()
    {
        $expectedList = array(2, 2);

        $result = $this->primeFactors->calculate(4);

        self::assertEqualsCanonicalizing($expectedList, $result);
    }

    /**
     * @test
     */
    public function when_given_6_returns_list_containing_3_and_2()
    {
        $expectedList = array(2, 3);

        $result = $this->primeFactors->calculate(6);

        self::assertEqualsCanonicalizing($expectedList, $result);
    }

    /**
     * @test
     */
    public function when_given_7_returns_list_containing_7()
    {
        $expectedList = array(7);

        $result = $this->primeFactors->calculate(7);

        self::assertEqualsCanonicalizing($expectedList, $result);
    }

    /**
     * @test
     */
    public function when_given_13_returns_list_containing_13()
    {
        $expectedList = array(13);

        $result = $this->primeFactors->calculate(13);

        self::assertEqualsCanonicalizing($expectedList, $result);
    }

    /**
     * @test
     */
    public function when_given_30_returns_list_containing_2_3_and_5()
    {
        $expectedList = array(2, 3, 5);

        $result = $this->primeFactors->calculate(30);

        self::assertEqualsCanonicalizing($expectedList, $result);
    }

}
