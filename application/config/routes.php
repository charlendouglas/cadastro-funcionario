<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Funcionarios
$route['funcionarios']['get'] = 'Funcionarios_controller/listar_funcionario';
$route['formulario-funcionario']['get'] = 'Funcionarios_controller/formulario_funcionario';