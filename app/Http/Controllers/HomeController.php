<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Affiliater;
use App\System;
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
        return $this->viewer('fx',['systems' => System::all()]);
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
    public function systemdetail($name){
        /*
        if system detail or coming soon
         */
        $system = System::where('name',$name)->firstOrFail();
        return $this->viewer('system.detail',['system' => $system]);
    }
    public function systemOpenAccount($name){
        $user = Auth::user();
        $systemid = System::where('name',$name)->firstOrFail()->id;
        $user->systems()->sync([$systemid], false);
        return $this->viewer('system.open');
    }
}
