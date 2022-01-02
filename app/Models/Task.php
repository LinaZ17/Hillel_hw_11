<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $fillable = [
        'id',
        'creator_id',
        'title',
        'content',
        'status_id',
        'created_at',
        'updated_at'
    ];

//один ко многим обратное отношение
    public function status()
    {
        return $this->belongsTo(Status::class);

    }

    public function labels()
    {
          return $this->belongsToMany(Label::class);

    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
