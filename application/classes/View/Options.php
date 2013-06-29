<?php

use Symfony\Component\OptionsResolver\Options;

class View_Options extends Options
{
	/**
	 * Parent options.
	 * 
	 * @var View_Options
	 */
	protected $_parent;

	public static function create()
	{
		$options = new View_Options();

		return $options;
	}

	/**
	 * {@inheritdoc}
	 */
	public function set($option, $value)
	{
		if (!is_string($value) && !is_bool($value) && !$value instanceof View_Options)
		{
			throw new InvalidArgumentException('Type of view option value must be one of the following: string, boolean, View_Options');
		}

		parent::set($option, $value);
	}

	/**
	 * Set boolean FALSE option.
	 * 
	 * @param string $name
	 * 
	 * @return View_Options
	 */
	public function setFalse($name)
	{
		parent::set($name, false);

		return $this;
	}

	/**
	 * Set boolean TRUE option.
	 * 
	 * @param string $name
	 * 
	 * @return View_Options
	 */
	public function setTrue($name)
	{
		parent::set($name, true);

		return $this;
	}

	/**
	 * Set string option.
	 * 
	 * @param string $name
	 * @param string $value
	 * @throws InvalidArgumentException
	 * 
	 * @return View_Options
	 */
	public function setString($name, $value)
	{
		if (!is_string($value))
		{
			$type = gettype($value);
			throw new InvalidArgumentException("Option value '{$name}' must be of string type, it is: {$type}");
		}
		parent::set($name, $value);

		return $this;
	}

	/**
	 * 
	 * @param View_Options $parent
	 */
	public function setParent(View_Options $parent)
	{
		$this->_parent = $parent;
	}

	/**
	 * Set nested option.
	 * 
	 * @param string $name
	 * @param View_Options $value
	 * 
	 * @return View_Options
	 */
	public function addOption($name)
	{
		$new = new View_Options;
		$new->setParent($this);

		$call = function(Options $options, $value) use ($new)
			{
				return $new->all();
			};

		parent::set($name, $call);

		return $new;
	}

	public function end()
	{
		return $this->_parent;
	}
}