<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use App\Views\Composers\MenuComposer;

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
        // $menus = [
        //     [
        //         'name' => 'customers.index',
        //         'text' => 'Danh sach khach hang'
        //     ],
        //     [
        //         'name' => 'customers.create',
        //         'text' => 'Them moi khach hang'
        //     ]
        // ];

        // View::share('menus',$menus);
        
        /*
        View::composer(
            ['customers.index', 'customers.show'],//chi chia se cho 2 view trong mang
            MenuComposer::class
        );
        */

        View::composer(
            '*',//tat ca cac view
            MenuComposer::class
        );
    }
}
