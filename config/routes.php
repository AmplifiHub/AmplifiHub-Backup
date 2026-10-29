<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
$routes->connect('/', ['controller' => 'Pages', 'action' => 'home']);
    $routes->connect('/comment', ['controller'=>'comments', 'action'=>'add']);
    $routes->connect('/logout', ['controller' => 'Users', 'action' => 'logout']);
    $routes->connect('/dashboard', ['controller' => 'Users', 'action' => 'dashboard']);
    $routes->connect('/resetpassword',['controller'=>'Users','action'=>'resetpassword']);
    $routes->connect('/reset/:token',['controller'=>'Users','action'=>'reset']);
    $routes->connect('/profile', ['controller' => 'Users', 'action' => 'edit']);
    $routes->connect('/sign-up', ['controller'=>'Users', 'action'=>'register']);
    $routes->connect('/mobile-code', ['controller'=>'Users', 'action'=>'mobilecode']);
    $routes->connect('/mobile-code/:id', ['controller'=>'Users', 'action'=>'mobilecode']);
    $routes->connect('/subscriptions',['controller'=>'subscriptions', 'action'=>'membership']);
    $routes->connect('/login', ['controller'=>'Users', 'action'=>'login']);
    $routes->connect('/song-writers-hub',['controller'=>'songwriters','action'=>'listing']);
    $routes->connect('/video-directors-hub',['controller'=>'directors','action'=>'listing']);
    $routes->connect('/director/:id',['controller'=>'directors','action'=>'profile']);
    $routes->connect('/beat-hub',['controller'=>'stores', 'action'=>'beats']);
    $routes->connect('/beat-hub-detail/:id',['controller'=>'stores', 'action'=>'beathubdetail']);
    $routes->connect('/search-result',['controller'=>'stores', 'action'=>'searchresult']);
    $routes->connect('/search-beats',['controller'=>'stores', 'action'=>'searchbeats']);
    $routes->connect('/permission-users',['controller'=>'fpdf', 'action'=>'permissionusers']);
    $routes->connect('/changePermissionTrial',['controller'=>'fpdf', 'action'=>'changePermissionTrial']);
    $routes->connect('/changePermissionOther',['controller'=>'fpdf', 'action'=>'changePermissionOther']);
    $routes->connect('/samples',['controller'=>'pages', 'action'=>'samplePage']);
    $routes->connect('/samplestest',['controller'=>'pages', 'action'=>'samplePageTest']);
    $routes->connect('/ar',['controller'=>'pages', 'action'=>'aAndR']);
    $routes->connect('/featured-sample',['controller'=>'pages', 'action'=>'featuredSample']);
    $routes->connect('/featured-sample-view',['controller'=>'pages', 'action'=>'featuredSampleView']);
    $routes->connect('/editbeat',['controller'=>'pages', 'action'=>'editBeats']);
    $routes->connect('/updatebeatssample',['controller'=>'pages', 'action'=>'updateBeatsSample']);
    $routes->connect('/sample-packs',['controller'=>'pages', 'action'=>'samplePacks']);
    $routes->connect('/sample-packs-view',['controller'=>'pages', 'action'=>'samplePacksView']);
    $routes->connect('/pages/edit/editpacks',['controller'=>'pages', 'action'=>'editPacks']);
    $routes->connect('/more-sample-packs',['controller'=>'pages', 'action'=>'moresamplepacks']);
    $routes->connect('/search-packs',['controller'=>'pages', 'action'=>'searchresultpacks']);
    $routes->connect('/updatepacks',['controller'=>'pages', 'action'=>'updatePacks']);
    $routes->connect('/salesbyyear',['controller'=>'users', 'action'=>'salesbyyear']);
    $routes->connect('/profilebyyear',['controller'=>'users', 'action'=>'profilebyyear']);
    
    $routes->connect('/hire',['controller'=>'hire', 'action'=>'book']);
    $routes->connect('/hire/uploadfile',['controller'=>'hire', 'action'=>'uploadfile']);

    $routes->connect('/freebeats',['controller'=>'stores', 'action'=>'freebeats']);
    $routes->connect('/addtrack',['controller'=>'stores', 'action'=>'addtrack']);
    $routes->connect('/ar-orders',['controller'=>'fpdf', 'action'=>'arOrders']);
    $routes->connect('/user-ar',['controller'=>'fpdf', 'action'=>'userAr']);
    $routes->connect('/ar-ratings',['controller'=>'fpdf', 'action'=>'arRatings']);
    $routes->connect('/order-given',['controller'=>'fpdf', 'action'=>'orderGiven']);

    $routes->connect('/infinity-scroll',['controller'=>'stores', 'action'=>'infinityMyStore']);
    $routes->connect('/sellbeat',['controller'=>'stores', 'action'=>'add']);
    $routes->connect('/addbeats',['controller'=>'stores', 'action'=>'addBeats']);
    $routes->connect('/addbeatssample',['controller'=>'stores', 'action'=>'addBeatsSample']);
    $routes->connect('/addpacks',['controller'=>'stores', 'action'=>'addPacks']);
    $routes->connect('/stores/edit/editbeats',['controller'=>'stores', 'action'=>'editBeats']);
    $routes->connect('/mybeat',['controller'=>'stores', 'action'=>'userstore']);
    $routes->connect('/mystore/:id',['controller'=>'stores', 'action'=>'mystore']);
    $routes->connect('/personalstore/:id',['controller'=>'stores', 'action'=>'personalstore']);
    $routes->connect('/mixandmaster',['controller'=>'mms','action'=>'index']);
    $routes->connect('/artistes-hub',['controller'=>'artistes','action'=>'listing']);
    $routes->connect('/addArtiste',['controller'=>'artistes', 'action'=>'addArtiste']);
    $routes->connect('/artistesbooked',['controller'=>'artistesrequesters','action'=>'index']);
    $routes->connect('/artistesadmin',['controller'=>'artistes','action'=>'admin']);
    $routes->connect('/songwriter/:user_id',['controller'=>'songwriters','action'=>'profile']);
     $routes->connect('/addSongwriter',['controller'=>'songwriters', 'action'=>'addSongwriter']);
    $routes->connect('/mixing-and-mastering-hub',['controller'=>'mixmasterings', 'action'=>'listing']);
     $routes->connect('/addMixmastering',['controller'=>'mixmasterings', 'action'=>'addMixmastering']);
    $routes->connect('/subscribe',['controller'=>'plans', 'action'=>'subscribe']);
    $routes->connect('/verify',['controller'=>'users', 'action'=>'verify','token']);
    $routes->connect('/support',['controller'=>'pages','action'=>'support']);
    $routes->connect('/bank',['controller'=>'accounts','action'=>'add']);
    $routes->connect('/withdrawal',['controller'=>'withdrawals','action'=>'add']);
    $routes->connect('/downloads',['controller'=>'carts','action'=>'downloads']);
    $routes->connect('/downloads:id',['controller'=>'carts','action'=>'downloads']);
        $routes->connect('/users/downloads',['controller'=>'Users','action'=>'downloads']);
    $routes->connect('/mixer/:user_id',['controller'=>'mixmasterings','action'=>'profile']);
    $routes->connect('/artiste/:user_id',['controller'=>'artistes','action'=>'profile']);

    $routes->connect('/searchbeat', ['controller'=> 'stores' ,'action'=> 'getAll']);
     $routes->connect('/searchbeats', ['controller'=> 'stores' ,'action'=> 'getAllBeats']);
     $routes->connect('/mystore/Stores/getAllUserBeats', ['controller'=> 'stores' ,'action'=> 'getAllUserBeats']);
     $routes->connect('/songwriterequesters/view/:id', ['controller'=> 'swriterequests' ,'action'=> 'view']);
     $routes->connect('/paypal/verify-ipn', ['controller'=> 'Paypal' ,'action'=> 'verifyIpn']);
     $routes->connect('/fpdf', ['controller'=> 'accounts' ,'action'=> 'viewpdf']);
     $routes->connect('/downloadpdf', ['controller'=> 'carts' ,'action'=> 'downloadpdf']);
     $routes->connect('/sales', ['controller'=> 'carts' ,'action'=> 'sales']);
     $routes->connect('/downloadpdf/:id', ['controller'=> 'carts' ,'action'=> 'downloadpdf']);
     $routes->connect('/licencepdf', ['controller'=> 'carts' ,'action'=> 'licencepdf']);
     $routes->connect('/licencepdf/:id:licence', ['controller'=> 'carts' ,'action'=> 'licencepdf']);
     $routes->connect('/downloadcsv', ['controller'=>'users', 'action'=>'downloadcsv']);

    
    
    $routes->connect('/permission-users-ar',['controller'=>'fpdf', 'action'=>'permissionusersar']);
    $routes->connect('/search',['controller'=>'pages', 'action'=>'searchresult']);
    $routes->connect('/addtrack',['controller'=>'stores', 'action'=>'addtrack']);
    $routes->connect('/ar-orders',['controller'=>'fpdf', 'action'=>'arOrders']);
    $routes->connect('/user-ar',['controller'=>'fpdf', 'action'=>'userAr']);
    $routes->connect('/ar-ratings',['controller'=>'fpdf', 'action'=>'arRatings']);
    
    
    
    
    $routes->connect('/distribute',['controller'=>'stores', 'action'=>'add2']);
    $routes->connect('/mytracks',['controller'=>'stores', 'action'=>'mytracks']);
    $routes->connect('viewTrack/:id', ['controller'=> 'stores' ,'action'=> 'viewTrack']);
    $routes->connect('/tracks',['controller'=>'stores', 'action'=>'tracks']);
    $routes->connect('/downloadFile',['controller'=>'stores', 'action'=>'downloadFile']);
    $routes->connect('/trackRemarks',['controller'=>'stores', 'action'=>'trackRemarks']);
    
    


    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    /*$routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);*/
    $routes->connect('/terms-and-conditions', ['controller' => 'Pages', 'action' => 'termsandconditions']);
    $routes->connect('/about', ['controller' => 'Pages', 'action' => 'about']);
    $routes->connect('/pricing', ['controller' => 'Pages','action' =>'pricing']);
    $routes->connect('/contact-us', ['controller' => 'Pages','action' =>'contact']);
    $routes->connect('/team-players', ['controller' => 'Pages','action' =>'ourteam']);
    $routes->connect('/refund-policy', ['controller' => 'Pages', 'action' => 'refundpolicy']);
    $routes->connect('/privacy-policy', ['controller' => 'Pages', 'action' => 'privacypolicy']);
    $routes->connect('/music-distribution', ['controller' => 'Pages', 'action' => 'musicdistribution']);
    $routes->connect('/affiliates', ['controller' => 'Pages', 'action' => 'affiliates']);

        //$routes->connect('/transaction-records',['controller'=>'users', 'action'=>'transactionrecords']);
    $routes->connect('/freebeats/download',['controller'=>'stores', 'action'=>'downloadfreebeat']);
    $routes->connect('/freebeats/download/*',['controller'=>'stores', 'action'=>'freebeatDownload']);
    $routes->connect('/contact-customers', ['controller'=>'users', 'action'=>'freebeatdownloads']);
    
    
    // musicians
    $routes->connect('/subscription-musicstorage',['controller'=>'subscriptions', 'action'=>'membershipmusic']);
    $routes->connect('/addshare',['controller'=>'musicstorage', 'action'=>'addBeats']);
    
    $routes->connect('/editmusic',['controller'=>'musicstorage', 'action'=>'editBeats']);
    $routes->connect('/musician',['controller'=>'musicstorage', 'action'=>'musician/:id']);
    $routes->connect('/musicians',['controller'=>'musicstorage', 'action'=>'searchMusicians']);
    $routes->connect('/music-distribution',['controller'=>'plans', 'action'=>'subscribe']);
    $routes->connect('/musicstorage-pricing', ['controller' => 'musicstorage','action' =>'pricing']);
    $routes->connect('/generate-contract', ['controller' => 'musicstorage','action' =>'generateContract']);
    
    $routes->connect('/giveaway',['controller'=>'stores', 'action'=>'giveaway']);
    $routes->connect('/admingiveaway',['controller'=>'fpdf', 'action'=>'admingiveaway']);
    $routes->connect('/resetCompetition',['controller'=>'stores', 'action'=>'resetCompetition']);
    $routes->connect('/bUserDownload',['controller'=>'backwardusers', 'action'=>'downloads']);
    
    // end musicians

    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *    `$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);`
     *    `$routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);`
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $routes->fallbacks(DashedRoute::class);
});

/**
 * Load all plugin routes. See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();
