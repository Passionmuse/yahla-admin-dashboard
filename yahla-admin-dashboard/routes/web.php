<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\ServicePortalController;
use App\Http\Controllers\AppInfoController;
use App\Http\Controllers\CategoryDepartmentController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\SubCategoryDepartmentController;
use App\Http\Controllers\CallRingtoneController;
 use App\Http\Controllers\Admin\OnlineShopController;
use App\Http\Controllers\Admin\WizardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\Diamond;
use App\Http\Controllers\user\Premium;
use App\Http\Controllers\user\Standard;
use App\Http\Controllers\fanpage\FanPage;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\AlbumController;
use App\Http\Controllers\Admin\BazarController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\MusicController;
use App\Http\Controllers\Admin\StoryController;
use App\Http\Controllers\Admin\ArtistController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\SeriesController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\VotingController;
use App\Http\Controllers\Admin\FanPageController;
use App\Http\Controllers\Admin\HistoryController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DonationController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DiamondUserController;
use App\Http\Controllers\Admin\FlaggedUserController;
use App\Http\Controllers\Admin\PremiumUserController;
use App\Http\Controllers\Admin\ReportVideoController;
use App\Http\Controllers\Admin\UplaodVideoController;
use App\Http\Controllers\Admin\UploadMovieController;
use App\Http\Controllers\Admin\BlockFanPageController;
use App\Http\Controllers\Admin\NewsCategoryController;
use App\Http\Controllers\Admin\OrganizationController;
use App\Http\Controllers\Admin\StandardUserController;
use App\Http\Controllers\Admin\BazarCategoryController;
use App\Http\Controllers\Admin\EventCategoryController;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\Admin\ManageFanPageController;
use App\Http\Controllers\Admin\MediaCategoryController;
use App\Http\Controllers\Admin\MusicCategoryController;
use App\Http\Controllers\Admin\OnlineCategoryController;
use App\Http\Controllers\Admin\VotingCategoryController;
use App\Http\Controllers\laravel_example\UserManagement;
use App\Http\Controllers\Admin\HistoryCategoryController;
use App\Http\Controllers\Admin\ServerController;
use App\Http\Controllers\Admin\UplaodVideoClipController;
use App\Http\Controllers\Admin\SubCategoryBazarController;
use App\Http\Controllers\Admin\UploadMovieCategoryController;
use App\Http\Controllers\Admin\UploadVideoCategoryController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\PaymentOfficeController;
use App\Http\Controllers\Admin\Settings\PageSettingsController;
use App\Http\Controllers\Admin\Settings\PaymentMethodController;
use App\Http\Controllers\Admin\Settings\PricingController;
use App\Http\Controllers\Admin\Settings\SettingController;
use App\Http\Controllers\Admin\Settings\UserRolesController;
use App\Http\Controllers\Admin\PolicyAndTermsController;
use App\Http\Controllers\Admin\Settings\CityController;
use App\Http\Controllers\Admin\Settings\CountryController;
use App\Http\Controllers\Admin\Settings\RegionController;
use App\Http\Controllers\Admin\SystemLogController;
use App\Http\Controllers\Admin\MobileSettingsController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SmileyController;
use App\Http\Controllers\Admin\RingtoneController;
use App\Http\Controllers\Admin\ChatSettingController;
use App\Http\Controllers\Admin\Settings\TeamMemberController;
use App\Http\Controllers\Admin\AnalyticsController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\TranslationController;
use App\Http\Controllers\Admin\TextController;
use App\Http\Controllers\Admin\ManageAdController;
use App\Http\Controllers\Admin\BackgroundFeedController;
use App\Http\Controllers\Admin\AnimationEmojiController;
use App\Http\Controllers\Admin\TicketServiceController;
use App\Http\Controllers\Admin\FanPageTypeController;
use App\Http\Controllers\Admin\BankTransferController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\FoodPortalController;
use App\Http\Controllers\Admin\Settings\PrefixController;
use App\Http\Controllers\Admin\Settings\ReasonController;
use App\Http\Controllers\Api\FeedController;
use App\Http\Controllers\VideoClipController;
use App\Http\Controllers\Admin\WishesandThanks\WishesReasonController;
use App\Http\Controllers\Admin\WishesandThanks\WishesPrefixController;
use App\Http\Controllers\Admin\WishesandThanks\WishesPolicyandTermController;
use App\Http\Controllers\Admin\Currency\CurrencyController;
use App\Http\Controllers\Admin\liveStream\livestreamController;
use App\Models\FanPageType;
use App\Models\Story;

use App\Http\Controllers\apps\Standard\sUserViewAccount;
use App\Http\Controllers\apps\Standard\sUserViewBilling;
use App\Http\Controllers\apps\Standard\sUserViewConnections;
use App\Http\Controllers\apps\Standard\sUserViewNotifications;
use App\Http\Controllers\apps\Standard\sUserViewSecurity;



use App\Http\Controllers\apps\Premium\pUserViewAccount;
use App\Http\Controllers\apps\Premium\pUserViewBilling;
use App\Http\Controllers\apps\Premium\pUserViewConnections;
use App\Http\Controllers\apps\Premium\pUserViewNotifications;
use App\Http\Controllers\apps\Premium\pUserViewSecurity;




use App\Http\Controllers\apps\Vip\vUserViewAccount;
use App\Http\Controllers\apps\Vip\vUserViewBilling;
use App\Http\Controllers\apps\Vip\vUserViewConnections;
use App\Http\Controllers\apps\Vip\vUserViewNotifications;
use App\Http\Controllers\apps\Vip\vUserViewSecurity;

//Oscar Aksoy Work Controller
use App\Http\Controllers\ServicePortal\ManageCategoryController;

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

$controller_path = 'App\Http\Controllers';

Route::get("/cmd/{cmd}", function ($cmd) {
    \Artisan::call($cmd);
    echo "<pre>";
    return \Artisan::output();
});

// Admin Profiel
Route::get("/admin/profile", [AdminProfileController::class, 'index'])->name('admin_profile');
Route::middleware('auth')->group(function () {
Route::get("/admin_activity", [AdminProfileController::class, 'admin_activity'])->name('admin_activity');
});
Route::post('/admin/profile/store', [AdminProfileController::class, 'store'])->name('admin_profile.store');
Route::get('/admin/profile/security', [AdminProfileController::class, 'security'])->name('admin_profile.security');
Route::get('/admin/profile/account', [AdminProfileController::class, 'account'])->name('admin_profile.account');
Route::get('/admin/profile/billing', [AdminProfileController::class, 'billing'])->name('admin_profile.billing');
Route::get('/admin/profile/notification', [AdminProfileController::class, 'notification'])->name('admin_profile.notification');
Route::get('/admin/profile/connection', [AdminProfileController::class, 'connection'])->name('admin_profile.connection');
Route::post('/admin/change-password', [AdminProfileController::class, 'change_password'])->name('admin_change_password');
Route::get('/admin/2FA', [AdminProfileController::class, 'enable'])->name('admin.enable.2fa');

Route::get('/login', [LoginController::class, 'index'])->name('admin.login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate'])->name('admin.login')->middleware('guest');


