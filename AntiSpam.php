<?php
/**
*
* AntiSpam class for mailing forms
*
*/
class AntiSpam
{
	public static function isSpam()
	{
		if (self::sendByBot()) {
			
			return true;
		}

		return false;
	}
	private static function sendByBot($time=6)
	{
		$display_time = time() - $_SESSION['mailing_form_display_time'];
		unset($_SESSION['mailing_form_display_time']);

		if ($display_time > $time) {
			
			return false;
		} else {

			return true;
		}
	}
}