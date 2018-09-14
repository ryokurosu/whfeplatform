<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','fx','auth','delivary','account','affiliater_id','gender','address','tel','birthday','zipcode'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userSetter($key,$value){
        $this->fill([$key => $value])->save();
        return $this;
    }

    public function isAdmin(){
        return $this->auth <= 0;
    }

    public function editPath(){
        return url('/admin/user/edit/'.$this->id);
    }
     public function accountDefaultPath(){
        return url('/admin/user/edit/'.$this->id.'/accountdefault');
    }

    public function affiliater(){
        return $this->belongsTo('App\Affiliater');
    }

}
