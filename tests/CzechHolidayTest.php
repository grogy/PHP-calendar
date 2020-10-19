<?php

use Grogy\Calendar\Holiday\CzechHoliday;
use Tester\Assert;

require __DIR__ . '/bootstrap.php';

class CzechHolidayTest extends Tester\TestCase
{
    /** @var CzechHoliday */
    private $holidays;

    protected function setUp()
    {
        $this->holidays = new CzechHoliday();
    }

    public function testIsHolidayInFirstJanuary()
    {
        Assert::true($this->holidays->isFreeHoliday(1, 1));
    }

    public function testIsNotHolidayInSecondJanuary()
    {
        Assert::false($this->holidays->isFreeHoliday(2, 1));
    }
}

$test = new CzechHolidayTest();
$test->run();
