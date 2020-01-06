<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

use App\sehir;
use App\ilce;

class ililceController extends Controller
{
    public function index()
    {
        $Sehirler = Sehir::All();
        return view('AKMAN', compact(['Sehirler']));
    }


    public function ilcegetirAjax(Request $request)
    {
        $Ilceler = Ilce::where('sehir_id', $request->sehirID)->Get();
        return Response::json( $Ilceler );
    }


    public function save()
    {

    }
}
