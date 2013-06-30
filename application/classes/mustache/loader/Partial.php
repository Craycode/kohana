<?php

class Mustache_Loader_Partial extends Mustache_Loader_Kohana
{
	/**
	 * Partial view context.
	 * 
	 * @var View_Default 
	 */
	protected $_parent_view;
	protected static $_view_base_dir = 'classes/View';

	/**
	 * {@inheritdoc}
	 */
	public function __construct($base_dir = NULL, $options = array())
	{
		parent::__construct($base_dir, $options);

		$this->_parent_view = $options['parent_view'];
	}

	/**
	 * {@inheritdoc}
	 */
	protected function _load_file($name)
	{
		if (strpos($name, 'view_') !== 0)
		{
			throw new Mustache_Exception_UnknownTemplateException($name);
		}

		$view_class = str_replace(' ', '_', ucwords(str_replace('_', ' ', $name)));

		if ( ! class_exists($view_class))
		{
			$view = new View_Default;
			$view->parent = $this->_parent_view;

			$template = explode('_', $name);
			array_shift($template);
			$template = implode('/', $template);

			return $view->render($view, $template);
		}

		$view = new $view_class;
		$view->parent = $this->_parent_view;

		return $view->render();
	}
}