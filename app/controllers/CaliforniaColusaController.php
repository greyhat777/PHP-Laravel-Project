<?php

class CaliforniaColusaController extends BaseController{

	public function colusa()
	{
		return View::make('states.california/city/colusa/colusa');

	}

	public function williams()
	{
		return View::make('states.california/city/colusa/williams');

	}



}