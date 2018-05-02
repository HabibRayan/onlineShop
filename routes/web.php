<?php



//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/','WelcomeController@index');
Route::get('/about-us','WelcomeController@aboutUs');
Route::get('/contact','WelcomeController@contact');
Route::get('/faqs','WelcomeController@faqs');
Route::get('/product-category/{id}','WelcomeController@category');
Route::get('/dining','WelcomeController@dining');
Route::get('/product-details/{id}', 'WelcomeController@productDetails');

Route::post('/add-to-cart', 'CartController@addToCart');
Route::get('/show-cart', 'CartController@showCart');
Route::post('/update-cart-product', 'CartController@updateCart');
Route::get('/delete-cartInfo/{id}', 'CartController@deleteCart');
Route::get('/direct-add-to-cart/{id}', 'CartController@directAddToCart');


Route::get('/checkout', 'CheckoutController@index');
Route::post('/new-customer', 'CheckoutController@saveCustomerInfo');
Route::get('/shipping-info', 'CheckoutController@showShippingInfo');

Route::post('/customer-login', 'CheckoutController@customerLogin');
Route::post('/customer-logout', 'CheckoutController@customerLogout');
Route::post('/new-shipping', 'CheckoutController@saveShippingInfo');
Route::get('/payment-info', 'CheckoutController@showPaymentInfo');
Route::post('/new-order', 'CheckoutController@saveOrderInfo');
Route::get('/thank-you', 'CheckoutController@thankYou');



Route::get('/order-info', 'OrderController@showOrderInfo');
Route::get('/view-order-details/{id}', 'OrderController@viewOrderDetail');
Route::get('/view-order-invoice/{id}', 'OrderController@viewOrderInvoice');
Route::get('/download-invoice/{id}', 'OrderController@downloadOrderInvoice');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add-category', 'CategoryController@addCategory');
Route::post('/new-category', 'CategoryController@saveCategoryInfo');

Route::get('/manage-category', 'CategoryController@manageCategoryInfo');
Route::get('/unpublished-category/{id}', 'CategoryController@unpublishedCategoryInfo');
Route::get('/published-category/{id}', 'CategoryController@publishedCategoryInfo');
Route::get('/edit-category/{id}', 'CategoryController@editCategoryInfo');
Route::post('/update-category', 'CategoryController@updateCategoryInfo');
Route::get('/delete-category/{id}', 'CategoryController@deleteCategoryInfo');



Route::get('/add-brand', 'BrandController@addBrand');
Route::post('/new-brand', 'BrandController@saveBrandInfo');
Route::get('/manage-brand', 'BrandController@manageBrand');
Route::get('/unpublished-brand/{id}', 'BrandController@unpublishedBrandInfo');
Route::get('/published-brand/{id}', 'BrandController@publishedBrandInfo');
Route::get('/edit-brand/{id}', 'BrandController@editBrandInfo');
Route::post('/update-brand', 'BrandController@updateBrandInfo');
Route::get('/delete-brand/{id}', 'BrandController@deleteBrandInfo');


Route::get('/add-product', 'ProductController@addProduct');
Route::post('/new-product', 'ProductController@saveProductInfo');

Route::get('/manage-product', 'ProductController@manageProductInfo');
Route::get('/view-product/{id}', 'ProductController@viewProductInfo');
Route::get('/edit-product/{id}', 'ProductController@editProductInfo');
Route::post('/update-product', 'ProductController@updateProductInfo');

Route::get('/unpublished-product/{id}', 'ProductController@unpublishedProductInfo');
Route::get('/published-product/{id}', 'ProductController@publishedProductInfo');
Route::get('/delete-product/{id}', 'ProductController@deleteProductInfo');


