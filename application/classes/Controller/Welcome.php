<?php defined('SYSPATH') or die('No direct script access.');

use Symfony\Component\OptionsResolver\OptionsResolver;

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$view = new View_Welcome_Header();
		$body = K::$renderer->render($view);
		$this->response->body($body);
	}

} // End Welcome
