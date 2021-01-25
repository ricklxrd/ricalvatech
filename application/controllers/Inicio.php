<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Inicio extends CI_Controller {
public function index()
{
$datos['titulo'] = 'Curso Codeigniter';
$this->load->view('headfoot/header', $datos); //Cargar vista con datos
$this->load->view('body/menu'); // Cargar vista
$this->load->view('body/slider'); // Cargar vista
$this->load->view('body/seccion1'); // Cargar vista
$this->load->view('body/seccion2'); // Cargar vista
$this->load->view('headfoot/footer'); // Cargar vista
}
}