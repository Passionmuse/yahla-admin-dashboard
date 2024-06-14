<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\BazarController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\MediaController;
use App\Http\Controllers\Api\MusicController;
use App\Http\Controllers\Api\ArtistController;
use App\Http\Controllers\Api\ReportController;
use App\Http\Controllers\Api\TicketController;
use App\Http\Controllers\Api\VotingController;
use App\Http\Controllers\Api\FanPageController;
use App\Http\Controllers\Api\HistoryController;
use App\Http\Controllers\Api\DonationController;
use App\Http\Controllers\Api\DiamondUserController;
use App\Http\Controllers\Api\FlaggedUserController;
use App\Http\Controllers\Api\PremiumUserController;
use App\Http\Controllers\Api\BlockFanPageController;
use App\Http\Controllers\Api\NewsCategoryController;
use App\Http\Controllers\Api\OrganizationController;
use App\Http\Controllers\Api\StandardUserController;
use App\Http\Controllers\Api\BazarCategoryController;
use App\Http\Controllers\Api\EventCategoryController;
use App\Http\Controllers\Api\ManageFanPageController;
use App\Http\Controllers\Api\MediaCategoryController;
use App\Http\Controllers\Api\MusicCategoryController;
use App\Http\Controllers\Api\VotingCategoryController;
use App\Http\Controllers\Api\HistoryCategoryController;
use App\Http\Controllers\Api\UploadVideoClipController;
use App\Http\Controllers\Api\UploadVideoCategoryController;
use App\Http\Controllers\Api\UploadVideoController;
use App\Http\Controllers\Api\UploadMovieCategoryController;
use App\Http\Controllers\Api\UploadMovieController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BazarSubCategoryController;
use App\Http\Controllers\Api\TwoFactorController;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\PrivacyAndPolicyController;
use App\Http\Controllers\Api\TranslationController;
use App\Http\Controllers\Api\AccountSettingController;
use App\Http\Controllers\Api\ContactUsController;
use App\Http\Controllers\Api\FeedBackgroundImageController;
use App\Http\Controllers\Api\UserSettingController;
use App\Http\Controllers\Api\FeedController;
use App\Http\Controllers\Api\RingtoneController;
use App\Http\Controllers\Api\UploadMediaController;
use App\Http\Controllers\Api\CollectionController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Api\UpgradeAccountController;
use App\Http\Controllers\Api\StripeController;
use App\Http\Controllers\Api\AnimationEmojiController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\MarketServiceContorller;
use App\Http\Controllers\Api\PlaylistController;
use App\Http\Controllers\Api\ReactionController;
use App\Http\Controllers\Api\AlbumController;
use App\Http\Controllers\Api\PostGalleryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| 
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Posts
Route::resource("posts", PostController::class)->except(["create", "edit"]);

// Flagged users
Route::resource("flagged-users", FlaggedUserController::class)->except(["create", "edit"]);
// Reports
Route::resource("reports", ReportController::class)->except(["create", "edit"]);

// Organizations
Route::resource("organizations", OrganizationController::class)->except(["create", "edit"]);
// Donations
Route::resource("donations", DonationController::class)->except(["create", "edit"]);

// Events
Route::resource("events", EventController::class)->except(["create", "edit"]);
// Event Categories
Route::resource("event-categories", EventCategoryController::class)->except(["create", "edit"]);
// Tickets
Route::resource("tickets", TicketController::class)->except(["create", "edit"]);

// Users
Route::prefix("/users")->name("users.")->group(function () {
    Route::resource("standard", StandardUserController::class);
    Route::resource("premium", PremiumUserController::class);
    Route::resource("diamond", DiamondUserController::class);
});

