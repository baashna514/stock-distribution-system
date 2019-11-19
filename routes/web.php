<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Login
Route::get('/', 'LoginController@login_page')->name('user-login');
Route::post('/check-login-credentials', 'LoginController@check_login_credentials')->name('check-login-credentials');
Route::get('/user-logout', 'LoginController@logout')->name('user-logout');
// Registration
Route::get('/registration', 'RegisterController@create_account')->name('create-account');
Route::post('/registration-action', 'RegisterController@create_account_action')->name('create-account-action');

// Admin Dashboard
    Route::get('/admin-dashboard', 'AdminController@admin_dashboard')->name('admin.admin-dashboard');
    // Products
    Route::get('/admin-dashboard/product-list', 'AdminController@product_list')->name('admin-product.list-product');
    Route::get('/admin-dashboard/product-add', 'AdminController@product_add')->name('admin-product.add-product');
    Route::post('/admin-dashboard/product-add-action', 'AdminController@product_add_action')->name('admin-product.add-product-action');
    Route::get('/admin-dashboard/edit-product/{id}', 'AdminController@edit_product')->name('admin-product.edit-product');
    Route::post('/admin-dashboard/update-product/{id}', 'AdminController@update_product')->name('admin-product.update-product');
    Route::post('/admin-dashboard/delete-product/{id}', 'AdminController@delete_product')->name('admin-product.delete-product');
    // Customers
    Route::get('/admin-dashboard/customer/add-new', 'AdminController@customer_add')->name('admin-customer.add-customer');
    Route::post('/admin-dashboard/customer/add-new/check-requirements', 'AdminController@customer_add_action')->name('admin-customer.add-customer-action');
    Route::get('/admin-dashboard/customers', 'AdminController@customer_list')->name('admin-customer.list-customer');
    Route::get('/admin-dashboard/customers/credentials', 'AdminController@customer_credentials')->name('admin-customer.customer-credentials');
    Route::get('/admin-dashboard/customer/delete/{id}', 'AdminController@customer_delete')->name('admin-customer.delete-customer');
    Route::get('/admin-dashboard/customer/edit/{id}', 'AdminController@customer_edit')->name('admin-customer.edit-customer');
    Route::post('/admin-dashboard/customer/update/{id}', 'AdminController@customer_update')->name('admin-customer.update-customer');
    Route::get('/admin-dashboard/customers/requests', 'AdminController@customers_requests')->name('admin-customer.requests-customer');
    Route::post('/admin-dashboard/customers/requests/change-status/{id}', 'AdminController@customers_change_status')->name('admin-customer.requests-customers-change-status');
    // Distributors
    Route::get('/admin-dashboard/distributors', 'AdminController@distributor_list')->name('admin-distributor.list-distributor');
    Route::get('/admin-dashboard/distributors/edit-distributor/{id}', 'AdminController@distributor_edit')->name('admin-distributor.edit-distributor');
    Route::post('/admin-dashboard/distributors/update-distributor/{id}', 'AdminController@distributor_update')->name('admin-distributor.update-distributor');
    Route::get('/admin-dashboard/distributors/delete/{id}', 'AdminController@distributor_delete')->name('admin-distributor.delete-distributor');
    Route::get('/admin-dashboard/distributors/requests', 'AdminController@distributor_requests')->name('admin-distributor.requests-distributor');
    Route::get('/admin-dashboard/distributors/requests/change-status/{id}', 'AdminController@distributor_change_status')->name('admin-distributor.requests-distributors-change-status');
    Route::get('/admin-dashboard/add-new-distributor', 'AdminController@distributor_add')->name('admin-distributor.add-distributor');
    Route::post('/admin-dashboard/distributor/add-new/check-requirements', 'AdminController@distributor_add_action')->name('admin-distributor.add-distributor-action');
    Route::get('/admin-dashboard/distributors/credentials', 'AdminController@distributor_credentials')->name('admin-distributor.distributor-credentials');
    // Stock
    Route::get('/admin-dashboard/stocks/add-category', 'AdminController@add_category')->name('admin-stock.add-category');
    Route::post('/admin-dashboard/stocks/add-category/check-requirements', 'AdminController@add_category_action')->name('admin-stock.add-category-action');
    Route::get('/admin-dashboard/stocks/categories', 'AdminController@list_category')->name('admin-stock.list-category');
    Route::get('/admin-dashboard/stocks/categories/delete/{id}', 'AdminController@delete_category')->name('admin-stock.delete-category');
    Route::get('/admin-dashboard/stocks/categories/edit/{id}', 'AdminController@edit_category')->name('admin-stock.edit-category');
    Route::post('/admin-dashboard/stocks/categories/update/{id}', 'AdminController@update_category')->name('admin-stock.update-category');

    Route::get('/admin-dashboard/admin-stocks/add-stock', 'AdminController@add_stock')->name('admin-stock.add-new-stock');
    Route::post('/admin-dashboard/admin-stocks/add-stock/check-requirements', 'AdminController@add_stock_action')->name('admin-stock.add-new-stock-action');
    Route::get('/admin-dashboard/admin-stocks/add-stock/get-category-products', 'AdminController@get_category_products')->name('admin-stock.get-category-products');
    Route::get('/admin-dashboard/admin-stocks/add-stock/get-product-data', 'AdminController@get_product_data')->name('admin-stock.get-product-data');
    Route::get('/admin-dashboard/admin-stocks/list-stock', 'AdminController@list_stock')->name('admin-stock.list-stock');





    // Orders
    Route::get('/admin-dashboard/orders', 'AdminController@list_order')->name('admin-order.list-order');    
    Route::get('/admin-dashboard/add-new-order', 'AdminController@add_new_order')->name('admin-order.add-order');
    Route::post('/admin-dashboard/add-new-order-action', 'AdminController@add_new_order_action')->name('admin-order.add-new-order-action');




Route::get('/distributor-dashboard', 'DistributorController@distributor_dashboard')->name('distributor.distributor-dashboard');
Route::get('/customer-dashboard', 'CustomerController@customer_dashboard')->name('customer.customer-dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
