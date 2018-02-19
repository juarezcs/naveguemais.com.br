<?php

/*
|--------------------------------------------------------------------------
| Rotas Usuários
|--------------------------------------------------------------------------
|
| Rotas responsaveis pela portal naveguemais, como exicição dos anuncios e
| cadastro dos usuários e gestão do hotspot.
|
*/

Route::group(['namespace' => 'Portal', 'middleware' => 'guest'], function(){
    
    Route::get('/register', 'PortalAuth\RegisterController@showRegistrationForm');
    Route::post('/register', 'PortalAuth\RegisterController@register');    
    Route::get('/login', 'PortalAuth\LoginController@showLoginForm');
    Route::post('/login', 'PortalAuth\LoginController@login');
    
    //Password reset routes
    Route::get('/reset', 'PortalAuth\ForgotPasswordController@showLinkRequestForm');
    Route::post('/email', 'PortalAuth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('/reset/{token}', 'PortalAuth\ResetPasswordController@showResetForm');
    Route::post('reset', 'PortalAuth\ResetPasswordController@reset');
    
    //usuários vindo do hotspot
    Route::get('/guest/s/i1budkki', 'PortalAuth\LoginController@showLoginForm');
    Route::post('/guest/s/i1budkki', 'PortalAuth\LoginController@login');
    
});

Route::group(['namespace' => 'Portal', 'middleware' => 'auth'], function(){
    
    Route::post('/logout', 'PortalAuth\RegisterController@logout');
    Route::get('/', function(){ return view('portal.portalHome.index');});
    
});


/*
|--------------------------------------------------------------------------
| Rotas Anunciantes
|--------------------------------------------------------------------------
|
| Rotas responsaveis por gerenciar os clientes que anunciam na 
| plataforma.
|
*/

Route::group(['namespace' => 'AdvertiserPanel', 'middleware' => 'advertiser_guest'], function(){
    
    Route::get('/anunciantes/register', 'AdvertiserAuth\RegisterController@showRegistrationForm');
    Route::post('/anunciantes/register', 'AdvertiserAuth\RegisterController@register');
    Route::get('/anunciantes/login', 'AdvertiserAuth\LoginController@showLoginForm');
    Route::post('/anunciantes/login', 'AdvertiserAuth\LoginController@login');
    
    //Password reset routes
    Route::get('/anunciantes/reset', 'AdvertiserAuth\ForgotPasswordController@showLinkRequestForm');
    Route::post('/anunciantes/email', 'AdvertiserAuth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('/anunciantes/reset/{token}', 'AdvertiserAuth\ResetPasswordController@showResetForm');
    Route::post('/anunciantes/reset', 'AdvertiserAuth\ResetPasswordController@reset');
    
});

Route::group(['namespace' => 'AdvertiserPanel', 'middleware' => 'advertiser_auth'], function(){

    Route::post('/anunciantes/logout', 'AdvertiserAuth\LoginController@logout');
    Route::get('/anunciantes/panelHome', function(){ return view('advertiserPanel.adveriserHome.panelHome');});
    
});

/*
|--------------------------------------------------------------------------
| Rotas Anunciantes
|--------------------------------------------------------------------------
|
| Rotas responsaveis por gerenciar os clientes que anunciam na 
| plataforma.
|
*/

Route::group(['namespace' => 'CompanyDashboard'], function(){
    
    Route::get('/empresas/panelHome', function(){ return view('companyDashboard.companyHome.panelHome');});
    
});

