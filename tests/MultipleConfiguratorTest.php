<?php


class MultipleConfiguratorTest extends \PHPUnit\Framework\TestCase
{


    public function provideSequenceData()
    {
        require_once 'MultiplierConfigurator.php';
        return [
            ["1\n2\nFizz\n4\n5\n", 1,5, (new MultiplierConfigurator([3=>"Fizz"]))],
            ["1\n2\nFizz\n4\nBuzz\nFizz\n7\n8\nFizz\nBuzz\n11\nFizz\n13\n14\nFizzBuzz\n", 1,15, (new MultiplierConfigurator([3=>"Fizz",5=>"Buzz"]))],
            ["1\n2\n3\n4\nBuzz\n", 1,5, (new MultiplierConfigurator(["test"=>"Fizz",5=>"Buzz"]))],
            ["1\n2\n3\n4\n5\n", 1,5, (new MultiplierConfigurator())]
        ];
    }

    /**
     * @dataProvider provideSequenceData
     */
    public function testCorrectConfigurationReturned($expectedResult, $a, $b, $c):void{
        require_once 'SequenceGenerator.php';
        $sg = new SequenceGenerator($a,$b);
        $sg->generate($c);
        $this->expectOutputString($expectedResult);

    }
}