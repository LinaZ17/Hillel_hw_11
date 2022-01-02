<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
// belongsToMany многие ко многим
    public function tasks()
    {
        return $this->belongsToMany(Task::class);

    }
}
