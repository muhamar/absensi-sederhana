<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'Home';
$route['login'] = 'auth';
$route['logout'] = 'auth/logout';
$route['daftar'] = 'auth/registrasi';
$route['absen'] = 'absen';
$route['dashboard'] = 'dashboard';
$route['dashabsen'] = 'dashboard/daftarAbsen';
$route['dashuser'] = 'dashboard/daftarUser';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
