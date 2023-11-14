<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\admin\ArticlesController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\FullCalendarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UploadPDF;
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
Route::post('file-upload', [UploadPDF::class, 'upload'])->name('file.store');
Route::post('/download', [App\Http\Controllers\UploadPDF::class, 'download'])->name('reports.download');

// Assuming your namespace is 'App\Http\Controllers'
Route::get('/singleproduct/{id}', [PostsController::class, 'index'])->name('singleproduct');
// Assuming your namespace is 'App\Http\Controllers'
Route::get('/categoryproduct/{id}', [PostsController::class, 'categoryproduct'])->name('categoryproducts');
Route::get('/contact', [PostsController::class, 'contact'])->name('contactus');

Route::get('songs/create', [SongsController::class, 'create'])->name('song.create');
Route::post('songs', [SongsController::class, 'store'])->name('song.store');
Route::group(['namespace' => 'App\Http\Controllers\admin','prefix' => 'admin'], function () {

    Route::get('/createMainPage', 'MainPageController@create')->name('createMainPage');
    Route::post('/insertMainpage', 'MainPageController@insert')->name('insertMainPage');


    Route::get('/single_glass_jar_Page', 'SingleGlassJarPageController@create')->name('create_single_glass_jar_page');
    Route::post('/single_glass_jar_pageinsert', 'SingleGlassJarPageController@insert')->name('insert_single_glass_jar_page');

    Route::get('/single_plastic_barrels_page', 'SinglePlasticBarrelsPageContentController@create')->name('create_single_plastic_barrels_page_content');
    Route::post('/single_plastic_barrels_pageinsert', 'SinglePlasticBarrelsPageContentController@insert')->name('insert_single_plastic_barrels_page_contents_page');

    Route::get('/single_plastic_pails_page_contents', 'SinglePlasticPailsPageContentsController@create')->name('create_single_plastic_pails_page_contents');
    Route::post('/single_plastic_pails_page_contentss', 'SinglePlasticPailsPageContentsController@insert')->name('insert_single_plastic_pails_page_contents_page');

    Route::get('/single_plastic_pouch_page_contents', 'SinglePlasticPouchPageContentController@create')->name('create_single_plastic_pouch_page_contents');
    Route::post('/single_plastic_pouch_page_contents', 'SinglePlasticPouchPageContentController@insert')->name('insert_single_plastic_pouch_page_contents_page');


    Route::get('/single_metallic_tins_page_contents', 'SingleMetallicTinsPageController@create')->name('create_single_metallic_tins_page_contents');
    Route::post('/single_metallic_tins_page_contentsinsert', 'SingleMetallicTinsPageController@insert')->name('insert_single_metallic_tins_page_contents');

    Route::get('/single_pet_jar_page_contents', 'SinglePetJarPageController@create')->name('create_single_pet_jar_page_contents');
    Route::post('/single_pet_jar_page_contentsinsert', 'SinglePetJarPageController@insert')->name('insert_single_pet_jar_page_contents');

    Route::group(['prefix' => 'jawharaProduct'], function () {
        Route::get('/','JawharacProductController@index') -> name('admin.product');
        Route::get('create','JawharacProductController@create') -> name('admin.product.create');
        Route::post('store','JawharacProductController@store') -> name('admin.product.store');
        Route::get('edit/{id}','JawharacProductController@edit') -> name('admin.product.edit');
        Route::post('update/{id}','JawharacProductController@update') -> name('admin.product.update');
        Route::get('delete/{id}','JawharacProductController@destroy') -> name('admin.product.delete');
    });


    Route::group(['prefix' => 'jawharaCategory'], function () {
        Route::get('/','JawharaCategoryController@index') -> name('admin.category');
        Route::get('create','JawharaCategoryController@create') -> name('admin.category.create');
        Route::post('store','JawharaCategoryController@store') -> name('admin.category.store');
        Route::get('edit/{id}','JawharaCategoryController@edit') -> name('admin.category.edit');
        Route::post('update/{id}','JawharaCategoryController@update') -> name('admin.category.update');
        Route::get('delete/{id}','JawharaCategoryController@destroy') -> name('admin.category.delete');
    });










});

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('ckeditor', [FullCalendarController::class, 'index']);
// Route::post('fullcalendar/create', [FullCalendarController::class, 'create']);
// Route::post('fullcalendar/update', [FullCalendarController::class, 'update']);
// Route::post('fullcalendar/delete', [FullCalendarController::class, 'destroy']);
Auth::routes(['register'=>false]);
Route::get('calendar-event', [CalenderController::class, 'index']);
Route::post('calendar-crud-ajax', [CalenderController::class, 'calendarEvents']);
// Route::get('singleproduct', [HomeController::class, 'index'])->name('singleproduct');



Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

    Route::get('/', 'HomeControllerr@index')->name('welcome');
    Route::post('/', 'EmailsController@store')->name('emails');
    // Route::get('', 'HomeControllerr@');/
    Route::get('/getevent', 'FullCalendarController@getEvent');
