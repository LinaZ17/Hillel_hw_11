<?php

namespace App\Providers;

use App\Service\MyService\ServiceHistory;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //1 вариант (не очень)
//       $servHistory = new ServiceHistory();
        //$this->app->instance('servHistory', $servHistory); //задаем ключ
        //положили в app свой сервис


//        $this->app->bind('servHistory', function (){  //через функцию не ложит в контейнер а делает привязку
//            return new ServiceHistory();
//        });


//        $this->app->singleton('servHistory', function () {  //через функцию ложит в контейнер экземпляр
//            return new ServiceHistory();                            //регистрирует сервис
//
//        });


    }


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
