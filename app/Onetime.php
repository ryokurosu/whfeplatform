<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Onetime extends Model
{
    protected $fillable = ['id','email','color','key'];
}