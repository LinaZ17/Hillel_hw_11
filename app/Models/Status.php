<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
//один ко многим
    public function tasks()
    {
        return $this->hasMany(Task::class);

    }


}
