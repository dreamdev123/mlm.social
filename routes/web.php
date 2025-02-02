<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

// No Auth Panel
Route::group([], function() {
    Route::get('/', 'LandingController@index')->name('home');
    Route::get('/our-amazing-team', 'LandingController@awesome')->name('awesome');
    Route::get('/{referral_id}', static function ($referral_id) {
        if (\App\User::where('customer_id', $referral_id)->exists()) {
            \Cookie::queue(cookie(
                'referral_id', $referral_id, 60 * 24 * 30 * 3, null, '.'. env('APP_BASE_DOMAIN', 'brandfields.com')
            ));
        }
        return redirect()->route('register');
    })->where('referral_id', '[0-9]{6}+')->name('referral:referral-link');
    Route::get('/landing', 'LandingController@landing')->name('landing');
});

Route::group(['middleware' => ['web'], 'namespace' => 'Auth'], function() {
    Route::post('/verify', 'RegisterController@verify')->name('auth.verify');
    Route::post('/address-filter', 'RegisterController@addressFilter')->name('address.search');
});

// Auth Panel
Route::group(['middleware' => ['auth']], function() {
    Route::group(['middleware' => ['roles:admin']], function() {
        Route::get('/news/mine', 'NewsController@mine')->name('news.mine');
        Route::get('/news/create', 'NewsController@create')->name('news.create');
        Route::get('/news/edit/{id}', 'NewsController@edit')->name('news.edit');
    });
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('/profile/edit', 'UserController@edit')->name('profile.edit');
    Route::get('/profile/setting', 'UserController@setting')->name('profile.setting');
    Route::get('/profile/{userID?}', 'UserController@index')->name('profile');

    // Setting Route
    Route::put('/settings/profile-address-update', 'UserController@updateProfileAddress')->name('setting.profile.address');
    Route::put('/settings/other-interested-update', 'UserController@updateOtherInterested')->name('setting.other.interested');
    Route::put('/settings/main-interested-update', 'UserController@updateMainInterested')->name('setting.main.interested');
    Route::post('/settings/profile-avatar-upload', 'UserController@uploadProfileAvatar')->name('setting.profile.avatar');
    Route::put('/settings/profile-avatar-remove', 'UserController@removeProfileAvatar')->name('setting.remove.avatar');
    Route::put('/settings/update_story', 'UserController@updateStoryContent')->name('setting.update.story');
    Route::put('/settings/update_job_title', 'UserController@updateJobTitle')->name('setting.update.job_title');
    Route::put('/settings/update_city', 'UserController@updateCity')->name('setting.update.city');
    Route::put('/settings/update_country', 'UserController@updateCountry')->name('setting.update.country');
    Route::put('/settings/update_street', 'UserController@updateStreet')->name('setting.update.street');
    Route::put('/settings/update_code', 'UserController@updateCode')->name('setting.update.code');
    Route::put('/settings/update_email', 'UserController@updateEmail')->name('setting.update.email');
    Route::put('/settings/update_phone', 'UserController@updatePhone')->name('setting.update.phone');
    Route::put('/settings/update_site', 'UserController@updateSite')->name('setting.update.site');

    // Connect Route
    Route::get('/connect', 'ConnectController@index')->name('connect.index');
    Route::get('/connect/{userID}', 'ConnectController@request')->name('connect.request');
    Route::post('/connect/request', 'ConnectController@send')->name('connect.request.send');
    Route::post('/connect/filter', 'ConnectController@filter')->name('connect.search.filter');
    Route::post('/connect/address-filter', 'ConnectController@addressFilter')->name('connect.address.search');

    // Chat Route
    Route::get('/chat', 'ChatController@index')->name('chat.index');
    Route::post('/chat/filter', 'ChatController@filter')->name('chat.search.filter');
    Route::post('/chat/create-chat-room', 'ChatController@chatRoomCreate')->name('chat.create.room');
    Route::get('/chat/{ids?}', 'ChatController@chatting')->name('chat.chatting');
    Route::put('/chat/update-channel', 'ChatController@updateConnectedStatus')->name('chat.connected.status');
    Route::put('/chat/trash', 'ChatController@trashUser')->name('chat.trash.user');

    // Friends Route
    Route::get('/friends', 'FriendsController@index')->name('friends.index');
    Route::get('/friends/individuals', 'FriendsController@individuals')->name('friends.individuals');
    Route::get('/friends/companies', 'FriendsController@companies')->name('friends.companies');
    Route::get('/friends/coaches', 'FriendsController@coaches')->name('friends.coaches');
    Route::post('/friends/accept', 'FriendsController@accept')->name('friend.accept');
    Route::post('/friends/remove', 'FriendsController@remove')->name('friend.remove');

    // Teams Route
    Route::get('/teams', 'TeamsController@index')->name('teams.index');
    Route::get('/teams/own', 'TeamsController@showOwnTeams')->name('own.teams.index');
    Route::get('/team', 'TeamsController@show')->name('team.create.index');
    Route::get('/team/edit/{id}', 'TeamsController@edit')->name('team.edit.index');
    Route::post('/team/create-chat-room', 'TeamsController@createTeamChatRoom')->name('team.create.chatroom');
    Route::put('/team/update-info', 'TeamsController@updateTeamInfo')->name('team.info.update');
    Route::post('/team/ban', 'TeamsController@ban')->name('team.member.ban');
    Route::post('/team/unban', 'TeamsController@unban')->name('team.member.unban');
    Route::get('/team-chatroom/{id}', 'TeamsController@chat')->name('team.chat.index');
    Route::delete('/team/delete', 'TeamsController@delete')->name('team.delete');

    // Companies Route
    Route::get('/companies', 'CompaniesController@index')->name('companies.index');
    Route::put('/companies/likes', 'CompaniesController@likes')->name('company.likes');

    // Coach Route
    Route::get('/coaches', 'CoachController@index')->name('coaches.index');

    // Studio Route
    Route::get('/studio', 'StudioController@index')->name('studio.index');
    Route::get('/studios/edit', 'StudioController@edit')->name('studio.edit');
    Route::put('/studio/update_mode1', 'StudioController@updateMode1')->name('studio.update.mode1');
    Route::put('/studio/update_mode2', 'StudioController@updateMode2')->name('studio.update.mode2');
    Route::put('/studio/update_mode3', 'StudioController@updateMode3')->name('studio.update.mode3');
    Route::put('/studio/update_mode4', 'StudioController@updateMode4')->name('studio.update.mode4');
    Route::post('/studio/image-upload', 'StudioController@uploadImage')->name('studio.image.upload');
    Route::put('/studio/image-remove', 'StudioController@removeImage')->name('studio.remove.image');
    Route::post('/studio/update', 'StudioController@update')->name('studio.update');
    Route::get('/studio/download', 'StudioController@download')->name('studio.download');

    // Post Route
    Route::post('/post/store', 'PostsController@store')->name('post.store');
    Route::post('/post/update', 'PostsController@update')->name('post.update');
    Route::put('/post/likes', 'PostsController@likes')->name('post.likes');
    Route::delete('/post/delete', 'PostsController@delete')->name('post.delete');

    // Stories Route
    Route::get('/stories', 'StoriesController@index')->name('stories.index');
    Route::get('/stories/friends', 'StoriesController@friends_story')->name('stories.friends');
    Route::get('/stories/mine', 'StoriesController@my_story')->name('stories.mine');
    Route::get('/stories/create', 'StoriesController@create')->name('stories.create');
    Route::get('/stories/edit/{id}', 'StoriesController@edit')->name('stories.mine.edit');

    // News Route
    Route::get('/news', 'NewsController@index')->name('news.index');

    // Events Route
    Route::get('/events/company', 'EventsController@company')->name('events.company');
    Route::get('/events/coach', 'EventsController@coach')->name('events.coach');
    Route::get('/events/distributor', 'EventsController@distributor')->name('events.distributor');
    Route::get('/events/mine', 'EventsController@mine')->name('events.mine');
    Route::get('/events/create', 'EventsController@create')->name('events.create');
    Route::get('/events/edit/{id}', 'EventsController@edit')->name('events.mine.edit');

    // Trade Route
    Route::get('/trade', 'TradeController@index')->name('trades.index');
    Route::get('/trade/friends', 'TradeController@friend')->name('trades.friends');
    Route::get('/trade/mine', 'TradeController@mine')->name('trades.mine');
    Route::get('/trade/create', 'TradeController@create')->name('trades.create');
    Route::get('/trade/edit/{id}', 'TradeController@edit')->name('trades.mine.edit');

    // Incentives Route
    Route::get('/incentives', 'IncentivesController@index')->name('incentives.index');
    Route::get('/incentives/teams', 'IncentivesController@teams')->name('incentives.teams');
    Route::post('/incentives/teams/search', 'IncentivesController@fetch')->name('incentives.teams.search');

    // Wallet Route
    Route::get('/wallet', 'WalletController@index')->name('wallet.index');

    // Files Route
    Route::get('/files/manual', 'FilesController@manual')->name('files.manual');
    Route::get('/files/video', 'FilesController@video')->name('files.video');
    Route::get('/files/receipt', 'FilesController@receipt')->name('files.receipt');

    // Info Route
    Route::get('/info', 'InfoController@index')->name('info.index');
});
