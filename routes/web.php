<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//=========================    ADMIN Routes     ============================//

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
});

//======================== PAGES && GROUP DISCOUNTS ============================//

Route::get('/', 'PagesController@getLanding');
Route::get('/tengroup', 'PagesController@getTenGroup');
Route::get('/twentygroup', 'PagesController@getTwentyGroup');
Route::get('/thirtygroup', 'PagesController@getThirtyGroup');
Route::get('/fiftygroup', 'PagesController@getFiftyGroup');
Route::get('/users', 'UsersController@index')->name('users.index');

Route::resource('/tengroups', 'TenGroupController');
Route::resource('/twentygroups', 'TwentyGroupController');
Route::resource('/thirtygroups', 'ThirtyGroupController');
Route::resource('/fiftygroups', 'FiftyGroupController');

Route::get('/checkouts', 'PagesController@getCheckouts')->name('checkouts');
Route::resource('/checkouts', 'CheckoutController');

Route::get('/hom', 'PagesController@getHome')->name('hom');

Route::get('/chooseplan', 'PagesController@getChoosePlan')->name('chooseplan');

Route::resource('/checkouts', 'CheckoutController');

//============================== PAGES  ============================//

// Route::get('/ten', 'PagesController@getTen')->name('ten');
// Route::get('/twenty', 'PagesController@getTwenty')->name('twenty');
// Route::get('/thirty', 'PagesController@getThirty')->name('thirty');
// Route::get('/fifty', 'PagesController@getFifty')->name('fifty');
// Route::get('/ten', 'PlanAController@getTen')->name('ten');

//=============================== FORMS ============================//

Route::get('/ten/create', 'PlanAController@create');
Route::get('/twenty/create', 'PlanBController@create');
Route::get('/thirty/create', 'PlanCController@create');
Route::get('/fifty/create', 'PlanDController@create');

Route::resource('/ten', 'PlanAController');
Route::resource('/twenty', 'PlanBController');
Route::resource('/thirty', 'PlanCController');
Route::resource('fifty','PlanDController');


// Route::get('/dynamic-field', 'dynamic-field');

Route::get('dynamic-field', 'DynamicFormController@index');

Route::post('dynamic-field/insert', 'DynamicFormController@insert')->name('dynamic-field.insert');

// Route::get('dynamic-field', 'DynamicFormController@getEnrollment');




