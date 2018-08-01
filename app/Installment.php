<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Installment extends Model
{
    //
    //protected $fillable = ['member_id','amount','late_fee','installment_date'];
    protected $guarded= ['id'];
    public function member() {
        return $this->belongsTo(Member::class);
    }
}
