<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubAddress extends Model
{
    protected $table = 'subscription_address';
    protected $fillable = [
        'subscription_id',
        'address',
        'country',
        'province',
        'city',
        'postal'
    ];

    public function subscriptor(){
        return $this->belongsTo('App\Models\Subscription','subscription_id','id');
    }
}
