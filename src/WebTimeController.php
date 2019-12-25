<?php

namespace Andiwijaya\WebTime;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class WebTimeController extends Controller{

  public function index($timezone = null){

    $time = ($timezone)
      ? Carbon::now(str_replace('-', '/', $timezone))
      : Carbon::now();

    return view('web-time::time', [ 'time'=>$time ]);

  }

}