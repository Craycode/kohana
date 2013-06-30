<?php

class K
{
	/**
	 * Mustache engine.
	 * 
	 * @var Kohana_Kostache
	 */
	public static $renderer;

	public static function debug($text)
	{
		echo "<pre>";
		print_r($text);
		echo "</pre>";
	}
}