// News 
Route::resource('news', NewsController::class)->only(['index', 'store', 'show', 'update', 'destroy']);
Route::resource('news-category', NewsCategoryController::class)->only(['index', 'store', 'update', 'show', 'destroy']);
Route::resource('music-category', MusicCategoryController::class)->only(['index', 'store', 'show', 'update', 'destroy']);
Route::resource('video-clip', UploadVideoClipController::class)->only(['index', 'store', 'show', 'destroy', 'update']);
Route::resource('fan-page', FanPageController::class)->only(['index', 'store', 'show', 'destroy', 'update']);
Route::resource('manage-fanpage', ManageFanPageController::class)->only(['index', 'store', 'show', 'destroy', 'update']);
Route::resource('voting', VotingController::class)->only(['index', 'store', 'show', 'destroy', 'update']);
Route::resource('voting-category', VotingCategoryController::class)->only(['index', 'store', 'show', 'destroy', 'update']);
Route::resource('media-category', MediaCategoryController::class)->only(['index', 'store', 'show', 'destroy', 'update']);
Route::resource('media', MediaController::class)->only(['index', 'store', 'show', 'destroy', 'update']);
Route::resource('history-category', HistoryCategoryController::class)->only(['index', 'store', 'show', 'destroy', 'update']);
Route::resource('history', HistoryController::class)->only(['index', 'store', 'show', 'destroy', 'update']);
Route::resource('bazar-category', BazarCategoryController::class)->only(['index', 'store', 'show', 'destroy', 'update']);
Route::resource('bazar-subcategory', BazarSubCategoryController::class)->only(['index', 'store', 'show', 'destroy', 'update']);

Route::resource('bazar', BazarController::class)->only(['index', 'store', 'show', 'destroy', 'update']);

Route::resource('video-category', UploadVideoCategoryController::class)->only(['index', 'store', 'show', 'destroy', 'update']);
Route::resource('video', UploadVideoController::class)->only(['index', 'store', 'show', 'destroy', 'update']);
Route::resource('movie-category', UploadMovieCategoryController::class)->only(['index', 'store', 'show', 'destroy', 'update']);
Route::resource('movie', UploadMovieController::class)->only(['index', 'store', 'show', 'destroy', 'update']);


// User 
Route::post('/login', [AuthController::class, 'login']);
Route::post('/signup', [AuthController::class, 'signup']);

Route::post('forgot-password', [AuthController::class, 'forgot_password']);

Route::post('change-password', [AuthController::class, 'change_password']);
Route::post('/reset/password', [AuthController::class, 'reset'])->name('password.reset');
Route::post('/reset', [AuthController::class, 'resetpassword'])->name('reset.complete');
Route::post('/reset/resend', [AuthController::class, 'reset_resend'])->name('reset.resend');

// Account Setting  Controller
Route::post('/change-password', [AccountSettingController::class, 'change_password'])->name('change-password')->middleware('auth:sanctum');
Route::post('/send-email-code', [AccountSettingController::class, 'send_email_code'])->name('send-email-code');
Route::post('/resend-email', [AccountSettingController::class, 'resend_email_code'])->name('resend-email');
Route::post('/change-email', [AccountSettingController::class, 'change_email'])->name('change-email');
Route::post('/upgrade-account', [AccountsettingController::class, 'upgrade_account'])->name('upgrade-account');

// Contact Us Controller
Route::post('/contact-us', [ContactUsController::class, 'contact_us'])->name('contact-us');


Route::post('2fa', [TwoFactorController::class, 'store'])->name('2fa.post');
Route::post('2fa/reset', [TwoFactorController::class, 'resend'])->name('2fa.resend');


// Country Controller 
Route::get('province', [CountryController::class, 'province'])->name('province');

// Privacy and Policy
Route::get('privacy', [PrivacyAndPolicyController::class, 'privacy'])->name('privacy');
Route::get('/single-privacy/{name}', [PrivacyAndPolicyController::class, 'single_privacy'])->name('single_privacy');

// Translation
Route::prefix('/translate')->name('api.translate.')->group(function () {
    Route::get('/languages', [TranslationController::class, 'fetch_languages'])->name('languages');
    Route::get('/{id}', [TranslationController::class, 'translate'])->name('translate');
});

