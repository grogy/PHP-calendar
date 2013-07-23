<?php

namespace Grogy\Calendar;

class Calendar
{
	/**
	 * @var \DateTime
	 */
	protected $dateTime;



	public function __construct($str)
	{
		$this->dateTime = new \DateTime($str);
	}



	public function isWeekend()
	{
		$numericDay = $this->dateTime->format("N");
		if (in_array($numericDay, array(6, 7)))
			return TRUE;
		return FALSE;
	}
}
