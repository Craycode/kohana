<?php

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\Options;

class View_Welcome extends View_Default
{
	protected function _initialize_options(\View_Options $options)
	{
		return $options
			->addOption('sections')
				->addOption('first')
					->setTrue('enabled')
				->end()
			->end();
	}

	public function get_welcome()
	{
		return 'Hello my world!';
	}
}