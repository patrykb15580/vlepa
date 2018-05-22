<?php
class AntiSpam
{
	public static function isSpam()
	{
		return (self::sendByBot()) ? true : false;
	}
	private static function sendByBot($time = 8)
	{
		$display_time = time() - $_SESSION['mailing_form_display_time'];
		unset($_SESSION['mailing_form_display_time']);
		
		return ($display_time < $time) ? true : false;
	}
}
