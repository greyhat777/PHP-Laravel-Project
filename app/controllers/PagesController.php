<?php

class PagesController extends BaseController{

	public function home()
	{
		return View::make('pages.home');

	}

	public function tunos()
	{
		return View::make('pages.tunos');

	}

	public function safety()
	{
		return View::make('pages.safety');

	}

	public function states()
	{
		return View::make('pages.states');

	}

	public function counties()
	{
		return View::make('states.california/county/counties');

	}


	public function dashboard()
	{
		return View::make('pages.dashboard');

	}


}