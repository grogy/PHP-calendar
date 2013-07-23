<?php

namespace Grogy\Calendar;

use Grogy\Calendar\Holiday\IHoliday;
use Maxondesign\Exception\Runtime\App\NotSetDependenceException;

class Calendar
{
	/**
	 * @var \DateTime
	 */
	protected $dateTime;

	/**
	 * @var IHoliday
	 */
	protected $holiday = NULL;



	public function __construct($str)
	{
		$this->dateTime = new \DateTime($str);
	}



	public function setHoliday(IHoliday $holiday)
	{
		$this->holiday = $holiday;
	}



	public function isWeekend()
	{
		$numericDay = $this->dateTime->format("N");
		if (in_array($numericDay, array(6, 7)))
			return TRUE;
		return FALSE;
	}



	public function isNoWorkingDay()
	{
		if ($this->holiday === NULL)
			throw new NotSetDependenceException("Please set holiday.");

		if ($this->isWeekend())
			return TRUE;

		$numericMonth = $this->dateTime->format("n");
		$numericDay = $this->dateTime->format("j");

		echo "$numericDay - $numericMonth\n";

		if ($this->holiday->isFreeHoliday($numericDay, $numericMonth))
			return TRUE;

		return FALSE;
	}
}
