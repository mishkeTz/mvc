<?php

class Controller {
    public function view($view, $data = [])
	{
		require_once '../app/views/' . $view . '.php';
	}

	public function model($model)
	{
		require_once '../app/models/' . $model . '.php';

		return new $model();
	}
}
/* 
Pravimo metod u base Controller-u klasi  koji ce nam omoguciti da ucitamo modul i u Controller-u cemo moci nesto da uradimo s njim,promenimo,updatujemo...
*/ 