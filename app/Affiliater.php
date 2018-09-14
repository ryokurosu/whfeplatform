<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Affiliater extends Model
{
    protected $fillable = ['id','code','name'];

    public function registerPath(){
    	return env('APP_URL').'/register?ref='.$this->code;
    }
}