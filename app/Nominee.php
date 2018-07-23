<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nominee extends Model
{
    protected $fillable = [
        'nid', 'name', 'father_name', 'mother_name', 'address', 'dob', 'relation', 'profession', 'mobile_no', 'member_id'
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
