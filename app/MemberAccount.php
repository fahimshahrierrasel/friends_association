<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberAccount extends Model
{
    protected $fillable = ['member_id', 'share_no', 'balance'];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
