<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return redirect()->route('fx');
    }

}
