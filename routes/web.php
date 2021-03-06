<?php

Route::group(['prefix' => '/', 'middleware' => ['mainInfo']], function () {
    Auth::routes();
    Route::get('/', 'MainController@index')->name('main');

    Route::get('/about-us', 'MainController@about')->name('about');

    Route::get('/news', 'MainController@news')->name('news');
    Route::get('/news/{code}', 'MainController@newsElement')->name('news.element');

    Route::get('/articles', 'ArticlesController@index')->name('articles');
    Route::get('/articles/{code}', 'ArticlesController@element')->name('articles.element');

    Route::get('/prices', 'PricesController@index')->name('prices');

    Route::get('/services', 'MainController@services')->name('services');
    Route::get('/services/{code}', 'MainController@servicesElement')->name('services.element');
    Route::get('/contacts', 'MainController@contacts')->name('contacts');

    Route::get('/reviews', 'ReviewsController@index')->name('reviews');
    Route::post('/reviews/add', 'ReviewsController@add')->name('reviews.add');

    Route::get('/gallery', 'GalleryController@index')->name('gallery');
});

Route::group(
    ['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'checkAdmin', 'infoToLayout']],
    function () {
        Route::get('/', 'AdminController@index')->name('admin');
        Route::get('/info', 'AdminController@info')->name('admin.info');
        Route::post('/info', 'AdminController@info')->name('admin.info.post');

        Route::get('/news', 'NewsController@news')->name('admin.news');
        Route::get('/news/create', 'NewsController@newsCreate')->name('admin.news.create');
        Route::post('/news/create', 'NewsController@newsCreate')->name('admin.news.create.post');
        Route::get('/news/edit/{id}', 'NewsController@newsEdit');
        Route::post('/news/edit/{id}', 'NewsController@newsEdit');
        Route::get('/news/delete/{id}', 'NewsController@newsDelete');

        Route::get('/article', 'ArticleController@index')->name('admin.article');
        Route::get('/article/create', 'ArticleController@create')->name('admin.article.create');
        Route::post('/article/create', 'ArticleController@create')->name('admin.article.create.post');
        Route::get('/article/edit/{id}', 'ArticleController@edit');
        Route::post('/article/edit/{id}', 'ArticleController@edit');
        Route::get('/article/delete/{id}', 'ArticleController@delete');

        Route::get('/services', 'ServiceController@services')->name('admin.services');
        Route::get('/services/create', 'ServiceController@serviceCreate')->name('admin.service.create');
        Route::post('/services/create', 'ServiceController@serviceCreate')->name('admin.service.create.post');
        Route::get('/services/edit/{id}', 'ServiceController@serviceEdit');
        Route::post('/services/edit/{id}', 'ServiceController@serviceEdit');
        Route::get('/services/delete/{id}', 'ServiceController@serviceDelete');

        Route::get('/prices', 'PricesController@index')->name('admin.prices');
        Route::post('/prices/save', 'PricesController@save')->name('admin.prices.post');

        Route::get('/pages', 'PageController@pages')->name('admin.pages');
        Route::get('/pages/create', 'PageController@pageCreate')->name('admin.pages.create');
        Route::post('/pages/create', 'PageController@pageCreate')->name('admin.pages.create.post');
        Route::get('/pages/edit/{id}', 'PageController@pageEdit');
        Route::post('/pages/edit/{id}', 'PageController@pageEdit');
        Route::get('/pages/delete/{id}', 'PageController@pageDelete');

        Route::get('/doctors', 'DoctorController@doctors')->name('admin.doctors');
        Route::get('/doctors/create', 'DoctorController@doctorCreate')->name('admin.doctor.create');
        Route::post('/doctors/create', 'DoctorController@doctorCreate')->name('admin.doctor.create.post');
        Route::get('/doctors/edit/{id}', 'DoctorController@doctorEdit');
        Route::post('/doctors/edit/{id}', 'DoctorController@doctorEdit');
        Route::get('/doctors/delete/{id}', 'DoctorController@doctorDelete');

        Route::get('/gallery', 'GalleryController@index')->name('admin.gallery');
        Route::get('/gallery/save', 'GalleryController@save')->name('admin.gallery.save');
        Route::post('/gallery/save', 'GalleryController@save')->name('admin.gallery.save.post');
        Route::post('/gallery/delete', 'GalleryController@delete')->name('admin.gallery.delete.post');

        Route::get('/liscence', 'LiscenceController@index')->name('admin.liscence');
        Route::get('/liscence/save', 'LiscenceController@save')->name('admin.liscence.save');
        Route::post('/liscence/save', 'LiscenceController@save')->name('admin.liscence.save.post');
        Route::post('/liscence/delete', 'LiscenceController@delete')->name('admin.liscence.delete.post');

        Route::get('/reviews', 'ReviewsController@index')->name('admin.reviews');
        Route::post('/reviews/update', 'ReviewsController@update')->name('admin.reviews.update');
        Route::get('/licenses', 'AdminController@licenses')->name('admin.licenses');

        Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
        Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
    }
);
