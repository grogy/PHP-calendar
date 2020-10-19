<?php

use Tester\Assert;
use Grogy\Calendar\Calendar;

require __DIR__ . '/bootstrap.php';

class CalendarTest extends Tester\TestCase
{
	public function testWeekend()
	{
		Assert::true((new Calendar("2013-07-27"))->isWeekend());
		Assert::true((new Calendar("2013-07-28"))->isWeekend());
		Assert::false((new Calendar("2013-07-23"))->isWeekend());
	}
}

$test = new CalendarTest();
$test->run();
