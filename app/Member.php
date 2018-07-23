<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //

    public function nominee()
    {
        return $this->hasOne(Nominee::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
