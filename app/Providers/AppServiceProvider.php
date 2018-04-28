<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Illuminate\Support\Facades\Schema::defaultStringLength(191);

        //View::share('key', 'value');    // 所有视图中共享数据

        // 指定视图中注入数据
        //View::composer('frontend.layouts.app', 'App\Http\ViewComposers\MyViewComposer');
        //View::composer(['navigation', 'footer'], 'App\Http\ViewComposers\MyViewComposer');
        View::composers([
            'App\Http\ViewComposers\MyViewComposer' => ['frontend.layouts.app'],
            //'App\Http\ViewComposers\AdminComposer' => ['admin.index', 'admin.profile'],
            //'App\Http\ViewComposers\UserComposer' => 'user',
            //'App\Http\ViewComposers\GoodsComposer' => 'goods'
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
