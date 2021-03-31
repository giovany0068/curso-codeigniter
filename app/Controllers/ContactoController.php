<?php

namespace App\Controllers;

class ContactoController extends BaseController
{
	public function index(){
		echo view('Contacto/header');
		echo view('Contacto/menu');
		echo view('Contacto/inicio');
		echo view('Contacto/footer');

	}
	public function catalogo(){
		echo view('Contacto/header');
		echo view('Contacto/menu');
		echo view('Contacto/catalogo');
		echo view('Contacto/footer');
	}
}
