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

// SQL dizinindeki il ve ilçe tablolarını veritabanına import etmeyi unutmayın !!!
// SQL dizinindeki il ve ilçe tablolarını veritabanına import etmeyi unutmayın !!!
// SQL dizinindeki il ve ilçe tablolarını veritabanına import etmeyi unutmayın !!!
    
    public function ilcegetirAjax(Request $request)
    {
        $Ilceler = Ilce::where('sehir_id', $request->sehirID)->Get();
        return Response::json( $Ilceler );
    }


    public function save()
    {

    }
}
