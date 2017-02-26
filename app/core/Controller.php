<?php

namespace App\Core;

class Controller {
/* 
Pravimo metod u base Controller-u klasi  koji ce nam omoguciti da ucitamo modul i u Controller-u cemo moci nesto da uradimo s njim,promenimo,updatujemo...
*/

    public function view($view, $data = [])
	{
		require_once '../app/views/' . $view . '.php';
	}

	public function model($model, $post = null)
	{
		require_once '../app/models/' . $model . '.php';
 
		$class = "\\app\\models\\" . $model;

		return new $class($post);
	}
}

/* 
Pravimo metod u base Controller-u klasi  koji ce nam omoguciti da ucitamo modul i u Controller-u cemo moci nesto da uradimo s njim,promenimo,updatujemo...
*/ 
