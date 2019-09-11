<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscription extends Model
{
    use SoftDeletes;

    protected $table = 'subscription';
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'telephone',
        'password',
        'status',
        'token'
    ];

    protected $casts = [
        'id' => 'string',
        'created_at' => 'datetime:d-m-Y',
        'deleted_at' => 'datetime:d-m-Y'
    ];

    protected $appends = [
        'fullname'
    ];
    public function address(){
        return $this->hasMany('App/Models/SubAddress','id','subscription_id');
    }
    
    public function getFullnameAttribute(){
        return $this->firstname.' '.$this->lastname;
    }
    public function getStatusAttribute($value){
        switch($value){
            case 0:
                return 'Disable';
            break;
            case 1:
                return 'Enable';
            break;
        }
    }
    public function getSubscriptionAttribute($value){
        switch($value){
            case 0:
                return 'Enable';
            break;
            case 1:
                return 'Disable';
            break;
        }
    }
}
