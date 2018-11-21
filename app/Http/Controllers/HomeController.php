<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Affiliater;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->middleware('auth');
        parent::__construct();
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function fx()
    {
        return $this->viewer('fx');
    }

    public function delivary()
    {
        return $this->viewer('delivary');
    }

    public function userSetAccount(Request $request){
        \Auth::user()->userSetter('account',$request->account);
        return back();
    }

    public function index(){
        return $this->viewer('home');
    }
    public function news(){
        return $this->viewer('news');
    }
    public function tiger(){
        return $this->viewer('tiger');
    }
    public function tigerOpenAccount(){
        $user = Auth::user();
        $systemid = 1;
        $user->systems()->sync([$systemid], false);
        return $this->viewer('openaccount');
    }
    public function elephant(){
        // return $this->viewer('elephant');
        return $this->viewer('comingsoon');
    }
    public function elephantOpenAccount(){
        $user = Auth::user();
        $systemid = 2;
        $user->systems()->sync([$systemid], false);
        return $this->viewer('openaccount');
    }
    public function turtle(){
        return $this->viewer('turtle');
    }
    public function turtleOpenAccount(){
        $user = Auth::user();
        $systemid = 3;
        $user->systems()->sync([$systemid], false);
        return $this->viewer('openaccount');
    }
    public function shark(){
        return $this->viewer('shark');
    }
    public function sharkOpenAccount(){
        $user = Auth::user();
        $systemid = 4;
        $user->systems()->sync([$systemid], false);
        return $this->viewer('openaccount');
    }
    public function cobra(){
        // return $this->viewer('cobra');
         return $this->viewer('comingsoon');
    }
    public function cobraOpenAccount(){
        $user = Auth::user();
        $systemid = 5;
        $user->systems()->sync([$systemid], false);
        return $this->viewer('openaccount');
    }
    public function eagle(){
        // return $this->viewer('eagle');
         return $this->viewer('comingsoon');
    }
    public function eagleOpenAccount(){
        $user = Auth::user();
        $systemid = 6;
        $user->systems()->sync([$systemid], false);
        return $this->viewer('openaccount');
    }

}