// User  Setting Controller 
Route::post('/user-setting/{user_id}', [UserSettingController::class, 'index'])->name('user-setting');
Route::post('/user-setting/save', [UserSettingController::class, 'save'])->name('user-setting-save')->middleware('auth:sanctum');


// Feed Controller 
Route::get('share-feed', [FeedController::class, 'shareWidget'])->name('share-feed');


// Ringtone Controller
Route::get('/ringtone', [RingtoneController::class, 'get'])->name('ringtone');

Route::post('/upload-media', [UploadMediaController::class, 'index']);
Route::post('/add-feed', [FeedController::class, 'add_feed'])->name('add-feed');
Route::get('/fetch-feed/{id?}', [FeedController::class, 'fetch_feed'])->name('fetch-feed');
Route::get('/get-feed/{id}', [FeedController::class, 'get_feed'])->name('get-feed');
Route::get('/get-first-feed/{id}', [FeedController::class, 'get_first_feed'])->name('get-feed-first');
Route::get('/get-feed-bg/{id}', [FeedController::class, 'get_feed_bg'])->name('get-feed-bg');
Route::get('/get-feed-background/{id}', [FeedController::class, 'get_all'])->name('get-feed-background');
Route::get('/feed-background-video/{id}', [FeedController::class, 'get_feed_background_video'])->name('feed-background-video');
Route::get('/get-all-videos/{id}', [FeedController::class, 'get_all_feed_videos'])->name('get-all-videos');
Route::get('/feed/media/{id}', [FeedController::class, 'get_feed_media'])->name('feed.media');
Route::get('/feed/media-delete', [FeedController::class, 'feed_media_delete'])->name('feed.media.delete');
// Feed image background
Route::post('/upload-background', [FeedBackgroundImageController::class, 'upload'])->name('upload-background');
Route::get('/get-background', [FeedBackgroundImageController::class, 'get'])->name('get-background');

// collectoin feed
Route::post('/add-collection', [CollectionController::class, 'insert'])->name('add-collection');
Route::get('/get_collection/{user_id}', [CollectionController::class, 'get_collection'])->name('get-collection');
Route::delete('/remove-collection/{id}', [CollectionController::class, 'destroy'])->name('remove-collection');

// Paypal
Route::post('charge', [PaymentController::class, 'charge']);
Route::get('success', [PaymentController::class, 'success']);
Route::get('error', [PaymentController::class, 'error']);
Route::get('/payment-details/{payment_id}', [PaymentController::class, 'payment_details']);


// Stripe
Route::post('/stripe/checkout', [StripeController::class, 'index']);
Route::get('/stripe/update-transaction', [StripeController::class, 'update']);
Route::get('/stripe/update-success', [StripeController::class, 'success']);

Route::get('get_account_price', [UpgradeAccountController::class, 'price_upgrade'])->name('get_account_price');
Route::post('/account-upgrade', [UpgradeAccountController::class, 'account_upgrade'])->name('account-upgrade')->middleware('auth:sanctum');

// News
Route::get('/category-news/{id}', [NewsController::class, 'category_news']);
Route::get('/news-cover', [NewsController::class, 'cover_news']);
Route::get('/news-category', [NewsController::class, 'categories']);
Route::get('/news-detail/{id}', [NewsController::class, 'detail']);
Route::post('/news-search', [NewsController::class, 'search']);

// History
Route::get('/category-history/{id}', [HistoryController::class, 'categorgy_history']);
Route::get('/history-cover', [HistoryController::class, 'cover_history']);
Route::get('/history-category', [HistoryController::class, 'categories']);
Route::get('/history-detail/{id}', [HistoryController::class, 'detail']);
Route::post('/history-search', [HistoryController::class, 'search']);

