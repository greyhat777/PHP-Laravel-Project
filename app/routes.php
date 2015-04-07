


<?php



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

Route::get('logout', array('uses' => 'HomeController@doLogout'));

// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));



/*Routes for the restfull listings controller*/
Route::resource('listings', 'ListingController');

Route::get('/dashboard', 'PagesController@dashboard');


/*Routes for main pages*/
Route::get('/', 'PagesController@home');
Route::get('/tunos', 'PagesController@tunos');
Route::get('/safety', 'PagesController@safety');
Route::get('/states', 'PagesController@states');
Route::get('/states/california/county', 'PagesController@counties');


/*Routes for California*/
Route::get('/states/california/county/alameda', 'CaliforniaController@alameda');
Route::get('/states/california/county/alpine', 'CaliforniaController@alpine');
Route::get('/states/california/county/amador', 'CaliforniaController@amador');
Route::get('/states/california/county/butte', 'CaliforniaController@butte');
Route::get('/states/california/county/calaveras', 'CaliforniaController@calaveras');
Route::get('/states/california/county/colusa', 'CaliforniaController@colusa');
Route::get('/states/california/county/contracosta', 'CaliforniaController@contracosta');
Route::get('/states/california/county/delnorte', 'CaliforniaController@delnorte');
Route::get('/states/california/county/eldorado', 'CaliforniaController@eldorado');
Route::get('/states/california/county/fresno', 'CaliforniaController@fresno');
Route::get('/states/california/county/glenn', 'CaliforniaController@glenn');
Route::get('/states/california/county/humboldt', 'CaliforniaController@humboldt');
Route::get('/states/california/county/imperial', 'CaliforniaController@imperial');
Route::get('/states/california/county/inyo', 'CaliforniaController@inyo');
Route::get('/states/california/county/kern', 'CaliforniaController@kern');
Route::get('/states/california/county/kings', 'CaliforniaController@kings');
Route::get('/states/california/county/lake', 'CaliforniaController@lake');
Route::get('/states/california/county/lassen', 'CaliforniaController@lassen');
Route::get('/states/california/county/losangeles', 'CaliforniaController@losangeles');
Route::get('/states/california/county/madera', 'CaliforniaController@madera');
Route::get('/states/california/county/marin', 'CaliforniaController@marin');
Route::get('/states/california/county/mariposa', 'CaliforniaController@mariposa');
Route::get('/states/california/county/mendocino', 'CaliforniaController@mendocino');
Route::get('/states/california/county/merced', 'CaliforniaController@merced');
Route::get('/states/california/county/modoc', 'CaliforniaController@modoc');
Route::get('/states/california/county/mono', 'CaliforniaController@mono');
Route::get('/states/california/county/monterey', 'CaliforniaController@monterey');
Route::get('/states/california/county/napa', 'CaliforniaController@napa');
Route::get('/states/california/county/nevada', 'CaliforniaController@nevada');
Route::get('/states/california/county/orange', 'CaliforniaController@orange');
Route::get('/states/california/county/placer', 'CaliforniaController@placer');
Route::get('/states/california/county/plumas', 'CaliforniaController@plumas');
Route::get('/states/california/county/riverside', 'CaliforniaController@riverside');
Route::get('/states/california/county/sacramento', 'CaliforniaController@sacramento');
Route::get('/states/california/county/sanbenito', 'CaliforniaController@sanbenito');
Route::get('/states/california/county/sanbernardino', 'CaliforniaController@sanbernardino');
Route::get('/states/california/county/sandiego', 'CaliforniaController@sandiego');
Route::get('/states/california/county/sanfrancisco', 'CaliforniaController@sanfrancisco');
Route::get('/states/california/county/sanjoaquin', 'CaliforniaController@sanjoaquin');
Route::get('/states/california/county/sanluisobispo', 'CaliforniaController@sanluisobispo');
Route::get('/states/california/county/sanmateo', 'CaliforniaController@sanmateo');
Route::get('/states/california/county/santabarbara', 'CaliforniaController@santabarbara');
Route::get('/states/california/county/santaclara', 'CaliforniaController@santaclara');
Route::get('/states/california/county/santacruz', 'CaliforniaController@santacruz');
Route::get('/states/california/county/shasta', 'CaliforniaController@shasta');
Route::get('/states/california/county/sierra', 'CaliforniaController@sierra');
Route::get('/states/california/county/siskiyou', 'CaliforniaController@siskiyou');
Route::get('/states/california/county/solano', 'CaliforniaController@solano');
Route::get('/states/california/county/sonoma', 'CaliforniaController@sonoma');
Route::get('/states/california/county/stanislaus', 'CaliforniaController@stanislaus');
Route::get('/states/california/county/sutter', 'CaliforniaController@sutter');
Route::get('/states/california/county/tehama', 'CaliforniaController@tehama');
Route::get('/states/california/county/trinity', 'CaliforniaController@trinity');
Route::get('/states/california/county/tulare', 'CaliforniaController@tulare');
Route::get('/states/california/county/tuolumne', 'CaliforniaController@tuolumne');
Route::get('/states/california/county/ventura', 'CaliforniaController@ventura');
Route::get('/states/california/county/siskiyou', 'CaliforniaController@siskiyou');
Route::get('/states/california/county/yolo', 'CaliforniaController@yolo');
Route::get('/states/california/county/yuba', 'CaliforniaController@yuba');


