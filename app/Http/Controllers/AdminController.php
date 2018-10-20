<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Affiliater;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('auth');
      $this->middleware(function ($request, $next) {
        if(Auth::user()->auth > 0){
          return $this->viewer('fx');
        }
        return $next($request);
      });
      parent::__construct();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::with('affiliater')->get();
      return $this->viewer('admin',['users' => $users]);
    }
    public function usersystem()
    {
      $users = User::with(['systems','affiliater'])->get();
      return $this->viewer('usersystem',['users' => $users]);
    }
    public function submit(Request $request)
    {
      $id = Auth::id();
      $user = User::where('id',$id)->first();
      $userid = $request->userid;
      $auth = $request->userauth;

      $update = User::where('id',$userid)->first();
      $update->auth = $auth;
      $update->save();
      return $this->index();
    }

    public function userSetKeyValue(Request $request){
      $user = User::findOrFail($request->user_id);
      return $user->userSetter($request->key,$request->value);
    }

    public function getUserCsv(){
      $users = User::query()->get(['id','name', 'email','account','zipcode','address','tel','birthday'])->toArray();
      $csvHeader = ['ID', '名前','アドレス','口座番号','郵便番号','住所','電話番号','生年月日'];
      array_unshift($users, $csvHeader);   
      $stream = fopen('php://temp', 'r+b');
      foreach ($users as $user) {
        fputcsv($stream, $user);
      }
      rewind($stream);
      $csv = str_replace(PHP_EOL, "\r\n", stream_get_contents($stream));
      $csv = mb_convert_encoding($csv, 'SJIS-win', 'UTF-8');
      $headers = array(
        'Content-Type' => 'text/csv',
        'Content-Disposition' => 'attachment; filename="users.csv"',
      );
      return \Response::make($csv, 200, $headers);
    }

    public function getUserAllCsv(){
      $users = User::where('id','!=','0')->get(['id','name', 'email', 'password','fx','auth','delivary','account','affiliater_id','gender','address','tel','birthday','zipcode'])->toArray();
      $output = [];
      foreach ($users as $user) {
        if(isset($user['account']) && \File::exists(storage_path() . "/app/downloads/" . $user['account'] ."_Tiger_v1.0.ex4")){
          continue;
        }
        array_push($output,$user);
      }
      $csvHeader = ['ID','name', 'email', 'password','fx','auth','delivary','account','affiliater_id','gender','address','tel','birthday','zipcode'];
      array_unshift($output, $csvHeader);   
      $stream = fopen('php://temp', 'r+b');
      foreach ($output as $user) {
        if(isset($user['account']) && \File::exists(storage_path() . "/app/downloads/" . $user['account'] ."_Tiger_v1.0.ex4")){
          continue;
        }
        fputcsv($stream, $user);
      }
      rewind($stream);
      $csv = str_replace(PHP_EOL, "\r\n", stream_get_contents($stream));
      $csv = mb_convert_encoding($csv, 'SJIS-win', 'UTF-8');
      $headers = array(
        'Content-Type' => 'text/csv',
        'Content-Disposition' => 'attachment; filename="users.csv"',
      );
      return \Response::make($csv, 200, $headers);
    }

    public function getPrependUserCsv(){
      $users = User::where('account','!=','')->get(['id','name', 'email','account','zipcode','address','tel','birthday'])->toArray();
      $output = [];
      foreach ($users as $user) {
        if(isset($user['account']) && \File::exists(storage_path() . "/app/downloads/" . $user['account'] ."_Tiger_v1.0.ex4")){
          continue;
        }
        array_push($output,$user);
      }
      $csvHeader = ['ID', '名前','アドレス','口座番号','郵便番号','住所','電話番号','生年月日'];
      array_unshift($output, $csvHeader);   
      $stream = fopen('php://temp', 'r+b');
      foreach ($output as $user) {
        if(isset($user['account']) && \File::exists(storage_path() . "/app/downloads/" . $user['account'] ."_Tiger_v1.0.ex4")){
          continue;
        }
        fputcsv($stream, $user);
      }
      rewind($stream);
      $csv = str_replace(PHP_EOL, "\r\n", stream_get_contents($stream));
      $csv = mb_convert_encoding($csv, 'SJIS-win', 'UTF-8');
      $headers = array(
        'Content-Type' => 'text/csv',
        'Content-Disposition' => 'attachment; filename="users.csv"',
      );
      return \Response::make($csv, 200, $headers);
    }

    public function useredit($id){
      $user = User::findOrFail($id);
      return $this->viewer('useredit',[
        'user' => $user
      ]);
    }
    public function userpost($id,Request $request){
      if(!is_null($request->tel)){
        if(!$this->is_valid_phone_number($request->tel)){
          $request->session()->put('status', "エラーです。");
          $request->session()->put('tel', "電話番号の形式が違います。");
        }else{
          $request->session()->forget('status');
          $request->session()->forget('tel');
        }
      }


      if(!is_null($request->zipcode)){
        if(!$this->is_valid_zip_number($request->zipcode)){
          $request->session()->put('status', "エラーです。");
          $request->session()->put('zipcode', "郵便番号の形式が違います。");
        }else{
          $request->session()->forget('status');
          $request->session()->forget('zipcode');
        }
      }

      $user = User::findOrFail($id)->fill($request->all())->save();
      return back();
    }
    public function userAccountDefault($id){
      User::findOrFail($id)->fill(['account' => null])->save();
      return back();
    }
    public function upload(){
      return $this->viewer('upload');
    }

    public function affiliater(){
      return $this->viewer('affiliater',[
        'affiliaters' => Affiliater::all()
      ]);
    }

    public function affiliaterAdd(){
      return $this->viewer('affiliater_add');
    }

    public function affiliaterPost(Request $request){
      Affiliater::create(['name' => $request->name,'code' => $this->makeRandStr(8)])->save();
      return redirect()->route('affiliater');
    }

    public function postUpload(Request $request)
    {
      $file = $request->file('file');
      $filename = $file->getClientOriginalName();
      $file->move(storage_path() . '/app/downloads', $filename);
    }
    public function filelist(){
      return $this->viewer('filelist',['files' => $files = \File::files(storage_path() . "/app/downloads/")]);
    }
    public function fileDelete($filename){
      \File::delete(storage_path() . "/app/downloads/" . $filename);
      return back();
    }
    public function e(){
     abort(403, '権限がありません');
   }

   function makeRandStr($length) {
    $str = array_merge(range('a', 'z'), range('0', '9'), range('A', 'Z'));
    $r_str = null;
    for ($i = 0; $i < $length; $i++) {
      $r_str .= $str[rand(0, count($str) - 1)];
    }
    return $r_str;
  }
  function is_valid_phone_number($number)
  {
    return is_string($number) && preg_match('/\A\d{2,4}+-\d{2,4}+-\d{4}\z/', $number);
  }
  function is_valid_zip_number($number)
  {
    return is_string($number) && preg_match('/^\d{3}[-]\d{4}$/', $number);
  }

}
