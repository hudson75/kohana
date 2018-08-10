<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Pc_Tour extends Controller {

	public function action_index()
	{
		$this->response->body('PS4, Go!');
	}
	public function action_book()
	{
		$view = View::factory('pc/page_view');
 
	    $view->places = array('Rome', 'Paris', 'London', 'New York', 'Tokyo');
//	    $view->user = $this->user;
	    $config = Kohana::$config->load('myconfig');
	    $options = $config->get('options') ;
	    print_r($options);
	    // The view will have $places and $user variables
	    $this->response->body($view);
	}

} // End Welcome
