<?php

namespace App\Service\MyService\Facade;

use Illuminate\Support\Facades\Facade;

class ServiceHistoryFacade extends Facade
{
protected static function getFacadeAccessor()
{
    return 'servHistory'; //вернуть ключ под которым мы регистрировались
}
}
