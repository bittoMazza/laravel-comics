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
                'urlImg' => 'http://localhost:8080/img/buy-comics-digital-comics.png',
            ],
            [
                'text' =>'DC MERCHANDISE',
                'urlImg' =>'http://localhost:8080/img/buy-comics-merchandise.png',
            ],
            [
                'text' =>'SUBSCRIPTION',
                'urlImg' =>'http://localhost:8080/img/buy-comics-shop-locator.png',
            ],
            [
                'text' =>'COMIC SHOP LOCATOR',
                'urlImg' =>'http://localhost:8080/img/buy-comics-subscriptions.png',
            ],
            [
                'text' =>'DC POWER VISA',
                'urlImg' =>'http://localhost:8080/img/buy-dc-power-visa.svg',
            ],


        ];
        $header_links=['CHARACTERS','COMICS','MOVIES','TV','GAMES','COLLECTIBLES','VIDEOS','FANS','NEWS','SHOP'];
        View::share('header_links',$header_links);
        View::share('buy_comics',$buy_comics);
    }
}
