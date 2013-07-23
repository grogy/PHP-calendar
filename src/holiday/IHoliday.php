<?php

namespace Grogy\Calendar\Holiday;

interface IHoliday
{
	public function isFreeHoliday($day, $month);
}
