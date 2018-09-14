<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Onetime;
use Illuminate\Support\Facades\Auth;


class OnetimeController extends Controller
{
   public function set($color,$mail){
    $key = $this->makeRandStr(8);
    $user = User::where('email', $mail)->first();
    $id = $user->id;

    $temp = Onetime::where('email',$mail)->where('color',$color)->count();
    if($temp > 0){
       $error = User::where('email',$mail)->first();
       $error->error = 1;
       $error->save();
       return view('onetimeerror',['email' => $mail]);
   }
   $onetime = new Onetime;
   $onetime->id = $id;
   $onetime->email = $mail;
   $onetime->color = $color;
   $onetime->key = $key;
   $onetime->save();
   return view('onetimekey',['key' => $key]);
}

public function makeRandStr($length) {
    $str = array_merge(range('1', '9'));
    $r_str = null;
    for ($i = 0; $i < $length; $i++) {
        $r_str .= $str[rand(0, count($str) - 1)];
    }
    return $r_str;
}
public function delete($color,$mail,$code){
    $count = Onetime::where('key',$code)->count();
    if($count == 0){
        $error = User::where('email',$mail)->first();
        $error->error = 1;
        $error->save();
        return view('onetimeerror',['email' => $mail]);
    }
    Onetime::where('key',$code)->delete();
    return view('onetimedelete');
}
}
