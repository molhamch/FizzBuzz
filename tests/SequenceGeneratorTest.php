<?php


class SequenceGeneratorTest extends \PHPUnit\Framework\TestCase
{


    public function provideSequenceData()
    {
        return [
            [range(1,100), 1,100],
            [range(1,60), 1, 60],
            [range(0,0), 0, 0]
        ];
    }

    /**
     * @dataProvider provideSequenceData
     */
    public function testCorrectDefaultSequenceReturned($expectedResult, $a, $b):void{
        require_once 'SequenceGenerator.php';
        self::assertSame($expectedResult, (new SequenceGenerator($a,$b))->getResultArray());

    }


}