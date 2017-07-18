<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['account/create'] = 'account/create';
$route['account/(:any)'] = 'account/view/$1';
$route['account'] = 'account';

$route['settings/create'] = 'settings/create';
$route['settings/(:any)'] = 'settings/view/$1';
$route['settings'] = 'settings';

$route['message/create'] = 'message/create';
$route['message/(:any)'] = 'message/view/$1';
$route['message'] = 'message';

$route['noticeboard/create'] = 'noticeboard/create';
$route['noticeboard/(:any)'] = 'noticeboard/view/$1';
$route['noticeboard'] = 'noticeboard';

$route['expense/create'] = 'expense/create';
$route['expense/(:any)'] = 'expense/view/$1';
$route['expense'] = 'expense';

$route['award/create'] = 'award/create';
$route['award/(:any)'] = 'award/view/$1';
$route['award'] = 'award';


$route['payslip/create1'] = 'payslip/create1';
$route['payslip/ajax_call'] = 'payslip/ajax_call';
$route['payslip/(:any)'] = 'payslip/view/$1';
$route['payslip'] = 'payslip';

$route['leave/create'] = 'leave/create';
$route['leave/(:any)'] = 'leave/view/$1';
$route['leave'] = 'leave';

$route['vacancy/create'] = 'vacancy/create';
$route['vacancy/(:any)'] = 'vacancy/view/$1';
$route['vacancy'] = 'vacancy';

$route['application/create'] = 'application/create';
$route['application/(:any)'] = 'application/view/$1';
$route['application'] = 'application';

$route['department/create'] = 'department/create';
$route['department/(:any)'] = 'department/view/$1';
$route['department'] = 'department';

$route['employee/create'] = 'employee/create';
$route['employee/edit'] = 'employee/edit/$1';
$route['employee/(:any)'] = 'employee/view/$1';
$route['employee'] = 'employee';

$route['news/create'] = 'news/create';
$route['news/(:any)'] = 'news/view/$1';
$route['news'] = 'news';

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';