Route::post('/createevent','FullCalendarController@createEvent');
Route::post('/deleteevent','FullCalendarController@deleteEvent');
    ####################################################### News
    Route::get('/index','front\ArticlesController@index')->name('index');
    Route::get('/article/{id}','front\ArticlesController@article')->name('article');
    Route::get('/category/{id}','front\ArticlesController@category')->name('category');
    Route::post('/comment/insert/{id}','front\ArticlesController@comment_insert')->name('comment');

    Route::get('/comment/delete/{id}','front\ArticlesController@comment_delete') -> name('deletecomment');


    Route::post('/search','front\ArticlesController@search')->name('search');
    ###########################################################################################################
    // Route::get('/', 'HomeController@index')->name('home.index');

    // Route::group(['middleware' => ['guest']], function() {

    // });

    // Route::group(['middleware' => ['auth', 'permission']], function() {







        Route::group(['prefix' => 'posts'], function() {
            // Route::get('/singleproduct/{id}', 'PostsController@index')->name('singleproduct');
            // Route::get('/categoryproduct/{id}', 'PostsController@categoryproduct')->name('categoryproduct');
            // Route::get('/contactus', 'PostsController@contact')->name('contactus');











            Route::post('/create', 'PostsController@store')->name('posts.store');
            Route::get('/{post}/show', 'PostsController@show')->name('posts.show');
            Route::get('/{post}/edit', 'PostsController@edit')->name('posts.edit');
            Route::patch('/{post}/update', 'PostsController@update')->name('posts.update');
            Route::delete('/{post}/delete', 'PostsController@destroy')->name('posts.destroy');
        });

        Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);
    // });
});




Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth']
], function () {


    Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('admin.dashboard');


    });

});




Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth']
], function () {

    Route::group(['namespace' => 'App\Http\Controllers\Dashboard', 'prefix' => 'admin'], function () {



           Route::get('city/restore/one/{id}', 'CityController@restore')->name('city.restore');
           Route::get('city/restoreAll', 'CityController@restoreAll')->name('city.restore.all');
           Route::get('/task/destroy/{id}','CityController@damage')->name('city.damage');


           Route::get('car/restore/one/{id}', 'CarController@restore')->name('car.restore');
           Route::get('car/restoreAll', 'CarController@restoreAll')->name('car.restore.all');
           Route::get('/task/destroy/{id}','caraController@damage')->name('car.damage');



           Route::get('carmodel/restore/one/{id}', 'CarModelController@restore')->name('carmodel.restore');
           Route::get('carmodel/restoreAll', 'CarModelController@restoreAll')->name('carmodel.restore.all');
           Route::get('/task/destroy/{id}','CarmodelController@damage')->name('carmodel.damage');


           Route::get('codriver/restore/one/{id}', 'CodriverController@restore')->name('codriver.restore');
           Route::get('codriver/restoreAll', 'CodriverController@restoreAll')->name('codriver.restore.all');
           Route::get('/task/destroy/{id}','CodriverController@damage')->name('codriver.damage');


           Route::get('company/restore/one/{id}', 'CompanyController@restore')->name('company.restore');
           Route::get('company/restoreAll', 'CompanyContoller@restoreAll')->name('comapny.restore.all');
           Route::get('/task/destroy/{id}','CompanyController@damage')->name('company.damage');


           Route::get('drivers/restore/one/{id}', 'DriversController@restore')->name('drivers.restore');
           Route::get('drivers/restoreAll', 'DriversController@restoreAll')->name('drivers.restore.all');
           Route::get('/task/destroy/{id}','DriversController@damage')->name('drivers.damage');


           Route::get('users/restore/one/{id}', 'UsersController@restore')->name('users.restore');
           Route::get('users/restoreAll', 'UsersController@restoreAll')->name('users.restore.all');
           Route::get('/task/destroy/{id}','UsersController@damage')->name('users.damage');


           Route::get('trip/restore/one/{id}', 'TripController@restore')->name('trip.restore');
           Route::get('trip/restoreAll', 'TripController@restoreAll')->name('trip.restore.all');
           Route::get('/task/destroy/{id}','TripController@damage')->name('trip.damage');

        //    Route::get('/datesearch', 'TripController@searchindex')->name('page.report');
           Route::get('/report', 'TripController@daily_report')->name('report');









###########################################################################################################
###########################################################################################################
###########################################################################################################













        Route::group(['prefix' => 'city'], function () {
            Route::get('/','CityController@index') -> name('admin.city');
            Route::get('create','CityController@create') -> name('admin.city.create');
            Route::post('store','CityController@store') -> name('admin.city.store');
            Route::get('edit/{id}','CityController@edit') -> name('admin.city.edit');
            Route::post('update/{id}','CityController@update') -> name('admin.city.update');
            Route::get('delete/{id}','CityController@destroy') -> name('admin.city.delete');
         });

         ################################## carmodels routes ######################################


        ################################## end categories    #######################################

        ################################## users routes ######################################
        Route::group(['prefix' => 'users'], function () {
            Route::get('/','UsersController@index') -> name('admin.users');
            Route::get('create','UsersController@create') -> name('admin.users.create');
            Route::post('store','UsersController@store') -> name('admin.users.store');
            Route::get('/{user}/edit','UsersController@edit') -> name('admin.users.edit');
            Route::post('update/{id}','UsersController@update') -> name('admin.users.update');
            Route::get('delete/{id}','UsersController@destroy') -> name('admin.users.delete');
        });

        ################################## end categories    #######################################

        ################################## cars routes ######################################

        ################################## end brands    #######################################

        ################################## drivers routes ######################################
        Route::group(['prefix' => 'drivers'], function () {
            // Route::get('/','DriversController@index') -> name('admin.drivers');
            Route::get('create','DriversController@create') -> name('admin.drivers.create');
            Route::post('store','DriversController@store') -> name('admin.drivers.store');
            // Route::get('edit/{id}','DriversController@edit') -> name('admin.drivers.edit');
            // Route::post('update/{id}','DriversController@update') -> name('admin.drivers.update');
            // Route::get('delete/{id}','DriversController@destroy') -> name('admin.drivers.delete');




        });
        ################################## end brands    #######################################

        ################################## trips routes ######################################
        Route::group(['prefix' => 'trip'], function () {
            Route::get('/','TripController@index') -> name('admin.trip');
            Route::get('create','TripController@create') -> name('admin.trip.create');
            Route::post('store','TripController@store') -> name('admin.trip.store');
             Route::get('delete/{id}','TripController@destroy') -> name('admin.trip.delete');
            Route::get('edit/{id}','TripController@edit') -> name('admin.trip.edit');
            Route::post('update/{id}','TripController@update') -> name('admin.trip.update');
        });
        ################################## end brands    #######################################

        ################################## codriver routes ######################################
        Route::group(['prefix' => 'codriver'], function () {
            Route::get('/','CodriverController@index') -> name('admin.codriver');
            Route::get('create','CodriverController@create') -> name('admin.codriver.create');
            Route::post('store','CodriverController@store') -> name('admin.codriver.store');
             Route::get('delete/{id}','CodriverController@destroy') -> name('admin.codriver.delete');
            Route::get('edit/{id}','CodriverController@edit') -> name('admin.codriver.edit');
            Route::post('update/{id}','CodriverController@update') -> name('admin.codriver.update');
        });
        ################################## end attributes    #######################################

        ################################## companies ######################################
        Route::group(['prefix' => 'companies'], function () {
            Route::get('/','CompanyController@index') -> name('admin.company');
            Route::get('create','CompanyController@create') -> name('admin.company.create');
            Route::post('store','CompanyController@store') -> name('admin.company.store');
            Route::get('delete/{id}','CompanyController@destroy') -> name('admin.company.delete');
            Route::get('edit/{id}','CompanyController@edit') -> name('admin.company.edit');
            Route::post('update/{id}','CompanyController@update') -> name('admin.company.update');
        });
        ################################## end options    #######################################



    });



});




Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth']
], function () {


    // Route::get('/live_search',[App\Http\Controllers\LiveSearch::class, 'index'])->name('live_search');
    Route::get('/live_search/action', [App\Http\Controllers\LiveSearch::class, 'action'])->name('live_search.action');

    Route::group(['namespace' => 'App\Http\Controllers\admin','prefix' => 'admin'], function () {
      ####################################################################################### News
      Route::get('/category','CategoryController@index')->name('category.index');
      Route::get('/category/create','CategoryController@create')->name('category.create');
      Route::get('/category/trashed','CategoryController@trashed')->name('category.trashed');
      Route::post('/category/insert','CategoryController@insert')->name('category.insert');
      Route::get('/category/trash/{id}','CategoryController@trash')->name('category.trash');
      Route::get('/category/restore/{id}','CategoryController@restore')->name('category.restore');
      Route::get('/category/remove/{id}','CategoryController@remove')->name('category.remove');
      Route::get('/category/edit/{id}','CategoryController@edit')->name('category.edit');
      Route::post('/category/update/{id}','CategoryController@update')->name('category.update');


      Route::get('/articles','ArticlesController@index')->name('articles.index');
      Route::get('/articles/create','ArticlesController@create')->name('articles.create');
      Route::get('/articles/trashed','ArticlesController@trashed')->name('articles.trashed');
      Route::post('/articles/insert','ArticlesController@insert')->name('articles.insert');
      Route::get('/articles/trash/{id}','ArticlesController@trash')->name('articles.trash');
      Route::get('/articles/restore/{id}','ArticlesController@restore')->name('articles.restore');
      Route::get('/articles/remove/{id}','ArticlesController@remove')->name('articles.remove');
      Route::get('/articles/edit/{id}','ArticlesController@edit')->name('articles.edit');
      Route::post('/articles/update/{id}','ArticlesController@update')->name('articles.update');
        // Route::post('/articlessearch','ArticlesController@search')->name('search');

    });
      ########################################################################################################


    Route::group(['namespace' => 'App\Http\Controllers'], function()
    {
        Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);

    });
    Route::group(['namespace' => 'App\Http\Controllers','prefix' => 'admin'], function () {
        // Route::get('/live_search','LiveSearchdriver@index')->name('search.drivers');
        // Route::get('/live_search/action',)->name('live_search.action');

           Route::get('/driver/search', 'LiveSearchdriver@search')->name('search.driver.action');
           Route::get('/user/search', 'UserLiveSearch@search')->name('search.users');
           Route::get('/trip/search', 'TripLiveSearch@search')->name('search.trips');
           Route::get('/city/search', 'CityLiveSearch@search')->name('search.cities');
           Route::get('/codriver/search', 'CodriverLiveSearch@search')->name('search.codrivers');
           Route::get('/company/search', 'CompanyLiveSearch@search')->name('search.companies');
           Route::get('/carmodel/search', 'CarmodelLiveSearch@search')->name('search.carmodels');
           Route::get('/car/search', 'CarLiveSearch@search')->name('search.car');





        });

});
