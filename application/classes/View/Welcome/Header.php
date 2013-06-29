<?php

class View_Welcome_Header extends View_Welcome
{
	protected function _initialize_options(\View_Options $options)
	{
		$opt =  parent::_initialize_options($options);
		$sections = $opt->offsetGet('sections');
		
		echo "<pre><b>In header</b><br>";
		print_r($sections);
		
		return $opt;
	}
}