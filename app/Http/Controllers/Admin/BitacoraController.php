<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bitacora;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BitacoraController extends Controller
{
   public function index()
   {
    $bitacoras = Bitacora::all();  
    return view('admin.bitacora.index',compact('bitacoras'));
   }
}
