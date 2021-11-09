<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Paginator::useBootstrap();

        $site_name = DB::table('settings')
        ->select('site_name')
        ->where('id', 1)
        ->first();

        view()->share('site_name', $site_name);

        $site_description = DB::table('settings')
        ->select('site_description')
        ->where('id', 1)
        ->first();
        
        view()->share('site_description', $site_description);

        $telegram_link = DB::table('settings')
        ->select('telegram_link')
        ->where('id', 1)
        ->first();
        view()->share('telegram_link', $telegram_link);

        $twitter_link = DB::table('settings')
        ->select('twitter_link')
        ->where('id', 1)
        ->first();
        view()->share('twitter_link', $twitter_link);

        $url_logo = DB::table('images')
        ->select('images.image')
        ->rightJoin('settings', 'images.id', 'settings.logo')
        ->groupBy('images.id')
        ->first();

        view()->share('url_logo', $url_logo);

        $url_favicon = DB::table('images')
        ->select('images.image')
        ->rightJoin('settings', 'images.id', 'settings.favicon')
        ->groupBy('images.id')
        ->first();

        view()->share('url_favicon', $url_favicon);

        $url_banner = DB::table('banners')
        ->select('banners.banner','banners.link')
        ->rightJoin('settings', 'banners.id', 'settings.banner')
        ->groupBy('banners.id')
        ->first();

        view()->share('url_banner', $url_banner);
    }
}
