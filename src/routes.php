<?php


Route::group([
    'prefix' => config('saml2_settings.routesPrefix'),
    'middleware' => config('saml2_settings.routesMiddleware'),
], function () {

    Route::get('/logout', array(
        'as' => 'saml_logout',
        'uses' => 'Nirou\Saml2\Http\Controllers\Saml2Controller@logout',
    ));

    Route::get('/login/{index}', array(
        'as' => 'saml_login',
        'uses' => 'Nirou\Saml2\Http\Controllers\Saml2Controller@login',
    ));

    Route::get('/metadata', array(
        'as' => 'saml_metadata',
        'uses' => 'Nirou\Saml2\Http\Controllers\Saml2Controller@metadata',
    ));

    Route::post('/acs', array(
        'as' => 'saml_acs',
        'uses' => 'Nirou\Saml2\Http\Controllers\Saml2Controller@acs',
    ));

    Route::post('/acs_cms', array(
        'as' => 'saml_acs_cms',
        'uses' => 'Nirou\Saml2\Http\Controllers\Saml2Controller@acs_cms',
    ));

    Route::get('/sls', array(
        'as' => 'saml_sls',
        'uses' => 'Nirou\Saml2\Http\Controllers\Saml2Controller@sls',
    ));
});
