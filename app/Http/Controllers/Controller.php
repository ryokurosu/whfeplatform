<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Exception;

class Controller extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function __construct()
	{
		$this->middleware(function ($request, $next) {
			if($request->lang){
				try{
					Session::put('lang',$request->lang);
				}catch(\Exception $e){
					Session::put('lang','en');
				}
			}
			return $next($request);
		});

		if(Session::has('lang')){
			// had session
		}else{
			Session::put('lang','en');
		}
	}
	public function viewer($view,$content = []){
		$view = Session::get('lang','en') . '.' . $view;
		return view($view,$content);
	}
}
