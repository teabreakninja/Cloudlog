<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class QsoController extends Controller
{
    /**
     * Show the form the create a new blog post.
     *
     * @return Response
     */
    public function create()
    {
        return view('qso/qso');
    }

    /**
     * Store a new blog post.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'date'      => 'required',
        'time'      => 'required',
        'mode'      => 'required',
        'band'      => 'required',
        'callsign'  => 'required',
        'rst_sent'  => 'required',
        'rst_recv'  => 'required',
        'locator'   => 'alpha_num|min:6'
      ]);

      return view('qso/qso');
    }
}
