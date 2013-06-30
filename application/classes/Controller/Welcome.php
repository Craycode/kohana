<?php defined('SYSPATH') or die('No direct script access.');

use Symfony\Component\OptionsResolver\OptionsResolver;

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$view = new View_Welcome();
		$view->header_text = 'Header text set in the controller.';
		$this->response->body($view);
	}

} // End Welcome
