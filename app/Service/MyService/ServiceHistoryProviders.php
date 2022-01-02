<?php

namespace App\Service\MyService;

use Carbon\Laravel\ServiceProvider;

class ServiceHistoryProviders extends ServiceProvider
{
    public function register()
    {

        $this->app->singleton('servHistory', function () {  //через функцию ложит в контейнер экземпляр
            $filesystem = $this->app->get(\Illuminate\Filesystem\Filesystem::class);
            return new ServiceHistory($filesystem);                            //регистрирует сервис

        });

        /*указать свой провайдер в папке сonfig  app.php
       App\Service\MyService\ServiceHistoryProviders::class, */
    }
}
