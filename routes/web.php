<?php

use Illuminate\Support\Facades\Route;

// Link Login
Route::get('/auth', 'AuthController@index')->name('login');
// Link Auth
Route::post('/authentic', 'AuthController@authentic');
Route::get('/logout', 'AuthController@logout');

//Ojk
Route::get('/ojkreport', 'UserController@ojk_report');
Route::get('/downloadojk/{filename}', 'UserController@ojk_download');
Route::get('/bireport', 'UserController@bi_report');
Route::get('/downloadbi/{filename}', 'UserController@bi_download');

//ManualDpp
Route::get('/manualdppreport', 'UserController@manualdpp_report');
Route::get('/downloadmanualdpp/{filename}', 'UserController@manualdpp_download');
//ManualRc
Route::get('/manualrcreport', 'UserController@manualrc_report');
Route::get('/downloadmanualrc/{filename}', 'UserController@manualrc_download');

Route::group(['middleware' => 'revalidate'], function () {
    // Routes yang mau di revalidate masukan di sini
    Route::group(['middleware' => ['auth', 'checkRole:2']], function () {
        // Link Tools
        Route::get('/toolsb', 'ToolsController@index');
        Route::post('/cr_sugcom', 'UserController@cr_sugcom');
        Route::get('/compose', 'PortalController@composemail');
        Route::get('/email', 'PortalController@email');
        // Profile
        Route::get('/profile', 'PortalController@profile');
        // Change Password
        // Route::post('/updatepassworduser/{id}', 'PortalController@updatepassuser');
        Route::post('/updatepassworduser/{id}', 'UserController@updatepassuser');

        //////////////////////////////////////////
        // Link feature
        Route::get('/feature', 'UserController@featurelist');
        Route::get('/feature/{id}', 'UserController@featureshow');
        // Life Search
        Route::get('admincontroller/action', 'AdminController@action')->name('admincontroller.action');
        // Link Ceom
        Route::get('/ceom', 'UserController@ceom');
        // Link Mfbod
        Route::get('/mfbod', 'UserController@mfbod');
        // Link Dep Rate
        Route::get('/deprate', 'UserController@deprate');
        // Branch News
        Route::get('/branchnews', 'UserController@branchlist');
        Route::get('/branchnews/{id}', 'UserController@branch');
        // Division
        Route::get('/division', 'UserController@divisionlist');
        Route::get('/division/{id}', 'UserController@division');
        // HotNews
        Route::get('/hotnews/{id}', 'UserController@hotnews');
        // Tech
        Route::get('/tech', 'UserController@techlist');
        Route::get('/tech/{id}', 'UserController@tech');
        //Videos
        Route::get('/videos', 'UserController@videoslist');
        //Comment Divisi
        Route::post('/comment_divisi', 'UserController@commentdiv');
        //Comment Branch
        Route::post('/comment_branch', 'UserController@commentbranch');
        //Comment Tech
        Route::post('/comment_tech', 'UserController@commenttech');
        //Comment Tech
        Route::post('/comment_feature', 'UserController@commentfeature');
        //Comment HotNews
        Route::post('/comment_hotnews', 'UserController@commenthotnews');
        //Dictionary
        Route::get('/dictionary', 'UserController@dictionlist');
        Route::get('/diction/{id}', 'UserController@diction');
        //Forum Sugcom
        Route::get('/forum_sugcom', 'UserController@forum_sugcom');
        //Training Manual 
        Route::get('/user_manualtraining', 'UserController@manual_training');
        //Training Video 
        Route::get('/user_videotraining', 'UserController@video_training');
        //Video DPP
        Route::get('/videodpp', 'UserController@video_dpp');
        //Report

        //Funding
        Route::get('/fundingpp', 'UserController@funding_pp');
        //Service
        Route::get('/servicepp', 'UserController@service_pp');
        //Credit
        Route::get('/creditpp', 'UserController@credit_pp');
        //Operational
        Route::get('/operationalpp', 'UserController@operational_pp');
        //General
        Route::get('/generalpp', 'UserController@general_pp');
        //RiskCom
        Route::get('/riskcompp', 'UserController@riskcom_pp');


        // Link User
        Route::get('/', 'UserController@index');
    });

    Route::group(['middleware' => ['auth', 'checkRole:1']], function () {
        // Link Tools
        Route::get('/tools', 'ToolsController@index');
        // Link Admin Config User
        Route::get('/admin', 'AdminController@index'); //Penting
        Route::get('/showuser', 'AdminController@show'); //Penting
        Route::get('/getdatauser', ['uses' => 'AdminController@getdatauser', 'as' => 'ajax.get.data.user']); //Penting
        Route::post('/upshowuser', 'AdminController@cr_showuser'); //Penting
        Route::get('/user/edit/{id}', 'AdminController@edit_user'); //Penting
        Route::post('/user/update/{id}', 'AdminController@update_user'); //Penting
        Route::get('/user/delete/{id}', 'AdminController@user_delete'); //Penting
        // Link Admin Config Layout
        // Header
        Route::get('/opheader', 'AdminController@header'); //Penting
        Route::post('/upheader', 'AdminController@cr_header'); //Penting
        Route::get('/opheader/edit/{id}', 'AdminController@header_edit'); //Penting
        Route::get('/opheader/delete/{id}', 'AdminController@header_delete'); //Penting
        Route::post('/opheader/update/{id}', 'AdminController@header_update'); //Penting
        //Carousel
        Route::get('/opcarousel', 'AdminController@opcarousel'); //Penting
        Route::get('/opcarousel/edit/{id}', 'AdminController@opcarousel_edit'); //Penting
        Route::post('/opcarousel/update/{id}', 'AdminController@opcarousel_update'); //Penting
        //Image Homepage
        Route::get('/opimagehome', 'AdminController@opimage'); //Penting
        Route::get('/getdataopimage', ['uses' => 'AdminController@getdataopimage', 'as' => 'ajax.get.data.opimage']); //Penting
        Route::post('/upimage', 'AdminController@cr_opimage'); //Penting
        Route::get('/opimage/edit/{id}', 'AdminController@opimage_edit'); //Penting
        Route::post('/opimage/update/{id}', 'AdminController@opimage_update'); //Penting
        Route::get('/opimage/delete/{id}', 'AdminController@opimage_delete'); //Penting
        // Video
        Route::get('/videotraining', 'AdminController@video_training'); //Penting
        Route::get('/getdataopvideo', ['uses' => 'AdminController@getdataopvideodpp', 'as' => 'ajax.get.data.opvideosdpp']); //Penting
        Route::post('/upopvid', 'AdminController@cr_opvideodpp'); //Penting
        Route::get('/video_dpp/delete/{id}', 'AdminController@opvideo_deletedpp'); //Penting
        Route::get('/video_dpp/edit/{id}', 'AdminController@opvideo_editdpp'); //Penting
        Route::post('/video_dpp/update/{id}', 'AdminController@opvideo_updatedpp'); //Penting
        // Feature
        Route::get('/opfeature', 'AdminController@feature'); //Penting
        Route::get('/getdataopfeature', ['uses' => 'AdminController@getdataopfeature', 'as' => 'ajax.get.data.opfeature']); //Penting
        Route::post('/upfeature', 'AdminController@cr_opfeature'); //Penting
        Route::get('/opfeature/delete/{id}', 'AdminController@opfeature_delete'); //Penting
        Route::get('/opfeature/edit/{id}', 'AdminController@opfeature_edit'); //Penting
        Route::post('/opfeature/update/{id}', 'AdminController@opfeature_update'); //Penting
        // Sugcom
        Route::get('/opsugcom', 'AdminController@sugcom');
        Route::get('/getdatasugcom', ['uses' => 'AdminController@getdatasugcom', 'as' => 'ajax.get.data.sugcom']);
        // Comment
        Route::get('/getdatacommentfeature', ['uses' => 'AdminController@getdatacommentfeature', 'as' => 'ajax.get.data.commentfeature']);
        Route::get('/comfeature/delete/{id}', 'AdminController@opsugcom_delete');
        // Ceom
        Route::get('/opceom', 'AdminController@opceom'); //Penting
        Route::get('/opceom/edit/{id}', 'AdminController@opceom_edit'); //Penting
        Route::post('/opceom/update/{id}', 'AdminController@opceom_update'); //Penting

        // Mfbod
        Route::get('/opmfbod', 'AdminController@opmfbod'); //Penting
        Route::get('/opmfbod/edit/{id}', 'AdminController@opmfbod_edit'); //Penting
        Route::post('/opmfbod/update/{id}', 'AdminController@opmfbod_update'); //Penting


        //Change Password
        Route::get('/editpassword/{id}', 'AdminController@editpass'); //Penting
        Route::post('/updatepassword/{id}', 'AdminController@updatepass'); //Penting

        //Repost
        //OJK
        Route::get('/admin_ojk', 'AdminController@ojk_report'); //Penting
        Route::post('upojk', 'AdminController@cr_ojk'); //Penting
        Route::get('/getlistojk', ['uses' => 'AdminController@getdataojk', 'as' => 'ajax.get.data.ojk']); //Penting
        Route::get('/ojkreport/delete/{id}', 'AdminController@delete_ojk'); //Penting
        Route::get('/ojkreport/edit/{id}', 'AdminController@editojk_report'); //Penting
        Route::post('/ojkreport/update/{id}', 'AdminController@updateojk_report'); //Penting

        //BI (Bank Indonesia)
        Route::get('/admin_bi', 'AdminController@bi_report'); //Penting
        Route::post('upbi', 'AdminController@cr_bi'); //Penting
        Route::get('/getlistbi', ['uses' => 'AdminController@getdatabi', 'as' => 'ajax.get.data.bi']); //Penting
        Route::get('/bireport/delete/{id}', 'AdminController@delete_bi'); //Penting
        Route::get('/bireport/edit/{id}', 'AdminController@editbi_report'); //Penting
        Route::post('/bireport/update/{id}', 'AdminController@updatebi_report'); //Penting

        //Policy & Procedure
        //Funding
        Route::get('/admin_funding', 'AdminController@funding_pp'); //Penting
        Route::post('upfunding', 'AdminController@cr_funding'); //Penting
        Route::get('/getlistfunding', ['uses' => 'AdminController@getdatafunding', 'as' => 'ajax.get.data.funding']); //Penting
        Route::get('/fundingpp/delete/{id}', 'AdminController@delete_funding'); //Penting
        Route::get('/fundingpp/edit/{id}', 'AdminController@editfunding_pp'); //Penting
        Route::post('/fundingpp/update/{id}', 'AdminController@updatefunding_pp'); //Penting

        //Service
        Route::get('/admin_service', 'AdminController@service_pp'); //Penting
        Route::post('upservice', 'AdminController@cr_service'); //Penting
        Route::get('/getlistservice', ['uses' => 'AdminController@getdataservice', 'as' => 'ajax.get.data.service']); //Penting
        Route::get('/servicepp/delete/{id}', 'AdminController@delete_service'); //Penting
        Route::get('/servicepp/edit/{id}', 'AdminController@editservice_pp'); //Penting
        Route::post('/servicepp/update/{id}', 'AdminController@updateservice_pp'); //Penting

        //Credit
        Route::get('/admin_credit', 'AdminController@credit_pp'); //Penting
        Route::post('upcredit', 'AdminController@cr_credit'); //Penting
        Route::get('/getlistcredit', ['uses' => 'AdminController@getdatacredit', 'as' => 'ajax.get.data.credit']); //Penting
        Route::get('/creditpp/delete/{id}', 'AdminController@delete_credit'); //Penting
        Route::get('/creditpp/edit/{id}', 'AdminController@editcredit_pp'); //Penting
        Route::post('/creditpp/update/{id}', 'AdminController@updatecredit_pp'); //Penting

        //Operational
        Route::get('/admin_operational', 'AdminController@operational_pp'); //Penting
        Route::post('upoperational', 'AdminController@cr_operational'); //Penting
        Route::get('/getlistoperational', ['uses' => 'AdminController@getdataoperational', 'as' => 'ajax.get.data.operational']); //Penting
        Route::get('/operationalpp/delete/{id}', 'AdminController@delete_operational'); //Penting
        Route::get('/operationalpp/edit/{id}', 'AdminController@editoperational_pp'); //Penting
        Route::post('/operationalpp/update/{id}', 'AdminController@updateoperational_pp'); //Penting

        //General
        Route::get('/admin_general', 'AdminController@general_pp'); //Penting
        Route::post('upgeneral', 'AdminController@cr_general'); //Penting
        Route::get('/getlistgeneral', ['uses' => 'AdminController@getdatageneral', 'as' => 'ajax.get.data.general']); //Penting
        Route::get('/generalpp/delete/{id}', 'AdminController@delete_general'); //Penting
        Route::get('/generalpp/edit/{id}', 'AdminController@editgeneral_pp'); //Penting
        Route::post('/generalpp/update/{id}', 'AdminController@updategeneral_pp'); //Penting

        //Riskcom
        Route::get('/admin_riskcom', 'AdminController@riskcom_pp'); //Penting
        Route::post('upriskcom', 'AdminController@cr_riskcom'); //Penting
        Route::get('/getlistriskcom', ['uses' => 'AdminController@getdatariskcom', 'as' => 'ajax.get.data.riskcom']); //Penting
        Route::get('/riskcompp/delete/{id}', 'AdminController@delete_riskcom'); //Penting
        Route::get('/riskcompp/edit/{id}', 'AdminController@editriskcom_pp'); //Penting
        Route::post('/riskcompp/update/{id}', 'AdminController@updateriskcom_pp'); //Penting

        //Manual Dpp
        Route::get('/admin_manualdpp', 'AdminController@manual_report'); //Penting
        Route::post('upmanualdpp', 'AdminController@cr_manualdpp'); //Penting
        Route::get('/getlistmanualdpp', ['uses' => 'AdminController@getdatamanualdpp', 'as' => 'ajax.get.data.manualdpp']); //Penting
        Route::get('/manualdppreport/delete/{id}', 'AdminController@delete_manualdpp'); //Penting
        Route::get('/manualdppreport/edit/{id}', 'AdminController@editmanualdpp_report'); //Penting
        Route::post('/manualdppreport/update/{id}', 'AdminController@updatemanualdpp_report'); //Penting

        //Manual Rc
        Route::post('upmanualrc', 'AdminController@cr_manualrc'); //Penting
        Route::get('/getlistmanualrc', ['uses' => 'AdminController@getdatamanualrc', 'as' => 'ajax.get.data.manualrc']); //Penting
        Route::get('/manualrcreport/delete/{id}', 'AdminController@delete_manualrc'); //Penting
        Route::get('/manualrcreport/edit/{id}', 'AdminController@editmanualrc_report'); //Penting
        Route::post('/manualrcreport/update/{id}', 'AdminController@updatemanualrc_report'); //Penting

    });
    Route::group(['middleware' => ['auth', 'checkRole:3']], function () {
        // Link Tools
        Route::get('/tools', 'ToolsController@index');
        // Link Admin Config User
        Route::get('/admin', 'AdminController@index'); //Penting
        Route::get('/showuser', 'AdminController@show'); //Penting
        Route::get('/getdatauser', ['uses' => 'AdminController@getdatauser', 'as' => 'ajax.get.data.user']); //Penting
        Route::post('/upshowuser', 'AdminController@cr_showuser'); //Penting
        Route::get('/user/edit/{id}', 'AdminController@edit_user'); //Penting
        Route::post('/user/update/{id}', 'AdminController@update_user'); //Penting
        Route::get('/user/delete/{id}', 'AdminController@user_delete'); //Penting
        // Link Admin Config Layout
        // Header
        Route::get('/opheader', 'AdminController@header'); //Penting
        Route::post('/upheader', 'AdminController@cr_header'); //Penting
        Route::get('/opheader/edit/{id}', 'AdminController@header_edit'); //Penting
        Route::get('/opheader/delete/{id}', 'AdminController@header_delete'); //Penting
        Route::post('/opheader/update/{id}', 'AdminController@header_update'); //Penting
        //Carousel
        Route::get('/opcarousel', 'AdminController@opcarousel'); //Penting
        Route::get('/opcarousel/edit/{id}', 'AdminController@opcarousel_edit'); //Penting
        Route::post('/opcarousel/update/{id}', 'AdminController@opcarousel_update'); //Penting
        //Image Homepage
        Route::get('/opimagehome', 'AdminController@opimage'); //Penting
        Route::get('/getdataopimage', ['uses' => 'AdminController@getdataopimage', 'as' => 'ajax.get.data.opimage']); //Penting
        Route::post('/upimage', 'AdminController@cr_opimage'); //Penting
        Route::get('/opimage/edit/{id}', 'AdminController@opimage_edit'); //Penting
        Route::post('/opimage/update/{id}', 'AdminController@opimage_update'); //Penting
        Route::get('/opimage/delete/{id}', 'AdminController@opimage_delete'); //Penting
        // Video
        Route::get('/videotraining', 'AdminController@video_training'); //Penting
        Route::get('/getdataopvideo', ['uses' => 'AdminController@getdataopvideodpp', 'as' => 'ajax.get.data.opvideosdpp']); //Penting
        Route::post('/upopvid', 'AdminController@cr_opvideodpp'); //Penting
        Route::get('/video_dpp/delete/{id}', 'AdminController@opvideo_deletedpp'); //Penting
        Route::get('/video_dpp/edit/{id}', 'AdminController@opvideo_editdpp'); //Penting
        Route::post('/video_dpp/update/{id}', 'AdminController@opvideo_updatedpp'); //Penting
        // Feature
        Route::get('/opfeature', 'AdminController@feature'); //Penting
        Route::get('/getdataopfeature', ['uses' => 'AdminController@getdataopfeature', 'as' => 'ajax.get.data.opfeature']); //Penting
        Route::post('/upfeature', 'AdminController@cr_opfeature'); //Penting
        Route::get('/opfeature/delete/{id}', 'AdminController@opfeature_delete'); //Penting
        Route::get('/opfeature/edit/{id}', 'AdminController@opfeature_edit'); //Penting
        Route::post('/opfeature/update/{id}', 'AdminController@opfeature_update'); //Penting
        // Sugcom
        Route::get('/opsugcom', 'AdminController@sugcom');
        Route::get('/getdatasugcom', ['uses' => 'AdminController@getdatasugcom', 'as' => 'ajax.get.data.sugcom']);
        // Comment
        Route::get('/getdatacommentfeature', ['uses' => 'AdminController@getdatacommentfeature', 'as' => 'ajax.get.data.commentfeature']);
        Route::get('/comfeature/delete/{id}', 'AdminController@opsugcom_delete');
        // Ceom
        Route::get('/opceom', 'AdminController@opceom'); //Penting
        Route::get('/opceom/edit/{id}', 'AdminController@opceom_edit'); //Penting
        Route::post('/opceom/update/{id}', 'AdminController@opceom_update'); //Penting

        // Mfbod
        Route::get('/opmfbod', 'AdminController@opmfbod'); //Penting
        Route::get('/opmfbod/edit/{id}', 'AdminController@opmfbod_edit'); //Penting
        Route::post('/opmfbod/update/{id}', 'AdminController@opmfbod_update'); //Penting


        //Change Password
        Route::get('/editpassword/{id}', 'AdminController@editpass'); //Penting
        Route::post('/updatepassword/{id}', 'AdminController@updatepass'); //Penting

        //Repost
        //OJK
        Route::get('/admin_ojk', 'AdminController@ojk_report'); //Penting
        Route::post('upojk', 'AdminController@cr_ojk'); //Penting
        Route::get('/getlistojk', ['uses' => 'AdminController@getdataojk', 'as' => 'ajax.get.data.ojk']); //Penting
        Route::get('/ojkreport/delete/{id}', 'AdminController@delete_ojk'); //Penting
        Route::get('/ojkreport/edit/{id}', 'AdminController@editojk_report'); //Penting
        Route::post('/ojkreport/update/{id}', 'AdminController@updateojk_report'); //Penting

        //BI (Bank Indonesia)
        Route::get('/admin_bi', 'AdminController@bi_report'); //Penting
        Route::post('upbi', 'AdminController@cr_bi'); //Penting
        Route::get('/getlistbi', ['uses' => 'AdminController@getdatabi', 'as' => 'ajax.get.data.bi']); //Penting
        Route::get('/bireport/delete/{id}', 'AdminController@delete_bi'); //Penting
        Route::get('/bireport/edit/{id}', 'AdminController@editbi_report'); //Penting
        Route::post('/bireport/update/{id}', 'AdminController@updatebi_report'); //Penting

        //Policy & Procedure
        //Funding
        Route::get('/admin_funding', 'AdminController@funding_pp'); //Penting
        Route::post('upfunding', 'AdminController@cr_funding'); //Penting
        Route::get('/getlistfunding', ['uses' => 'AdminController@getdatafunding', 'as' => 'ajax.get.data.funding']); //Penting
        Route::get('/fundingpp/delete/{id}', 'AdminController@delete_funding'); //Penting
        Route::get('/fundingpp/edit/{id}', 'AdminController@editfunding_pp'); //Penting
        Route::post('/fundingpp/update/{id}', 'AdminController@updatefunding_pp'); //Penting

        //Service
        Route::get('/admin_service', 'AdminController@service_pp'); //Penting
        Route::post('upservice', 'AdminController@cr_service'); //Penting
        Route::get('/getlistservice', ['uses' => 'AdminController@getdataservice', 'as' => 'ajax.get.data.service']); //Penting
        Route::get('/servicepp/delete/{id}', 'AdminController@delete_service'); //Penting
        Route::get('/servicepp/edit/{id}', 'AdminController@editservice_pp'); //Penting
        Route::post('/servicepp/update/{id}', 'AdminController@updateservice_pp'); //Penting

        //Credit
        Route::get('/admin_credit', 'AdminController@credit_pp'); //Penting
        Route::post('upcredit', 'AdminController@cr_credit'); //Penting
        Route::get('/getlistcredit', ['uses' => 'AdminController@getdatacredit', 'as' => 'ajax.get.data.credit']); //Penting
        Route::get('/creditpp/delete/{id}', 'AdminController@delete_credit'); //Penting
        Route::get('/creditpp/edit/{id}', 'AdminController@editcredit_pp'); //Penting
        Route::post('/creditpp/update/{id}', 'AdminController@updatecredit_pp'); //Penting

        //Operational
        Route::get('/admin_operational', 'AdminController@operational_pp'); //Penting
        Route::post('upoperational', 'AdminController@cr_operational'); //Penting
        Route::get('/getlistoperational', ['uses' => 'AdminController@getdataoperational', 'as' => 'ajax.get.data.operational']); //Penting
        Route::get('/operationalpp/delete/{id}', 'AdminController@delete_operational'); //Penting
        Route::get('/operationalpp/edit/{id}', 'AdminController@editoperational_pp'); //Penting
        Route::post('/operationalpp/update/{id}', 'AdminController@updateoperational_pp'); //Penting

        //General
        Route::get('/admin_general', 'AdminController@general_pp'); //Penting
        Route::post('upgeneral', 'AdminController@cr_general'); //Penting
        Route::get('/getlistgeneral', ['uses' => 'AdminController@getdatageneral', 'as' => 'ajax.get.data.general']); //Penting
        Route::get('/generalpp/delete/{id}', 'AdminController@delete_general'); //Penting
        Route::get('/generalpp/edit/{id}', 'AdminController@editgeneral_pp'); //Penting
        Route::post('/generalpp/update/{id}', 'AdminController@updategeneral_pp'); //Penting

        //Riskcom
        Route::get('/admin_riskcom', 'AdminController@riskcom_pp'); //Penting
        Route::post('upriskcom', 'AdminController@cr_riskcom'); //Penting
        Route::get('/getlistriskcom', ['uses' => 'AdminController@getdatariskcom', 'as' => 'ajax.get.data.riskcom']); //Penting
        Route::get('/riskcompp/delete/{id}', 'AdminController@delete_riskcom'); //Penting
        Route::get('/riskcompp/edit/{id}', 'AdminController@editriskcom_pp'); //Penting
        Route::post('/riskcompp/update/{id}', 'AdminController@updateriskcom_pp'); //Penting

        //Manual Dpp
        Route::get('/admin_manualdpp', 'AdminController@manual_report'); //Penting
        Route::post('upmanualdpp', 'AdminController@cr_manualdpp'); //Penting
        Route::get('/getlistmanualdpp', ['uses' => 'AdminController@getdatamanualdpp', 'as' => 'ajax.get.data.manualdpp']); //Penting
        Route::get('/manualdppreport/delete/{id}', 'AdminController@delete_manualdpp'); //Penting
        Route::get('/manualdppreport/edit/{id}', 'AdminController@editmanualdpp_report'); //Penting
        Route::post('/manualdppreport/update/{id}', 'AdminController@updatemanualdpp_report'); //Penting

        //Manual Rc
        Route::post('upmanualrc', 'AdminController@cr_manualrc'); //Penting
        Route::get('/getlistmanualrc', ['uses' => 'AdminController@getdatamanualrc', 'as' => 'ajax.get.data.manualrc']); //Penting
        Route::get('/manualrcreport/delete/{id}', 'AdminController@delete_manualrc'); //Penting
        Route::get('/manualrcreport/edit/{id}', 'AdminController@editmanualrc_report'); //Penting
        Route::post('/manualrcreport/update/{id}', 'AdminController@updatemanualrc_report'); //Penting

    });
});
