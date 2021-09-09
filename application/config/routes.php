<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = 'users';
$route['products/show/(:any)'] = 'products/show/$1';
$route['products/delete/(:any)/(:any)'] = 'products/delete/$1/$2';
$route['users/new-user'] = 'users/new_user';
$route['users/sign-in'] = 'users/sign_in';
$route['success'] = 'sessions/success';
$route['products/add-product'] = 'products/show';
$route['my/profile/(:any)'] = 'users/profile/$1';
$route['my/addresses'] = 'users/addresses';
$route['my/orders'] = 'users/orders';
$route['addresses/remove/(:num)'] = 'addresses/remove/$1';


$route['products/edit/(:any)'] = 'products/edit/$1';
$route['carts/delete/(:any)'] = 'carts/delete/$1';
$route['orders/new'] = 'orders/new_order';
$route['404_override'] = '';

/*$route['addresses/edit/(:num)'] = 'addresses/edit/$1';*/

/* End of file routes.php */
/* Location: ./application/config/routes.php */