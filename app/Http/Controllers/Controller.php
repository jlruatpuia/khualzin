<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use RealRashid\SweetAlert\Facades\Alert;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware(function($request, $next) {
           if(session('success_message')) {
               Alert::toast(session('success_message'), 'success');
           } elseif (session('info_message')) {
               Alert::toast(session('info_message'), 'info');
           } elseif (session('error_message')) {
               Alert::error(session('error_message'), 'error');
           }
           return $next($request);
        });
    }
}