// Voting
Route::get('/voting-cover/{id?}', [VotingController::class, 'get_cover']);
Route::get('/fetch-voting/{id?}', [VotingController::class, 'fetch']);
Route::get('/fetch-voting/all/{id?}', [VotingController::class, 'fetch_all']);
Route::get('/voting-details/{id}/{user_id?}', [VotingController::class, 'get_details']);
Route::post('/voting/store-reaction', [VotingController::class, 'store_reaction']);
Route::get('/get-statistics/{voteId}', [VotingController::class , 'get_statistics']);
Route::get('/voting-stats/{id}', [VotingController::class , 'stats']);


//Animation Emojji
Route::get('/get-all-emoji/{userId?}/{type?}/{value?}' , [AnimationEmojiController::class  , 'get_all_emoji'])->name('get-all-emoji');

// Reaction 
Route::post('/store-reaction' , [ReactionController::class, 'store_reaction'])->name('store-reaction');
// comments 
Route::get('/get-comment/{type}/{id}/{parent_id?}' , [CommentController::class, 'get_comment'])->name('get-comment');
Route::post('/store-comment' , [CommentController::class, 'store_comment'])->name('store-comment');

// Music 
Route::get('/music' , [MusicController::class , 'index'])->name('music');
Route::get('/popular-song/{id}' , [MusicController::class , 'popular_song'])->name('popular-song');

// Artist 
Route::get('/artist-music' , [ArtistController::class , 'get_all_artist_music'])->name('artist-music');
Route::get('/single-aritst-music/{id}' , [ArtistController::class , 'get_single_artist_music'])->name('single-aritst-music');
Route::get('/get-latest-artist' , [ArtistController::class , 'get_two_latest_artist'])->name('get-latest-artist');

// Album
Route::get('/albums' , [AlbumController::class , 'albums']);
Route::get('/albums/new' , [AlbumController::class , 'new_albums']);
Route::get('/album-details/{id}' , [AlbumController::class , 'albums_details']);

// Market Service
Route::post('/market-services' ,[MarketServiceContorller::class , 'market_services'])->name('market-services');
// Route::post('/market-categories' ,[MarketServiceContorller::class , 'market_categories'])->name('market-categories');
// Route::post('/market-gallery' ,[MarketServiceContorller::class , 'market_gallery'])->name('market-gallery');
// Route::post('/market-view-options' , [MarketServiceContorller::class , 'market_view_option'])->name('market-view-options');


// Playlist 
Route::post('/playlists' , [PlaylistController::class , 'playlist'])->name('playlists');
Route::post('/get-playlist' , [PlaylistController::class , 'get_playlist'])->name('get-playlist');
Route::get('/get-single-playlist/{playlist_id}' , [PlaylistController::class , 'get_single_playlist'])->name('get-single-playlist');
// Set music to playlist
Route::post('/set-music-playlist' , [PlaylistController::class , 'set_music_to_playlist'])->name('set-music-playlist');
// fovourite artist 
Route::post('/favourite-artist' , [PlaylistController::class , 'favourite_artist'])->name('favourite-aritst');
Route::get('/get-favourite-artist/{user_id}' , [PlaylistController::class  , 'get_favourite_artist'])->name('get-favourite-artist');
Route::get('/get-favourite-artist-id/{user_id}' , [PlaylistController::class  , 'get_favourite_artist_ids'])->name('get-favourite-artist-id');
// Route::get('/get-music-playlist' , [PlaylistController::class , 'get_music_playlist'])->name('get-music-playlist');
// Ablbum controller 
Route::post('/favourite-album' , [AlbumController::class , 'favourite_album'])->name('favourite-album');
Route::get('/get-favourite-album/{user_id}' , [AlbumController::class , 'get_favourite_album'])->name('get-favourite-album');
Route::get('/get-favourite-album-id/{user_id}' , [AlbumController::class , 'get_favourite_album_ids'])->name('get-favourite-album-id');

// Post gallery
Route::post('/get-gallery' , [PostGalleryController::class , 'get_gallery']);
