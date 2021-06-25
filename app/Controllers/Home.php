<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		helper('form');
		return View('Home/index');
	}
}
