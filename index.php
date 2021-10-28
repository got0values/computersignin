<?php
include_once 'Request.php';
include_once 'Router.php';
$router = new Router(new Request);

$router->get('/', function() {
        include_once './model/listtoday.php';
        include_once './views/index2.php';
    });

$router->get('/banlist', function() {
        include_once './model/getbanlist.php';
        include_once './views/banlist.php';
    });

$router->get('/showid', function() {
        include_once './model/showidmodel.php';
        include_once './views/showid.php';
    });

$router->get('/history', function($request) {
        include_once './model/gethistory.php';
        include_once './views/history.php';
    });

// insert transaction into db
$router->post('/submitsignin', function($request) {
        include_once './model/submitsignin.php';
        include_once './model/listtoday.php';
        include_once './views/index2.php';
    });

// delete query and execution
$router->post('/deletesignin', function($request) {
        include_once './model/deletesignin.php';
        include_once './model/listtoday.php';
        include_once './views/index2.php';
    });

// add notes query and execution
$router->post('/addnotes', function($request) {
        include_once './model/addnotes.php';
        include_once './model/listtoday.php';
        include_once './views/index2.php';
    });

// submit banlist patron
$router->post('/submitbanlist', function($request) {
        include_once './model/submitbanlist.php';
        include_once './model/getbanlist.php';
        include_once './views/banlist.php';
    });

// delete banlist patron
$router->post('/deletebanlist', function($request) {
        include_once './model/deletebanlist.php';
        include_once './model/getbanlist.php';
        include_once './views/banlist.php';
    });

// notes banlist patron
$router->post('/notesbanlist', function($request) {
        include_once './model/notesbanlist.php';
        include_once './model/getbanlist.php';
        include_once './views/banlist.php';
    });

// submit showid patron
$router->post('/submitshowid', function($request) {
        include_once './model/submitshowid.php';
        include_once './model/showidmodel.php';
        include_once './views/showid.php';
    });

// delete showid patron
$router->post('/deleteshowid', function($request) {
        include_once './model/deleteshowid.php';
        include_once './model/showidmodel.php';
        include_once './views/showid.php';
    });

// delete history row
$router->post('/deletehistory', function($request) {
    include_once './model/deletehistory.php';
    include_once './model/gethistory.php';
    include_once './views/history.php';
});

//get history for date
$router->post('/gethistory', function($request) {
    include_once './model/gethistory.php';
    include_once './views/history.php';
});