/*Routes for Fresno County*/
Route::get('/states/california/city/fresno/clovis', 'CaliforniaFresnoController@clovis');
Route::get('/states/california/city/fresno/coalinga', 'CaliforniaFresnoController@coalinga');
Route::get('/states/california/city/fresno/amador', 'CaliforniaFresnoController@amador');
Route::get('/states/california/city/fresno/firebaugh', 'CaliforniaFresnoController@firebaugh');
Route::get('/states/california/city/fresno/fowler', 'CaliforniaFresnoController@fowler');
Route::get('/states/california/city/fresno/fresno', 'CaliforniaFresnoController@fresno');
Route::get('/states/california/city/fresno/huron', 'CaliforniaFresnoController@huron');
Route::get('/states/california/city/fresno/kerman', 'CaliforniaFresnoController@kerman');
Route::get('/states/california/city/fresno/kingsburg', 'CaliforniaFresnoController@kingsburg');
Route::get('/states/california/city/fresno/mendota', 'CaliforniaFresnoController@mendota');
Route::get('/states/california/city/fresno/orangecove', 'CaliforniaFresnoController@orangecove');
Route::get('/states/california/city/fresno/parlier', 'CaliforniaFresnoController@parlier');
Route::get('/states/california/city/fresno/reedley', 'CaliforniaFresnoController@reedley');
Route::get('/states/california/city/fresno/sanger', 'CaliforniaFresnoController@sanger');
Route::get('/states/california/city/fresno/sanjoaquin', 'CaliforniaFresnoController@sanjoaquin');
Route::get('/states/california/city/fresno/selma', 'CaliforniaFresnoController@selma');


/*Routes for Alameda County*/
Route::get('/states/california/city/alameda/alameda', 'CaliforniaAlamedaController@alameda');
Route::get('/states/california/city/alameda/albany', 'CaliforniaAlamedaController@albany');
Route::get('/states/california/city/alameda/berkeley', 'CaliforniaAlamedaController@berkeley');
Route::get('/states/california/city/alameda/dublin', 'CaliforniaAlamedaController@dublin');
Route::get('/states/california/city/alameda/emeryville', 'CaliforniaAlamedaController@emeryville');
Route::get('/states/california/city/alameda/fremont', 'CaliforniaAlamedaController@fremont');
Route::get('/states/california/city/alameda/hayward', 'CaliforniaAlamedaController@hayward');
Route::get('/states/california/city/alameda/livermore', 'CaliforniaAlamedaController@livermore');
Route::get('/states/california/city/alameda/newark', 'CaliforniaAlamedaController@newark');
Route::get('/states/california/city/alameda/oakland', 'CaliforniaAlamedaController@oakland');
Route::get('/states/california/city/alameda/piedmont', 'CaliforniaAlamedaController@piedmont');
Route::get('/states/california/city/alameda/sanleandro', 'CaliforniaAlamedaController@sanleandro');
Route::get('/states/california/city/alameda/unioncity', 'CaliforniaAlamedaController@unioncity');