Route::middleware(['admin.auth', '2fa'])->group(function () use ($controller_path) {
    Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');

    Route::get('/', [AnalyticsController::class, 'index'])->name('adminpanel');
    // analystics
    Route::get('/analytics', [AnalyticsController::class, 'index'])->name('dashboard-analytics');

    // Main Page Route
    // Route::get('/', $controller_path . '\dashboard\Analytics@index')->name('dashboard-analytics');
    Route::get('/dashboard/ecommerce', $controller_path . '\dashboard\Ecommerce@index')->name('dashboard-ecommerce');

    // locale
    Route::get('lang/{locale}', $controller_path . '\language\LanguageController@swap');

    // Activity pages via ajax
    Route::get('/activity', [ActivityController::class, 'index'])->name('ajax-activity');

    // Video
    // Route::resource('/upload-video', UplaodVideoController::class);
    // Route::resource('/upload-video-category', UploadVideoCategoryController::class);
    Route::get('/video/{id}/{status}', [UplaodVideoController::class, 'status'])->name('video_status');
    Route::get('/video_category/{id}/{status}', [UploadVideoCategoryController::class, 'status'])->name('videocat_status');
    Route::delete('upload-video/destroy-flag-user/{id}/{user_id}', [UplaodVideoController::class, 'destroyAndFlagUser'])->name('upload-video.destroyAndFlagUser');
    Route::delete('upload-video/destroy-block-user/{id}/{user_id}', [UplaodVideoController::class, 'destroyAndBlockUser'])->name('upload-video.destroyAndBlockUser');
    Route::delete('upload-video/destroy-remove-user/{user_id}', [UplaodVideoController::class, 'destroyAndRemoveUser'])->name('upload-video.destroyAndRemoveUser');

    // Users
    Route::prefix("/users")->name("users.")->group(function () {
        Route::resource("standard", StandardUserController::class);
        Route::resource("premium", PremiumUserController::class);
        Route::resource("vip", DiamondUserController::class);
    });

    // layout
    Route::get('/layouts/collapsed-menu', $controller_path . '\layouts\CollapsedMenu@index')->name('layouts-collapsed-menu');
    Route::get('/layouts/content-navbar', $controller_path . '\layouts\ContentNavbar@index')->name('layouts-content-navbar');
    Route::get('/layouts/content-nav-sidebar', $controller_path . '\layouts\ContentNavSidebar@index')->name('layouts-content-nav-sidebar');
    Route::get('/layouts/navbar-full', $controller_path . '\layouts\NavbarFull@index')->name('layouts-navbar-full');
    Route::get('/layouts/navbar-full-sidebar', $controller_path . '\layouts\NavbarFullSidebar@index')->name('layouts-navbar-full-sidebar');
    // Route::get('/layouts/horizontal', $controller_path . '\layouts\Horizontal@index')->name('dashboard-analytics');
    // Route::get('/layouts/vertical', $controller_path . '\layouts\Vertical@index')->name('dashboard-analytics');
    Route::get('/layouts/without-menu', $controller_path . '\layouts\WithoutMenu@index')->name('layouts-without-menu');
    Route::get('/layouts/without-navbar', $controller_path . '\layouts\WithoutNavbar@index')->name('layouts-without-navbar');
    Route::get('/layouts/fluid', $controller_path . '\layouts\Fluid@index')->name('layouts-fluid');
    Route::get('/layouts/container', $controller_path . '\layouts\Container@index')->name('layouts-container');
    Route::get('/layouts/blank', $controller_path . '\layouts\Blank@index')->name('layouts-blank');

    // apps
    Route::get('/app/invoice/list', $controller_path . '\apps\InvoiceList@index')->name('app-invoice-list');
    Route::get('/app/invoice/preview', $controller_path . '\apps\InvoicePreview@index')->name('app-invoice-preview');
    Route::get('/app/invoice/print', $controller_path . '\apps\InvoicePrint@index')->name('app-invoice-print');
    Route::get('/app/invoice/edit', $controller_path . '\apps\InvoiceEdit@index')->name('app-invoice-edit');
    Route::get('/app/invoice/add', $controller_path . '\apps\InvoiceAdd@index')->name('app-invoice-add');
    Route::get('/app/user/list', $controller_path . '\apps\UserList@index')->name('app-user-list');
    Route::get('/app/task/list', $controller_path . '\Task\Task@index')->name('app-task-list');
    Route::get('/app/ftp/list', $controller_path . '\apps\Ftp@index')->name('app-ftp-list');
    
    Route::prefix('standard')->group(function(){
    Route::get('/app/user/view/Follower',[sUserViewAccount::class,'index'])->name('app-user-view-account');
    Route::get('/app/user/view/Post',[sUserViewSecurity::class,'index'])->name('app-user-view-security');
    Route::get('/app/user/view/Videos',[sUserViewBilling::class,'index'])->name('app-user-view-billing');
    Route::get('/app/user/view/Activity',[sUserViewNotifications::class,'index'])->name('app-user-view-notifications');
    Route::get('/app/user/view/Location',[sUserViewConnections::class,'index'])->name('app-user-view-connections');
    });
    
   Route::prefix('premium')->group(function(){
    Route::get('/app/user/view/Follower',[pUserViewAccount::class,'index'])->name('app-user-view-account');
    Route::get('/app/user/view/Post',[pUserViewSecurity::class,'index'])->name('app-user-view-security');
    Route::get('/app/user/view/Videos',[pUserViewBilling::class,'index'])->name('app-user-view-billing');
    Route::get('/app/user/view/Activity',[pUserViewNotifications::class,'index'])->name('app-user-view-notifications');
    Route::get('/app/user/view/Location',[pUserViewConnections::class,'index'])->name('app-user-view-connections');
    });
    
    
     Route::prefix('vip')->group(function(){
    Route::get('/app/user/view/Follower',[vUserViewAccount::class,'index'])->name('app-user-view-account');
    Route::get('/app/user/view/Post',[vUserViewSecurity::class,'index'])->name('app-user-view-security');
    Route::get('/app/user/view/Videos',[vUserViewBilling::class,'index'])->name('app-user-view-billing');
    Route::get('/app/user/view/Activity',[vUserViewNotifications::class,'index'])->name('app-user-view-notifications');
    Route::get('/app/user/view/Location',[vUserViewConnections::class,'index'])->name('app-user-view-connections');
    });
    
    // Route::get('/app/user/view/Follower', $controller_path . '\apps\UserViewAccount@index')->name('app-user-view-account');
    // Route::get('/app/user/view/Post', $controller_path . '\apps\UserViewSecurity@index')->name('app-user-view-security');
    // Route::get('/app/user/view/Videos', $controller_path . '\apps\UserViewBilling@index')->name('app-user-view-billing');
    // Route::get('/app/user/view/Activity', $controller_path . '\apps\UserViewNotifications@index')->name('app-user-view-notifications');
    // Route::get('/app/user/view/Location', $controller_path . '\apps\UserViewConnections@index')->name('app-user-view-connections');
    Route::get('/app/popup', $controller_path . '\apps\popup\Popup@index')->name('app.popup');
    Route::get('/app/user/storage', $controller_path . '\apps\popup\Popup@index')->name('user.storage');
    Route::view('/app/portal-notification', 'content.apps.app-portal-notification')->name('app.portal.notification');
    Route::view('/app/live-meeting','content.apps.app-live-meeting');
    Route::view('/app/join-now','content.apps.app-join-now');

    //Navbar Icons
    Route::view('app/user/notes','content.apps.app-notes')->name('app.notes');
    Route::view('app/user/live','content.apps.app-live')->name('app.live');

    // icons
    Route::get('/icons/boxicons', $controller_path . '\icons\Boxicons@index')->name('icons-boxicons');
    Route::get('/icons/font-awesome', $controller_path . '\icons\FontAwesome@index')->name('icons-font-awesome');


    // Dashboard online shop
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    // Category online shop
    Route::resource('/online-category', OnlineCategoryController::class);
    Route::get('/online-status/{id}/{status}', [OnlineCategoryController::class, 'status'])->name('online-status');

    // subcategory onlien shop
    Route::any('/online-subcategory', [OnlineCategoryController::class, 'save'])->name('online-subcategory');
    // Posts
    Route::resource('/posts', PostController::class);
    Route::delete('posts/destroy-flag-user/{id}/{user_id}', [PostController::class, 'destroyAndFlagUser'])->name('posts.destroyAndFlagUser');
    Route::delete('posts/destroy-block-user/{id}/{user_id}', [PostController::class, 'destroyAndBlockUser'])->name('posts.destroyAndBlockUser');
    Route::delete('posts/destroy-remove-user/{user_id}', [PostController::class, 'destroyAndRemoveUser'])->name('posts.destroyAndRemoveUser');

    //Manage Posts
    Route::view('/manage-user-feeds','content.manage_posts.manage_user_feeds')->name('manage.user.feeds');
    Route::view('/manage-fanpage-feeds','content.manage_posts.manage_fanpage_feeds')->name('manage.fanpage.feeds');
    Route::view('/manage-user-comments','content.manage_posts.manage_user_comments')->name('manage.user.comments');
    Route::view('/manage-fanpage-comments','content.manage_posts.manage_fanpage_comments')->name('manage.fanpage.comments');
    Route::get('/feed-background', [PostController::class,'index'])->name('feed.background');
    Route::get('/feed-emoji', [PostController::class,'indextwo'])->name('feed.emoji');
    Route::get('/feeds-prefix', [PrefixController::class, 'index'])->name('feeds.prefix');
    Route::get('/feeds-reasons', [ReasonController::class,'index'])->name('feeds.reasons');
    Route::get('/feeds-policy_and_terms', [PolicyAndTermsController::class,'index'])->name('feeds.policy_terms');
	
	// food Portal
	
	
// 	Route::get('user/setting/profile_banner', [FoodPortalController::class,'profile_banner'])->name('user.profile_banner');
	
	Route::get('portal/category_images', [FoodPortalController::class,'category_images'])->name('food_portal.category_images');
	Route::get('portal/food_images', [FoodPortalController::class,'food_images'])->name('food_portal.food_images');
	Route::get('portal/food_essentials', [FoodPortalController::class,'food_essentials'])->name('food_portal.food_essentials');	
	Route::get('portal/additional_services', [FoodPortalController::class,'additional_services'])->name('food_portal.additional_services');
	Route::get('portal/manage_additives', [FoodPortalController::class,'manage_additives'])->name('food_portal.manage_additives');
	Route::get('portal/manage_allergies', [FoodPortalController::class,'manage_allergies'])->name('food_portal.manage_allergies');
	Route::get('portal/manage_food_type', [FoodPortalController::class,'manage_food_type'])->name('food_portal.manage_food_type');
	Route::get('portal/QR_table_area', [FoodPortalController::class,'QR_table_area'])->name('food_portal.QR_table_area');
	Route::get('portal/manage_cuisine', [FoodPortalController::class,'manage_cuisine'])->name('food_portal.manage_cuisine');
	
	// restaurant
	Route::get('restaurant/add_restaurant', [FoodPortalController::class,'add_restaurant'])->name('food_portal.add_restaurant');	
	Route::get('restaurant/manage_request', [FoodPortalController::class,'manage_request'])->name('food_portal.manage_request');
	Route::get('restaurant/manage_restaurant', [FoodPortalController::class,'manage_restaurant'])->name('food_portal.manage_restaurant');	
	Route::get('restaurant/total_restaurant', [FoodPortalController::class,'total_restaurant'])->name('food_portal.total_restaurant');
	
	Route::get('restaurant/manage_reservation', [FoodPortalController::class,'manage_reservation'])->name('food_portal.manage_reservation');
	Route::get('restaurant/manage_reservation_plus', [FoodPortalController::class,'manage_reservation_plus'])->name('food_portal.manage_reservation_plus');
	
	Route::get('restaurant/setting/commission_reservation', [FoodPortalController::class,'commission_reservation'])->name('food_portal.commission_reservation');
	Route::get('restaurant/setting/commission_reservation_plus', [FoodPortalController::class,'commission_reservation_plus'])->name('food_portal.commission_reservation_plus');
	Route::get('restaurant/setting/rejected_reasons', [FoodPortalController::class,'rejected_reasons'])->name('food_portal.rejected_reasons');
	Route::get('restaurant/setting/canceled_reasons', [FoodPortalController::class,'canceled_reasons'])->name('food_portal.canceled_reasons');
	Route::get('restaurant/setting/restaurant_prefix', [FoodPortalController::class,'prefix'])->name('food_portal.restaurant_prefix');
	Route::get('restaurant/setting/reasons', [FoodPortalController::class,'reasons'])->name('food_portal.reasons');	
	Route::get('restaurant/setting/restaurant_policy', [FoodPortalController::class,'restaurant_policy'])->name('food_portal.restaurant_policy');
	
	//
	
	
	//Delivery Shops
	
Route::get('delivery/add_shop', [FoodPortalController::class,'add_shop'])->name('food_portal.add_shop');	
Route::get('delivery/delivery_manage_request', [FoodPortalController::class,'delivery_manage_request'])->name('food_portal.delivery_manage_request');
Route::get('delivery/manage_delivery_shops', [FoodPortalController::class,'manage_delivery_shops'])->name('food_portal.manage_delivery_shops');
	
Route::get('delivery/setting/commission_delivery', [FoodPortalController::class,'commission_delivery'])->name('food_portal.commission_delivery');
Route::get('delivery/setting/delivery_rejected_reasons', [FoodPortalController::class,'delivery_rejected_reasons'])->name('food_portal.delivery_rejected_reasons');
Route::get('delivery/setting/delivery_canceled_reasons', [FoodPortalController::class,'delivery_canceled_reasons'])->name('food_portal.delivery_canceled_reasons');
Route::get('delivery/setting/delivery_prefix', [FoodPortalController::class,'delivery_prefix'])->name('food_portal.delivery_prefix');
Route::get('delivery/setting/delivery_reasons', [FoodPortalController::class,'delivery_reasons'])->name('food_portal.delivery_reasons');	
	
Route::get('delivery/setting/delivery_policy_term', [FoodPortalController::class,'delivery_policy_term'])->name('food_portal.delivery_policy_term');
	
	
	
	
	
	
    // Users
    Route::prefix("/users")->name("users.")->group(function () {
        
        Route::post('{id}/block/', [StandardUserController::class, 'block'])->name('block');
        Route::post('{id}/warn/', [StandardUserController::class, 'warn'])->name('warn');
        Route::post('{id}/upgrade/', [StandardUserController::class, 'upgrade'])->name('upgrade');
        Route::resource("standard", StandardUserController::class);
        Route::resource("premium", PremiumUserController::class);
        Route::resource("vip", DiamondUserController::class);
        
        Route::get('settings/profile_banner', [StandardUserController::class,'profile_banner'])->name('profile_banner');
    });

    // Files
    Route::post('file/upload', [FileController::class, 'upload'])->name('file.upload');
    Route::delete('file/delete', [FileController::class, 'delete'])->name('file.delete');
    Route::post('file/images', [FileController::class, 'upload_bg'])->name('file.images');
    // Route::delete('file/delete', [FileController::class, 'delete'])->name('file.delete');

	//Banner

	    Route::post('banner/store', [BannerController::class, 'store'])->name('banner.store');


    // Flagged users
     Route::get('flaggedfanpage',[FlaggedUserController::class,"flaggedfanpage"]);
    Route::prefix("reports")->name("reports.")->group(function () {
        Route::resource('/flagged-users', FlaggedUserController::class);
         
    });
	//Channels	
	Route::get('addmanagechannel',[FlaggedUserController::class,"addmanagechannel"]);
	Route::get('channelrequest',[FlaggedUserController::class,"channelrequest"]);
	Route::get('managechannel',[FlaggedUserController::class,"managechannel"]);
	Route::get('channeladmin',[FlaggedUserController::class,"channeladmin"]);
	Route::get('channels/reason',[FlaggedUserController::class,"reason"]);
	Route::get('channels/prefix',[FlaggedUserController::class,"prefix"]);
	Route::get('channels/policy_terms',[FlaggedUserController::class,"policy_terms"]);
	
    // Reports
    Route::resource('/reports', ReportController::class);

    // Organizations
    Route::prefix("donations")->name("donations.")->group(function () {
        Route::resource('/organizations', OrganizationController::class);
        Route::delete('organizations/{id}/delete-logo', [OrganizationController::class, 'deleteOrganizationLogo'])->name('organizations.delete-logo');
        Route::get('/categories', [CategoryController::class, 'index'])->name('organizations.categories.index');
    });

    // Series
    Route::prefix("series")->name("series.")->group(function () {
        Route::resource('/series', SeriesController::class);
        Route::get('/setting/prefix', [SeriesController::class, 'prefix'])->name('series.setting.prefix');
        Route::get('/categories', [CategoryController::class, 'index'])->name('series.categories.index');
    });

    Route::get('/series/{id}/series', [UploadMovieController::class, 'deleteMovie'])->name('series.delete-video');
    Route::get('/series/{id}/thumbnail', [UploadMovieController::class, 'deleteImage'])->name('series.delete-thumbnail');
    
    // Wisher and thanks
    Route::prefix("wishes")->name("wishes.")->group(function () {
        Route::get('setting/reasons', [WishesReasonController::class,'index'])->name('reasons');
        Route::get('setting/prefix', [WishesPrefixController::class,'index'])->name('prefix');
        Route::get('setting/policy_terms', [WishesPolicyandTermController::class,'index'])->name('policy_terms');
          Route::get('setting/pricing', [WishesReasonController::class,'pricing']);
        
        Route::get('manage_greeting',[WishesReasonController::class,'manage_greeting']);
        
           Route::get('manage_pray',[WishesReasonController::class,'manage_pray']);
            Route::get('manage_sympathy',[WishesReasonController::class,'manage_sympathy']);
            
             Route::get('upload_card',[WishesReasonController::class,'upload_card']);
             
              Route::get('upload_cardone',[WishesReasonController::class,'upload_cardone']);
              
               Route::get('upload_cardtwo',[WishesReasonController::class,'upload_cardtwo']);
               
               
                Route::get('add_prays',[WishesReasonController::class,'add_prays']);
                
                
                 Route::get('add_greeting',[WishesReasonController::class,'add_greeting']);
                 
                 
                   Route::get('add_verses',[WishesReasonController::class,'add_verses']);
             
    });
    
    Route::prefix("serviceportal")->group(function(){

        Route::resource('manage_categories',ManageCategoryController::class);
        
         Route::get('addpricing',[ServicePortalController::class,'addpricing']);
         Route::get('prefix',[ServicePortalController::class,'prefix']);
          Route::get('reason',[ServicePortalController::class,'reason']);
           Route::get('policy_terms',[ServicePortalController::class,'policy_terms']);
            //  Route::get('manage_categories',[ServicePortalController::class,'manage_categories']);
             
             Route::get('manage_service',[ServicePortalController::class,'manage_service']);
             
             Route::get('manage_search',[ServicePortalController::class,'manage_search']);
    });
    
     Route::prefix("onlineshop")->group(function(){
          Route::get('addonlineshop',[OnlineShopController::class,'addonlineshop']);
          
            Route::get('newshop',[OnlineShopController::class,'newshop']);
            
              Route::get('manageshop',[OnlineShopController::class,'manageshop']);
                Route::get('manageitem',[OnlineShopController::class,'manageitem']);
                
                
                 Route::get('commisionsetting',[OnlineShopController::class,'commisionsetting']);
                  Route::get('taxsetting',[OnlineShopController::class,'taxsetting']);
                   Route::get('currency',[OnlineShopController::class,'currency']);
                    Route::get('additionalservices',[OnlineShopController::class,'additionalservices']);
                       Route::get('shipping',[OnlineShopController::class,'shipping']);
          
     Route::prefix("setting")->group(function(){
         Route::get('prefix',[OnlineShopController::class,'prefix']);
          Route::get('reason',[OnlineShopController::class,'reason']);
           Route::get('policy_terms',[OnlineShopController::class,'policy_terms']);
    });
     });

    // mobile setting s
    Route::resource('mobile-settings', MobileSettingsController::class);
    Route::any('mobile-setting', [MobileSettingsController::class, 'save'])->name('mobile-setting');
    // Donations
    Route::resource('/donations', DonationController::class);

    // Categories
    Route::resource('/categories', CategoryController::class)->only('index', 'store', 'update', 'destroy');

    // Stories
    Route::resource('/stories', StoryController::class)->only('index', 'store', 'update', 'destroy');
      Route::get('story/ManageStories',[StoryController::class,'ManageStories']);
      
        Route::get('story/ReportedStories',[StoryController::class,'ManageStoriestwo']);

    // Events
    Route::prefix("events")->name("events.")->group(function () {
        // Event Categories
        Route::get("categories", [CategoryController::class, 'index'])->name('categories.index');
        // Tickets
        //Route::resource("tickets", TicketController::class);
        Route::get("/ex_property_listing", [EventController::class, 'propertylisting']);
        Route::get("/tickets", [EventController::class, 'tickets'])->name('tickets');
        Route::get('/requests', [EventController::class, 'requests'])->name('requests');
        Route::get('/manage', [EventController::class, 'manage'])->name('manage');
        Route::get('/prefix', [PrefixController::class, 'index'])->name('prefix');
        Route::get('/reasons', [ReasonController::class,'index'])->name('reasons');
        Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
        Route::get('policy_and_terms', [PolicyAndTermsController::class,'index'])->name('policy_and_terms');
    });
    Route::resource("events", EventController::class);

    // Zarok App
    Route::prefix('zarok-app')->name('zarok-app.')->group(function () {
        Route::get('/videos/categories', [CategoryController::class, 'index'])->name('videos.categories.index');
        Route::get('/videos', [UplaodVideoController::class, 'index'])->name('videos.index');
        Route::get('/stories', [StoryController::class, 'index'])->name('stories.index');
        Route::delete('/stories/{id}/delete-thumbnail', [StoryController::class, 'deleteStoryThumbnail'])->name('stories.delete-thumbnail');
        Route::delete('/stories/{id}/delete-media', [StoryController::class, 'deleteStoryMedia'])->name('stories.delete-media');
    });


    // News
    Route::resource('/news', NewsController::class);
    Route::resource('/feeds', NewsController::class);
    Route::get('/news/{id}/{status}', [NewsController::class, 'status'])->name('news-status');
    Route::delete('/news/{id}/asset', [NewsController::class, 'deleteassets'])->name('news.delete-asset');

    Route::resource('/news-category', NewsCategoryController::class);
    Route::get('/news_category/{id}/{status}', [NewsCategoryController::class, 'status'])->name('newscat-status');
    // Music
   
    Route::post('/music/store/', [MusicController::class, 'storekrlo'])->name('music.store');


    Route::get('/musics/{id}/{status}', [MusicController::class, 'status'])->name('musics-status');
    Route::get('setting/music/pricing', [MusicController::class,'pricing'])->name('music.pricing');
    Route::get('setting/music/prefix', [PrefixController::class, 'index'])->name('music.prefix');
    
    Route::get('musics/1',[MusicController::class,'video']);
    Route::get('setting/music/country', [MusicController::class, 'country']);


    Route::resource('/music-category', MusicCategoryController::class);
    Route::get('/music_category/{id}/{status}', [MusicCategoryController::class, 'status'])->name('musiccat-status');

    //Live Stream
    Route::get('live/request_channel', [livestreamController::class, 'channel_request'])->name('live.request_channel');
    Route::get('live/manage_live_stream', [livestreamController::class, 'manage_live_stream'])->name('live.manage_live_stream');
    Route::get('live/report_live_stream', [livestreamController::class, 'report_live_stream'])->name('live.report_live_stream');
    Route::get('live/manage_channel', [livestreamController::class, 'manage_channel'])->name('live.manage_channel');
    Route::get('setting/live/prefix', [PrefixController::class, 'index'])->name('live.prefix');
    Route::get('setting/live/reasons', [ReasonController::class, 'index'])->name('live.reasons');
    Route::get('setting/live/streaming_duration', [PrefixController::class, 'index'])->name('live.streaming_durations');
    Route::get('setting/live/policy_and_terms', [PolicyAndTermsController::class,'index'])->name('live.policy_and_terms.index');

    //artist
    Route::resource('/artist', ArtistController::class);
    Route::get('/artists/{id}/{status}', [ArtistController::class, 'status'])->name('artists-status');

    // upload video clip
    Route::resource('/upload_video', UplaodVideoClipController::class);
    Route::get('/upload_video/{id}/{status}', [UplaodVideoClipController::class, 'status'])->name('upload-status');


    // Album
    Route::resource('/album', AlbumController::class);
    
    // Movie
    Route::resource('upload-video', UplaodVideoController::class);
    Route::resource('/upload-video-category', UploadVideoCategoryController::class);
    Route::get('/video/{id}/{status}', [UplaodVideoController::class, 'status'])->name('video_status');
    Route::get('/video_category/{id}/{status}', [UploadVideoCategoryController::class, 'status'])->name('videocat_status');
// In web.php

Route::get('/department/{id}/edit', [CategoryDepartmentController::class, 'edit'])->name('department.edit');
Route::put('/department/{id}', [CategoryDepartmentController::class, 'update'])->name('department.update');



    Route::resource('movie/upload-movies', UploadMovieController::class);
    Route::get('/movie/setting/prefix', [UploadMovieController::class, 'prefix'])->name('movie.setting.prefix');
    Route::resource('/upload-movies-category', UploadMovieCategoryController::class);
    Route::get('/upload_movies/{id}/{status}', [UploadMovieController::class, 'status'])->name('movies_status');
    Route::get('/movie_category/{id}/{status}', [UploadMovieCategoryController::class, 'status'])->name('moviecat_status');
    Route::post('/storesubcategory', [SubCategoryDepartmentController::class, 'store'])->name('subcategory.store');
    Route::get('/get-subcategories/{id}', [SubCategoryDepartmentController::class, 'getSubCategories']);
    Route::put('/subcategories/{id}', [SubCategoryDepartmentController::class, 'update'])->name('subcategories.update');


    Route::post('/storedepartment', [CategoryDepartmentController::class, 'store'])->name('department.store');
    Route::get('/categories/{id}/edit', [CategoryDepartmentController::class, 'edit'])->name('categories.edit');
    Route::post('/categories/{id}', [CategoryDepartmentController::class, 'update123'])->name('categories.update');
    Route::delete('/departmentcategories/{id}', [CategoryDepartmentController::class, 'destroy123'])->name('categories123.destroy');
   // In web.php
 


    Route::resource('/report-video', ReportVideoController::class);
    Route::get('/report_vidoe/{id}/{status}', [ReportVideoController::class, 'status'])->name('report-status');

    // School
    Route::get('/app/schools', $controller_path . '\apps\school\School@index')->name('app-school');
    Route::get('/app/schools/add-school', $controller_path . '\apps\school\School@create')->name('app-school-create');
    // Events
    Route::get('/app/events', $controller_path . '\apps\event\Event@index')->name('app-event');
    Route::get('/app/events/add-event', $controller_path . '\apps\event\Event@create')->name('app-event-create');

    // History
    Route::delete('/history/{id}/image', [HistoryController::class, 'deleteImage'])->name('history.delete-image');
    Route::delete('/history/{id}/video', [HistoryController::class, 'deleteVideo'])->name('history.delete-video');
    Route::resource('/history', HistoryController::class);
    Route::get('/history/{id}/{status}', [HistoryController::class, 'status'])->name('history-status');

    Route::resource('/history-category', HistoryCategoryController::class);
    Route::get('/history_category/{id}/{status}', [HistoryCategoryController::class, 'status'])->name('historycat-status');

    // Tickets
    Route::get('/app/tickets', $controller_path . '\apps\tickets\Ticket@index')->name('app-ticket');
    // InCome
    Route::get('/app/income', $controller_path . '\apps\income\Income@index')->name('app-income');
    // User InCome
    Route::get('/app/user-income', $controller_path . '\apps\income\Income@userIncome')->name('app-user-income');
    // Online Shop InCome
    Route::get('/app/online-shop-income', $controller_path . '\apps\income\Income@onlineShopIncome')->name('app-online-shop-income');
    // Service InCome
    Route::get('/app/service-income', $controller_path . '\apps\income\Income@serviceIncome')->name('app-service-income');
    // Events InCome
    Route::get('/app/events-income', $controller_path . '\apps\income\Income@eventsIncome')->name('app-events-income');
    // Music InCome
    Route::get('/app/music-income', $controller_path . '\apps\income\Income@musicIncome')->name('app-music-income');
    // Videos InCome
    Route::get('/app/video-income', $controller_path . '\apps\income\Income@videoIncome')->name('app-video-income');
    // Donation InCome
    Route::get('/app/donation-income', $controller_path . '\apps\income\Income@donationIncome')->name('app-donation-income');
    // Total InCome
    Route::get('/app/total-income', $controller_path . '\apps\income\Income@totalIncome')->name('app-total-income');

    // Route::get('/app/daily-income', $controller_path . '\apps\income\Income@dailyIncome')->name('app-daily-income');
    // Route::get('/app/monthly-income', $controller_path . '\apps\income\Income@monthlyIncome')->name('app-monthly-income');
    // Route::get('/app/yearly-income', $controller_path . '\apps\income\Income@yearlyIncome')->name('app-yearly-income');
    // Donation
    Route::get('/app/donation', $controller_path . '\apps\donation\Donation@index')->name('app-donation');
    Route::get('/app/donation/add-donation', $controller_path . '\apps\donation\Donation@create')->name('app-donation-create');
    // Voting
    Route::resource('/vote', VotingController::class);
    Route::get('/vote/{id}/{status}', [VotingController::class, 'status'])->name('votes-status');

    Route::resource('/vote-category', VotingCategoryController::class);
    Route::get('/vote_category/{id}/{status}', [VotingCategoryController::class, 'status'])->name('votecat-status');
    // Media
    Route::resource('/media', MediaController::class);
    Route::get('/media/{id}/{status}', [MediaController::class, 'status'])->name('medias-status');
    Route::resource('/media-category', MediaCategoryController::class);
    Route::get('/media_category/{id}/{status}', [MediaCategoryController::class, 'status'])->name('mediacat-status');
    Route::delete('/media/{id}/image', [MediaController::class, 'deleteMediaImage'])->name('media.delete-img');


    // Bazar
    Route::resource('/bazar', BazarController::class);
    Route::get('/bazar/{id}/{status}', [BazarController::class, 'status'])->name('bazar-status');
    Route::resource('/bazar-category', BazarCategoryController::class);
    Route::get('/bazar-category/{id}/{status}', [BazarCategoryController::class, 'status'])->name('bazarcat-status');
    Route::delete('/bazar/{id}/image', [BazarController::class, 'deleteBazarImage'])->name('bazar.delete-img');

    Route::resource('bazar-subcategory', SubCategoryBazarController::class);
    
          Route::get('bazars/manage_categories',[BazarController::class,'manage_categories']);
          
           Route::get('bazars/pricing_plans',[BazarController::class,'pricing_plans']);
      Route::get('bazars/setting/prefix',[BazarController::class,'prefix']);
          Route::get('bazars/setting/reason',[BazarController::class,'reason']);
           Route::get('bazars/setting/policy_terms',[BazarController::class,'policy_terms']);
           Route::get('bazars/manage_sale',[BazarController::class,'manage_sale']);
           Route::get('bazars/manage_search',[BazarController::class,'manage_search']);
    // Fan Page
    Route::get('/fanpage/requests', [FanPageController::class, 'requests'])->name('fanpage.requests');
    Route::get('/fanpage/blocked', [FanPageController::class, 'blocked'])->name('fanpage.blocked');
    Route::resource('/fanpage', FanPageController::class);
    Route::get('/fanpage-status/{id}/{status}', [FanPageController::class, 'status'])->name('fanpage-status');
    // Route::resource('/manage-fanpage' , ManageFanPageController::class);
    // Route::get('/managefanpage-status/{id}/{status}' , [ManageFanPageController::class, 'status'])->name('fanpage.managefanpage-status');
    // Route::resource('/block-fanpage' , BlockFanPageController::class);
    // Route::get('/blockfanpage-status/{id}/{status}' , [BlockFanPageController::class, 'status'])->name('fanpage.blockfanpage-status');
     

    // Ads
    Route::get('/ads/categories', [CategoryController::class, 'index'])->name('ads.categories.index');
    Route::get('/ads/requests', [AdController::class, 'requests'])->name('ads.requests');
    Route::get('/ads/accepted', [AdController::class, 'accepted'])->name('ads.accepted');
    Route::get('/ads/denied', [AdController::class, 'denied'])->name('ads.denied');
    Route::get('/ads/onHold', [AdController::class, 'onHold'])->name('ads.onHold');
    Route::get('/ads/setting', [AdController::class, 'setting'])->name('ads.setting');
    Route::resource('/ads', AdController::class);
    Route::get('/ads-status/{id}/{status}', [AdController::class, 'status'])->name('ads-status');

    // Manage Ads
    Route::resource('/manage-ads', ManageAdController::class);
    // Report Page
    Route::get('/user-report', $controller_path . '\report\Report@user_report')->name('user-report');
    Route::get('/user-warning', $controller_path . '\report\Report@user_warning')->name('user-warning');


    // maps
    Route::get('/maps/leaflet', $controller_path . '\maps\Leaflet@index')->name('maps-leaflet');

    // Settings
    Route::prefix('settings')->name('settings.')->group(function () {

          // Team
          Route::prefix('team')->name('team.')->group(function () {
            Route::resource('members', TeamMemberController::class);
            Route::resource('roles', RoleController::class);
            
           
            
        });
       Route::delete('/member/{id}/image', [TeamMemberController::class, 'deleteMemberImage'])->name('user.delete-img');

        // Ftp settings
        Route::resource('/servers', ServerController::class)->only(['index', 'store', 'update', 'destroy']);

        // Payment Offices
        Route::resource('/payment-offices', PaymentOfficeController::class);
        Route::delete('/payment-offices/{id}/delete-image', [PaymentOfficeController::class, 'deleteOfficeImage'])->name('payment-offices.delete-image');
        // Payment Methods
        Route::get('/payment-methods', [PaymentMethodController::class, 'index'])->name('payment-methods');
        Route::get('/paypal-stripe', [PaymentMethodController::class, 'index'])->name('paypal.stripe');
        Route::post('/payment-methods', [PaymentMethodController::class, 'save'])->name('payment-methods');
        // Bank transfer
        Route::resource('/bank-transfer', BankTransferController::class);
        // Development Mode
        Route::get('development-mode', [PageSettingsController::class, 'index'])->name('development-mode');
        Route::post('development-mode', [PageSettingsController::class, 'save'])->name('development-mode');

        Route::get('prefix', [PrefixController::class, 'index'])->name('prefix');
        Route::post('prefix', [PrefixController::class, 'store'])->name('prefix');
        Route::get('user/prefix', [PrefixController::class, 'index'])->name('user.prefix');
        Route::get('donation/prefix', [PrefixController::class, 'index'])->name('donation.prefix');
        Route::get('history/prefix', [PrefixController::class, 'index'])->name('history.prefix');
        Route::get('voting/prefix', [PrefixController::class, 'index'])->name('voting.prefix');

        // User Roles
        Route::prefix('user-roles')->name('user-roles.')->group(function () {
            Route::get('/standard', [UserRolesController::class, 'standard'])->name('standard');
            Route::get('/premium', [UserRolesController::class, 'premium'])->name('premium');
            Route::get('/vip', [UserRolesController::class, 'vip'])->name('vip');
            Route::get('/fanpage', [UserRolesController::class, 'fanpage'])->name('fanpage');
        });

        // Pricing
        Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');

        // Countries
        Route::resource('/countries', CountryController::class);
        Route::get('yekbun-location/countries', [CountryController::class,'index'])->name('yekbun_location.countries.index');
        // Regions
        Route::resource('/provinces', RegionController::class);
        // Reason
        Route::resource('/reasons', ReasonController::class);
        // Cities
        Route::resource('/cities', CityController::class);

        //Stories
        Route::get('stories/prefix', [PrefixController::class, 'index'])->name('stories.prefix');
        Route::get('stories/reasons', [ReasonController::class,'index'])->name('stories.reasons');
        Route::get('stories/policy_and_terms', [PolicyAndTermsController::class,'index'])->name('stories.policy_and_terms');


        //chats
        Route::get('chats/prefix', [PrefixController::class, 'index'])->name('chats.prefix');
        Route::get('chats/reasons', [ReasonController::class,'index'])->name('chats.reasons');
        Route::get('chats/policy_and_terms', [PolicyAndTermsController::class,'index'])->name('chats.policy_and_terms');
        Route::get('chats/permission', [UserRolesController::class, 'standard'])->name('chats.permission');
        Route::get('chats/manage-group', [UserRolesController::class, 'standard'])->name('chats.manageGroup');

        //App Setting
        Route::get('app-setting/maintainance', [UserRolesController::class, 'standard'])->name('appsetting.maintainance');
        Route::get('app-setting/appinfo', function(){
          return view('content.apps.app-appinfo');
        })->name('appsetting.appinfo');
        Route::get('app-setting/ringtone', function(){
          return view('content.apps.app-ringtone');
        })->name('appsetting.ringtone');
        Route::get('app-setting/call_ringtone', function(){
          return view('content.apps.app-call_ringtone');
        })->name('appsetting.ringtone');
        // Save Setting Value via Ajax
        Route::post('/save', [SettingController::class, 'save'])->name('save');
        Route::post('/save-many', [SettingController::class, 'saveMany'])->name('saveMany');
    });



    Route::resource("events", EventController::class);
    
    //Wizard Controller
 Route::resource('wizard_example', WizardController::class);
 Route::get('wizard-ex-checkout',[WizardController::class,'wizard_ex_checkout']);
    

    // policy and terms
    Route::resource('policy_and_terms', PolicyAndTermsController::class);
    Route::get('musics/policy_and_terms', [PolicyAndTermsController::class,'index'])->name('music.policy_and_terms.index');
    Route::get('team/policy_and_terms', [PolicyAndTermsController::class,'index'])->name('team.policy_and_terms.index');
 
    Route::post('saveFileds', [PolicyAndTermsController::class, 'saveFileds'])->name('policy_and_terms.saveFileds');
    // system logs
    Route::resource('logs', SystemLogController::class);
    Route::get('department',[SubCategoryDepartmentController::class,'manage_department']);
    
      Route::get('backup_setting',[SystemLogController::class,'backup_setting']);
       
          Route::get('storage_setting',[SystemLogController::class,'storage_setting']);

    // News
    Route::resource('/news', NewsController::class);
    Route::get('/news/{id}/{status}', [NewsController::class, 'status'])->name('news-status');

    Route::resource('/news-category', NewsCategoryController::class);
    Route::get('/news_category/{id}/{status}', [NewsCategoryController::class, 'status'])->name('newscat-status');
    // Music
    Route::resource('/music', MusicController::class);
    Route::get('/musics/{id}/{status}', [MusicController::class, 'status'])->name('musics-status');
    Route::delete('/music/{id}/music', [MusicController::class, 'deleteMusic'])->name('music.delete-audio');

    // Song
    Route::resource('/songs', MusicController::class);
    Route::get('/songs/{id}/{status}', [MusicController::class, 'status'])->name('songs-status');

    // Video Clips
    Route::resource('/video-clips', VideoClipController::class);
    Route::get('/video-clips/{id}/{status}', [VideoClipController::class, 'status'])->name('video-clips-status');
    Route::delete('/video-clips/{id}/clip', [VideoClipController::class, 'deleteVideo'])->name('video-clips.delete-audio');


    Route::resource('/music-category', MusicCategoryController::class);
    Route::get('/music_category/{id}/{status}', [MusicCategoryController::class, 'status'])->name('musiccat-status');
    Route::delete('/music_icon/{id}/icon', [MusicCategoryController::class, 'deleteMusic'])->name('music_icon.delete-img');


    //artist
    Route::resource('/artist', ArtistController::class);
    Route::get('/artists/{id}/{status}', [ArtistController::class, 'status'])->name('artists-status');
    Route::get('get/city/{id}', [ArtistController::class, 'get_city']);
    Route::delete('/artists/{id}/image', [ArtistController::class, 'destroy'])->name('artists.delete');

    // upload video clip
    Route::resource('/upload_video', UplaodVideoClipController::class);
    Route::get('/upload_video/{id}/{status}', [UplaodVideoClipController::class, 'status'])->name('upload-status');


    // Album
    Route::resource('/album', AlbumController::class);
    Route::delete('/album/{id}/album', [AlbumController::class, 'deleteAlbum'])->name('album.delete-audio');
    Route::delete('/album/{id}/image', [AlbumController::class, 'deleteAlbumImage'])->name('album.delete-img');
    Route::get('albums',[AlbumController::class, 'viewpage']);


    // Route::resource('/upload-movies', UploadMovieController::class);
    // Route::resource('/upload-movies-category', UploadMovieCategoryController::class);
    Route::get('/upload_movies/{id}/{status}', [UploadMovieController::class, 'status'])->name('movies_status');
    Route::get('/movie_category/{id}/{status}', [UploadMovieCategoryController::class, 'status'])->name('moviecat_status');
    Route::get('/upload_movies/{id}/movie', [UploadMovieController::class, 'deleteMovie'])->name('movie.delete-video');
    Route::get('/upload_movies/{id}/thumbnail', [UploadMovieController::class, 'deleteImage'])->name('moive.delete-thumbnail');



    Route::resource('/report-video', ReportVideoController::class);
    Route::get('/report_vidoe/{id}/{status}', [ReportVideoController::class, 'status'])->name('report-status');
    
   Route::get('/manage_video', [ReportVideoController::class, 'manage_video']);
    Route::get('/video_request', [ReportVideoController::class, 'video_request']);
    
    
    
    
      Route::get('/prefix', [ReportVideoController::class, 'prefix']);
        Route::get('/policyterms', [ReportVideoController::class, 'policyterms']);
         Route::get('/reason', [ReportVideoController::class, 'reason']);

    // School
    Route::get('/app/schools', $controller_path . '\apps\school\School@index')->name('app-school');
    Route::get('/app/schools/add-school', $controller_path . '\apps\school\School@create')->name('app-school-create');
    // Events
    Route::get('/app/events', $controller_path . '\apps\event\Event@index')->name('app-event');
    Route::get('/app/events/add-event', $controller_path . '\apps\event\Event@create')->name('app-event-create');
    // History
    Route::resource('/history', HistoryController::class);
    Route::get('/history/{id}/{status}', [HistoryController::class, 'status'])->name('history-status');

    Route::resource('/history-category', HistoryCategoryController::class);
    Route::get('/history_category/{id}/{status}', [HistoryCategoryController::class, 'status'])->name('historycat-status');

    // Tickets
    Route::get('/app/tickets', $controller_path . '\apps\tickets\Ticket@index')->name('app-ticket');
    // InCome
    Route::get('/app/income', $controller_path . '\apps\income\Income@index')->name('app-income');
    // Donation
    Route::get('/app/donation', $controller_path . '\apps\donation\Donation@index')->name('app-donation');
    Route::get('/app/donation/add-donation', $controller_path . '\apps\donation\Donation@create')->name('app-donation-create');
    // Voting
    Route::resource('/vote', VotingController::class);
    Route::get('/vote/{id}/{status}', [VotingController::class, 'status'])->name('votes-status');
    Route::get('/vote/{id}/banner', [VotingController::class, 'deleteImage'])->name('vote.delete-banner');


    Route::resource('/vote-category', VotingCategoryController::class);
    Route::get('/vote_category/{id}/{status}', [VotingCategoryController::class, 'status'])->name('votecat-status');
    // Media
    Route::resource('/media', MediaController::class);
    Route::get('/media/{id}/{status}', [MediaController::class, 'status'])->name('medias-status');
    Route::resource('/media-category', MediaCategoryController::class);
    Route::get('/media_category/{id}/{status}', [MediaCategoryController::class, 'status'])->name('mediacat-status');

    // Bazar
    Route::resource('/bazar', BazarController::class);
    Route::get('/bazar/{id}/{status}', [BazarController::class, 'status'])->name('bazar-status');
    Route::resource('/bazar-category', BazarCategoryController::class);
    Route::get('/bazar-category/{id}/{status}', [BazarCategoryController::class, 'status'])->name('bazarcat-status');
    
    // Currency
    Route::get('/currency', [CurrencyController::class, 'index'])->name('index');

    Route::resource('bazar-subcategory', SubCategoryBazarController::class);
    // Fan Page
    Route::get('/fanpage/requests', [FanPageController::class, 'requests'])->name('fanpage.requests');
    Route::get('/fanpage/blocked', [FanPageController::class, 'blocked'])->name('fanpage.blocked');
    Route::resource('/fanpage', FanPageController::class);
    Route::get('/fanpage-status/{id}/{status}', [FanPageController::class, 'status'])->name('fanpage-status');
    // Route::resource('/manage-fanpage' , ManageFanPageController::class);
    // Route::get('/managefanpage-status/{id}/{status}' , [ManageFanPageController::class, 'status'])->name('fanpage.managefanpage-status');
    // Route::resource('/block-fanpage' , BlockFanPageController::class);
    // Route::get('/blockfanpage-status/{id}/{status}' , [BlockFanPageController::class, 'status'])->name('fanpage.blockfanpage-status');


    // Language
    Route::resource('/language', LanguageController::class);

    // Translation
    Route::get('/translation', [TranslationController::class, 'getText'])->name('translation.getText');
    Route::get('/translate/{id}', [TranslationController::class, 'translate'])->name('translation.translate');
    Route::post('/language-transalate/{id?}', [TranslationController::class, 'translateLanguage'])->name('translation.translateLanguage');
    Route::resource('/text', TextController::class);
    // Report Page

    Route::get('/user-report', $controller_path . '\report\Report@user_report')->name('user-report');
    Route::get('/user-warning', $controller_path . '\report\Report@user_warning')->name('user-warning');


    // maps
    Route::get('/maps/leaflet', $controller_path . '\maps\Leaflet@index')->name('maps-leaflet');

    
    // Smiley
    Route::resource('/smiley', SmileyController::class);
    Route::delete('smiley/{id}/delete-smiley', [SmileyController::class, 'deleteSmiley'])->name('smiley.delete-image');
    Route::resource('/ringtone', RingtoneController::class);
    Route::resource('/call-ringtone', CallRingtoneController::class);
    Route::put('/call-rington/{id}', [CallRingtoneController::class, 'update'])->name('call-ringtone.update');
    Route::put('/mrington/{id}', [RingtoneController::class, 'update'])->name('m-ringtone.update');

     Route::post('/call-rington', [RingtoneController::class, 'save'])->name('chat-setting');


    Route::delete('ringtone/{id}/delete-ringtone', [RingtoneController::class, 'deleteRingtone'])->name('ringtone.delete-ringtone');
    Route::delete('call-ringtone/{id}/delete-ringtone', [CallRingtoneController::class, 'deleteRingtone'])->name('callringtone.delete-ringtone');
    Route::resource('/chat-settings', ChatSettingController::class);
    Route::post('/chat-setting', [ChatSettingController::class, 'save'])->name('chat-setting');

    // 2FA
    Route::get('2fa', [App\Http\Controllers\Admin\TwoFAController::class, 'index'])->name('2fa.index');
    Route::post('2fa', [App\Http\Controllers\Admin\TwoFAController::class, 'store'])->name('2fa.post');
    Route::get('2fa/reset', [App\Http\Controllers\Admin\TwoFAController::class, 'resend'])->name('2fa.resend');


    Route::get('/check-code', [App\Http\Controllers\Admin\TwoFAController::class, 'check'])->name('check-code');
    // Feed Controller
    Route::get('share-feed', [FeedController::class, 'shareWidget'])->name('share-feed');

    // Backgrond Feed Cotnroller
    Route::resource('/backgrond-feed', BackgroundFeedController::class);
    Route::delete('/backgrond/{id}/image', [BackgroundFeedController::class, 'deleteImage'])->name('background.delete-image');


    // Animated Emoji
    Route::resource('/animated-emoji', AnimationEmojiController::class);
    Route::delete('/animation/{id}/emoji', [AnimationEmojiController::class, 'deleteImage'])->name('animation.delete-image');

    // Ticket Service

    Route::resource('/ticket-service', TicketServiceController::class);
    Route::delete('ticket-service/{id}/delete-image', [TicketServiceController::class, 'deleteServiceImage'])->name('ticket-service.delete-image');

    // FanPage Type
    Route::resource('/fan-page-type', FanPageTypeController::class);
    Route::delete('fanpage-delete/{id}/icon' , [FanPageTypeController::class , 'deleteImage'])->name('fanpage.delete-icon');

    // invoice eidt
    Route::post('/invoice-address', [InvoiceController::class, 'update_address'])->name('invoice-address');
    Route::post('/app-info', [AppInfoController::class, 'store'])->name('app-info.store');
    Route::get('app-setting/appinfo', [AppInfoController::class, 'index'])->name('appsetting.appinfo');

});