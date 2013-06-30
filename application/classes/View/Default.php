<?php

class View_Default extends Kostache
{
	protected $_partials;

	/**
	 * {@inheritdoc}
	 */
	public function __construct()
	{
		// Inject this.
		$engine = new Mustache_Engine(
			array(
			'escape' => function($value)
			{
				return HTML::chars($value);
			},
			'cache' => APPPATH.'cache/mustache',
			)
		);

		parent::__construct($engine);
	}

	/**
	 * {@inheritdoc}
	 */
	public function render($object = null, $template = null)
	{
		/* @var $engine Mustache_Engine */
		$engine = $this->_engine;
		$engine->setLoader(new Mustache_Loader_Kohana());
		$engine->setHelpers(array(
			'widget' => new View_Widget,
		));

		$partial_loader = new Mustache_Loader_CascadingLoader(array(
			new Mustache_Loader_Partial(null, array('parent_view' => $this)),
			new Mustache_Loader_Kohana,
		));

		$engine->setPartialsLoader($partial_loader);

		return parent::render($object ? : $this, $template);
	}

	public function __toString()
	{
		try
		{
			return $this->render();
		}
		catch (Exception $e)
		{
			return "<div>".
				$e->getMessage().
				"</div><pre hidden>".
				$e->getTraceAsString().
				"</pre>";
		}
	}

	public function get_time()
	{
		$now = new DateTime;

		return $now->format('Y-m-d H:i:s');
	}
}
