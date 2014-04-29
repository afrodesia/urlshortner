<?php

class LinkController extends BaseController {

	public function make()
	{
		$validator = Validator::make(Input::all(), array(
			'url' => 'reqiured|url|max:255'
		));

		if($validator->fails){
			return Redirect::action('home')->withInput()->withErrors($validators);
		}else{
			echo 'Ok!'; 
		}
	}

	public function get($code)
	{
		return View::make('home');
	}

}