<?php

use Tester\Assert;
use Grogy\Calendar\Calendar;

require __DIR__ . '/bootstrap.php';

class CzechCalendarTest extends Tester\TestCase
{
	/**
	 * @var \Grogy\Calendar\Holiday\IHoliday
	 */
	private $holiday;



	public function setUp()
	{
		$this->holiday = new Grogy\Calendar\Holiday\CzechHoliday();
	}



	public function testNoWorkingOnWeekend()
	{
		$calendar = new Calendar("2013-07-28");
		$calendar->setHoliday($this->holiday);
		Assert::true($calendar->isNoWorkingDay());
	}



	public function testNoWorking()
	{
		$calendar = new Calendar("2013-01-01");
		$calendar->setHoliday($this->holiday);
		Assert::true($calendar->isNoWorkingDay());
	}
}

$test = new CzechCalendarTest();
$test->run();
