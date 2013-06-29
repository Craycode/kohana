<?php

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\Options;

class View_Default
{
	/**
	 * View options.
	 * 
	 * @var View_Options
	 */
	protected $_options;

	/**
	 * Get options.
	 * 
	 * @return View_Options
	 */
	public function get_options()
	{
		return $this->_options->all();
	}

	/**
	 * Set view option.
	 * 
	 * @param string $name Option name.
	 * @param mixed $value Option value.s
	 */
	public function set_option($name, $value)
	{
		$this->_options->set($name, $value);
	}

	public function params()
	{
		$this->_options = $this->_initialize_options(View_Options::create());
		echo "<pre>";
		print_r($this->_options->all());
		return $this->_options->all();
	}

	/**
	 * Initialise view options.
	 * 
	 * @param View_Options $options
	 * 
	 * @return View_Options
	 */
	protected function _initialize_options(View_Options $options)
	{
		return $options;
	}
}
