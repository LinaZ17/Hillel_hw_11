<?php

namespace App\Http\Controllers;

//use Faker\Factory;
use App\Service\MyService\ServiceHistory;
use Illuminate\Contracts\Cache\Factory;
use Illuminate\Database\DatabaseManager;
use Illuminate\Support\Facades\App;
use PHPUnit\Util\Filesystem;

class ServiceControllers extends Controller
{

    public function serviceSave(ServiceHistory $servHistory)
    {
        $serv = App::get('cache');
        $result = \App\Service\MyService\Facade\ServiceHistoryFacade::divide(10, 3);
        return $result;
    }



//    public function serviceSave(ServiceHistory $servHistory)
//    {
//        $servHistory = \app('servHistory');
//        return $servHistory->divide( 10, 3);
//    }
//
//    public function methodSave(Factory $cache, DatabaseManager $db, Filesystem $filesystem) // подход депенесинжектон
//    {
////        1 метод получения контейнера
//        $container = app();
//
//        $cache = $container->get('cache');
//
//     //2 метод alias
//    $cache2 = $container->get(Factory::class);
//
////      3  через фасадф вызываем
//        $cache3 = App::get('cache');
//
//        //  4 способ получения контейнера
//        $cache4 = app('cache');
//
//$cache->put('hello', 2+2);
//        return $cache->pull('hello');
//    }




}
