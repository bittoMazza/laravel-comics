<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        $buy_comics=[
            [
                'text' => 'DIGITAL COMICS',
                'urlImg' => '../assets/img/buy-comics-digital-comics.png',
            ],
            [
                'text' =>'DC MERCHANDISE',
                'urlImg' =>'../assets/img/buy-comics-merchandise.png',
            ],
            [
                'text' =>'SUBSCRIPTION',
                'urlImg' =>'../assets/img/buy-comics-subscriptions.png',
            ],
            [
                'text' =>'COMIC SHOP LOCATOR',
                'urlImg' =>'../assets/img/buy-comics-shop-locator.png',
            ],
            [
                'text' =>'DC POWER VISA',
                'urlImg' =>'../assets/img/buy-comics-merchandise.png',
            ],


        ];
        $header_links=['CHARACTERS','COMICS','MOVIES','TV','GAMES','COLLECTIBLES','VIDEOS','FANS','NEWS','SHOP'];
        View::share('header_links',$header_links);
        View::share('buy_comics',$buy_comics);
    }
}