/*Routes for Amador County*/
Route::get('/states/california/city/amador/amadorcity', 'CaliforniaAmadorController@amadorcity');
Route::get('/states/california/city/amador/ione', 'CaliforniaAmadorController@ione');
Route::get('/states/california/city/amador/jackson', 'CaliforniaAmadorController@jackson');
Route::get('/states/california/city/amador/plymouth', 'CaliforniaAmadorController@plymouth');
Route::get('/states/california/city/amador/suttercreek', 'CaliforniaAmadorController@suttercreek');


/*Routes for Butte County*/
Route::get('/states/california/city/butte/biggs', 'CaliforniaButteController@biggs');
Route::get('/states/california/city/butte/chico', 'CaliforniaButteController@chico');
Route::get('/states/california/city/butte/gridley', 'CaliforniaButteController@gridley');
Route::get('/states/california/city/butte/oroville', 'CaliforniaButteController@oroville');
Route::get('/states/california/city/butte/paradise', 'CaliforniaButteController@paradise');



/*Routes for Calaveras County*/
Route::get('/states/california/city/calaveras/cityofangels', 'CaliforniaCalaverasController@cityofangels');


/*Routes for Colusa County*/
Route::get('/states/california/city/colusa/colusa', 'CaliforniaColusaController@colusa');
Route::get('/states/california/city/colusa/williams', 'CaliforniaColusaController@williams');


/*Routes for Contra Costa County*/
Route::get('/states/california/city/contracosta/antioch', 'CaliforniaContracostaController@antioch');
Route::get('/states/california/city/contracosta/brentwood', 'CaliforniaContracostaController@brentwood');
Route::get('/states/california/city/contracosta/clayton', 'CaliforniaContracostaController@clayton');
Route::get('/states/california/city/contracosta/concord', 'CaliforniaContracostaController@concord');
Route::get('/states/california/city/contracosta/danville', 'CaliforniaContracostaController@danville');
Route::get('/states/california/city/contracosta/elcerrito', 'CaliforniaContracostaController@elcerrito');
Route::get('/states/california/city/contracosta/hercules', 'CaliforniaContracostaController@hercules');
Route::get('/states/california/city/contracosta/lafayette', 'CaliforniaContracostaController@lafayette');
Route::get('/states/california/city/contracosta/martinez', 'CaliforniaContracostaController@martinez');
Route::get('/states/california/city/contracosta/moraga', 'CaliforniaContracostaController@moraga');
Route::get('/states/california/city/contracosta/oakley', 'CaliforniaContracostaController@oakley');
Route::get('/states/california/city/contracosta/orinda', 'CaliforniaContracostaController@orinda');
Route::get('/states/california/city/contracosta/pinole', 'CaliforniaContracostaController@pinole');
Route::get('/states/california/city/contracosta/pittsburg', 'CaliforniaContracostaController@pittsburg');
Route::get('/states/california/city/contracosta/pleasanthill', 'CaliforniaContracostaController@pleasanthill');
Route::get('/states/california/city/contracosta/richmond', 'CaliforniaContracostaController@richmond');
Route::get('/states/california/city/contracosta/sanpablo', 'CaliforniaContracostaController@sanpablo');
Route::get('/states/california/city/contracosta/sanramon', 'CaliforniaContracostaController@sanramon');
Route::get('/states/california/city/contracosta/walnutcreek', 'CaliforniaContracostaController@walnutcreek');

