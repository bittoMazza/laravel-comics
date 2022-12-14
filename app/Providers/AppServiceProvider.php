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
        $dcComicsList=[
            [
                'text' => 'Characters',
                'url' => '#',
            ],
            [
                'text' => 'Comics',
                'url' => '#',
            ],
            [
                'text' => 'Movies',
                'url' => '#',
            ],
            [
                'text' => 'TV',
                'url' => '#',
            ],
            [
                'text' => 'Games',
                'url' => '#',
            ],
            [
                'text' => 'Videos',
                'url' => '#',
            ],
            [
                'text' => 'News',
                'url' => '#',
            ]
        ];

        $shop_list = [
            [
                'text' => 'Shop Dc',
                'url' => '#',
            ],
            [
                'text' => 'Cose a caso',
                'url' => '#',
            ]
        ];
             
        $dc_info = [
            [
                'text' => 'News',
                'url' => '#',
            ],
            [
                'text' => 'News',
                'url' => '#',
            ],
            [
                'text' => 'News',
                'url' => '#',
            ],
            [
                'text' => 'News',
                'url' => '#',
            ],
            [
                'text' => 'News',
                'url' => '#',
            ],
            [
                'text' => 'News',
                'url' => '#',
            ],
            [
                'text' => 'News',
                'url' => '#',
            ],
            [
                'text' => 'News',
                'url' => '#',
            ],
            [
                'text' => 'News',
                'url' => '#',
            ],
            [
                'text' => 'News',
                'url' => '#',
            ],
            [
                'text' => 'News',
                'url' => '#',
            ],              
        ];

        $external_site = [
            [
                'text' => 'News',
                'url' => '#',
            ],
            [
                'text' => 'News',
                'url' => '#',
            ],
            [
                'text' => 'News',
                'url' => '#',
            ],
            [
                'text' => 'News',
                'url' => '#',
            ],
            [
                'text' => 'News',
                'url' => '#',
            ]
        ];

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
        View::share('dc_comics_link',$dcComicsList);
        View::share('dc_info',$dc_info);
    }
}
