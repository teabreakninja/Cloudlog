<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Logbook;
use Auth;

class LogbooksController extends Controller
{

  public function store(Request $request)
  {
    $logbook = new Logbook;

    $logbook->callsign = "2e0sql";

    $logbook->save();

    $logbook->users()->save(Auth::user());
  }

}
