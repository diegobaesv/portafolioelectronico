<?php

namespace App\Http\Controllers;
use App\Diligencia;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function view($id)
    {
    	$diligencia = Diligencia::find($id);
    	dd($diligencia);
    }


}
