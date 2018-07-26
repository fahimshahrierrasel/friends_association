<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $fillable = [
        'nid', 'name', 'father_name', 'mother_name', 'hus_wife_name', 'present_address', 'permanent_address', 'dob',
        'education', 'nationality','profession', 'gender', 'blood_group', 'mobile_no', 'email', 'image', 'status', 'user_id'
    ];

    public function nominee()
    {
        return $this->hasOne(Nominee::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
