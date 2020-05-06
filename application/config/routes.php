<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'notes_temp';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;


/// ROUTES START FOR notes_temp
$route['notes_temp'] = 'notes/notes_temp/c_notes_temp';
$route['notes_temp/(:any)'] = 'notes/notes_temp/c_notes_temp/$1';
$route['notes_temp/(:any)/(:any)']               = 'notes/notes_temp/c_notes_temp/$1/$2';
$route['notes_temp/(:any)/(:num)/(:any)']        = 'notes/notes_temp/c_notes_temp/$1/$2/$3';
$route['notes_temp/(:any)/(:any)/(:any)/(:any)'] = 'notes/notes_temp/c_notes_temp/$1/$2/$3/$4';