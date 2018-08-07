<?php

Route::get('/', 'AllviewsController@homepage')->name('homepage');

Route::get('/aboutus', 'AllviewsController@aboutus')->name('aboutpage');
Route::get('/contactus', 'AllviewsController@contactus')->name('contactpage');

Route::get('/annual-report', 'AllviewsController@annualreport')->name('annualpage');
Route::get('/nobin', 'AllviewsController@nobin')->name('nobinpage');

Route::get('/tas-project', 'AllviewsController@tasproject')->name('tasprojectpage');
Route::get('/ruslep-project', 'AllviewsController@ruslepproject')->name('ruslepprojectpage');
Route::get('/supporting-project', 'AllviewsController@supportingproject')->name('supportingprojectpage');

Route::get('/tas-gallary', 'AllviewsController@tasgallary')->name('tasgallarypage');
Route::get('/management-gallary', 'AllviewsController@managementgallary')->name('managementgallarypage');
Route::get('/ruslep-gallary', 'AllviewsController@ruslepgallary')->name('ruslepgallarypage');
Route::get('/supporting-gallary', 'AllviewsController@supportinggallary')->name('supportinggallarypage');

Route::get('/notice_board', 'AllviewsController@noticeboard')->name('noticeboardpage');

Route::auth();

Route::group(['middleware' => ['auth']], function() {

    Route::get('/dashboard', 'HomeController@index');
    Route::get('/administration/index', function () { return view('admin.administration.index'); });
    
    Route::resource('users', 'UserController');
    
    Route::get('permission/index', function () { return view('admin.administration.permissions.index'); });
    Route::get('roles/index', 'RoleController@index',['middleware' => ['permission:role-list|role-create|role-edit|role-delete']])->name ('roles');
    Route::get('roles/create', 'RoleController@create',['middleware' => ['permission:role-list|role-create|role-edit']])->name ('roleCreate');
    Route::post('roles/create', 'RoleController@store',['middleware' => ['permission:role-list|role-create|role-edit|role-delete']])->name ('roleStore');
    Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
    Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);
    Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);
    Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);
    
    
    //Noticeboard Routes
    Route::get('notice/index', 'NoticeboardController@index')->name('noticeboard');
    Route::get('notice/create', 'NoticeboardController@create')->name('noticeCreate');
    Route::post('notice/create', 'NoticeboardController@store')->name('noticeStore');
    Route::get('notice/edit/{id}', 'NoticeboardController@edit')->name('noticeEdit');
    Route::put('notice/update/{id}', 'NoticeboardController@update')->name('noticeUpdate');
    Route::delete('notice/{id}', 'NoticeboardController@destroy')->name('noticeDelete');
    
    
    //Settings Routes
    Route::get('settings', 'SettingsController@create')->name('settingsCreate');
    Route::post('settings', 'SettingsController@update')->name('settingsUpdate');
    //Settings Routes End
    
    
    //Sliders Part Start
    Route::get('sliders', 'SliderController@index')->name('sliders');
    Route::get('slider/create', 'SliderController@create')->name('sliderCreate');
    Route::post('slider/create', 'SliderController@store')->name('sliderStore');
    Route::get('slider/edit/{id}', 'SliderController@edit')->name('sliderEdit');
    Route::put('slider/update/{id}', 'SliderController@update')->name('sliderUpdate');
    Route::delete('slider/delete/{id}', 'SliderController@destroy')->name('sliderDelete');
    //Sliders Part End 
    
    
    //Gallary Post Part Start
    Route::get('gallary', 'GallaryController@index')->name('gallary');
    Route::get('gallary/create', 'GallaryController@create')->name('gallaryCreate');
    Route::post('gallary/create', 'GallaryController@store')->name('gallaryStore');
    Route::get('gallary/edit/{id}', 'GallaryController@edit')->name('gallaryEdit');
    Route::put('gallary/update/{id}', 'GallaryController@update')->name('gallaryUpdate');
    Route::delete('gallary/delete/{id}', 'GallaryController@destroy')->name('gallaryDelete');
    //Gallary Post Part End
    
    
    //Nobin Publication Part Start
    Route::get('nobinpublication', 'NobinController@index')->name('nobin');
    Route::get('nobinpublication/create', 'NobinController@create')->name('nobinCreate');
    Route::post('nobinpublication/create', 'NobinController@store')->name('nobinStore');
    Route::get('nobinpublication/edit/{id}', 'NobinController@edit')->name('nobinEdit');
    Route::put('nobinpublication/update/{id}', 'NobinController@update')->name('nobinUpdate');
    Route::delete('nobinpublication/delete/{id}', 'NobinController@destroy')->name('nobinDelete');
    //Nobin Publication Part End
    
    
    //Annual Report Publication Part Start
    Route::get('annualpublication', 'AnnualreportController@index')->name('annualreport');
    Route::get('annualpublication/create', 'AnnualreportController@create')->name('annualreportCreate');
    Route::post('annualpublication/create', 'AnnualreportController@store')->name('annualreportStore');
    Route::get('annualpublication/edit/{id}', 'AnnualreportController@edit')->name('annualreportEdit');
    Route::put('annualpublication/update/{id}', 'AnnualreportController@update')->name('annualreportUpdate');
    Route::delete('annualpublication/delete/{id}', 'AnnualreportController@destroy')->name('annualreportDelete');
    //Annual Report Publication Part End
    
    //News Routes
    Route::get('news', 'NewsController@create')->name('newsCreate');
    Route::post('news', 'NewsController@update')->name('newsUpdate');
    //News Routes End
        
    
    //Who Part Start
    Route::get('who', 'WhoController@index')->name('who');
    Route::get('who/create', 'WhoController@create')->name('whoCreate');
    Route::post('who/create', 'WhoController@store')->name('whoStore');
    Route::get('who/edit/{id}', 'WhoController@edit')->name('whoEdit');
    Route::put('who/update/{id}', 'WhoController@update')->name('whoUpdate');
    Route::delete('who/delete/{id}', 'WhoController@destroy')->name('whoDelete');
    //Who Part End
        
    
    //Home Project Part Start
    Route::get('homeproject', 'HomeProjectController@index')->name('homeproject');
    Route::get('homeproject/create', 'HomeProjectController@create')->name('homeprojectCreate');
    Route::post('homeproject/create', 'HomeProjectController@store')->name('homeprojectStore');
    Route::get('homeproject/edit/{id}', 'HomeProjectController@edit')->name('homeprojectEdit');
    Route::put('homeproject/update/{id}', 'HomeProjectController@update')->name('homeprojectUpdate');
    Route::delete('homeproject/delete/{id}', 'HomeProjectController@destroy')->name('homeprojectDelete');
    //Home Project Part End
        
    
    //Home Management Part Start
    Route::get('homemanagement', 'HomeManagementController@index')->name('homemanagement');
    Route::get('homemanagement/create', 'HomeManagementController@create')->name('homemanagementCreate');
    Route::post('homemanagement/create', 'HomeManagementController@store')->name('homemanagementStore');
    Route::get('homemanagement/edit/{id}', 'HomeManagementController@edit')->name('homemanagementEdit');
    Route::put('homemanagement/update/{id}', 'HomeManagementController@update')->name('homemanagementUpdate');
    Route::delete('homemanagement/delete/{id}', 'HomeManagementController@destroy')->name('homemanagementDelete');
    //Home Management Part End
        
    
    //Home Management Part Start
    Route::get('aboutmember', 'AboutMemberController@index')->name('aboutmember');
    Route::get('aboutmember/create', 'AboutMemberController@create')->name('aboutmemberCreate');
    Route::post('aboutmember/create', 'AboutMemberController@store')->name('aboutmemberStore');
    Route::get('aboutmember/edit/{id}', 'AboutMemberController@edit')->name('aboutmemberEdit');
    Route::put('aboutmember/update/{id}', 'AboutMemberController@update')->name('aboutmemberUpdate');
    Route::delete('aboutmember/delete/{id}', 'AboutMemberController@destroy')->name('aboutmemberDelete');
    //Home Management Part End
        
    
    //Project Part Start
    Route::get('project', 'ProjectController@index')->name('project');
    Route::get('project/create', 'ProjectController@create')->name('projectCreate');
    Route::post('project/create', 'ProjectController@store')->name('projectStore');
    Route::get('project/edit/{id}', 'ProjectController@edit')->name('projectEdit');
    Route::put('project/update/{id}', 'ProjectController@update')->name('projectUpdate');
    Route::delete('project/delete/{id}', 'ProjectController@destroy')->name('projectDelete');
    //Project Part End
        
    
    //staff Part Start
    Route::get('staff', 'StaffController@index')->name('staff');
    Route::get('staff/create', 'StaffController@create')->name('staffCreate');
    Route::post('staff/create', 'StaffController@store')->name('staffStore');
    Route::get('staff/edit/{id}', 'StaffController@edit')->name('staffEdit');
    Route::put('staff/update/{id}', 'StaffController@update')->name('staffUpdate');
    Route::delete('staff/delete/{id}', 'StaffController@destroy')->name('staffDelete');
    //staff Part End
    
    //Batch Part Start
    Route::get('batch', 'BatchController@index')->name('batch');
    Route::get('batch/create', 'BatchController@create')->name('batchCreate');
    Route::post('batch/create', 'BatchController@store')->name('batchStore');
    Route::get('batch/edit/{id}', 'BatchController@edit')->name('batchEdit');
    Route::put('batch/update/{id}', 'BatchController@update')->name('batchUpdate');
    Route::delete('batch/delete/{id}', 'BatchController@destroy')->name('batchDelete');
    //Batch Part End
    
    //Batch Part Start
    Route::get('batchtable', 'BatchtableController@index')->name('batchtable');
    Route::get('batchtable/create', 'BatchtableController@create')->name('batchtableCreate');
    Route::post('batchtable/create', 'BatchtableController@store')->name('batchtableStore');
    Route::get('batchtable/edit/{id}', 'BatchtableController@edit')->name('batchtableEdit');
    Route::put('batchtable/update/{id}', 'BatchtableController@update')->name('batchtableUpdate');
    Route::delete('batchtable/delete/{id}', 'BatchtableController@destroy')->name('batchtableDelete');
    //Batch Part End

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
