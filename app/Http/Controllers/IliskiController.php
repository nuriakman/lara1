<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ASIL;

class IliskiController extends Controller
{
    public function getASIL(Request $request) {
    	$SONUC = ASIL::findOrFail( $request->id );
    	return view('ILISKILER', compact('SONUC'));
    }

    public function getTEK(Request $request) {
    	$SONUC = ASIL::findOrFail( $request->id );
    	echo
    		$SONUC->TekDetay->telefonu  . " --- " . 
    	    $SONUC->TekDetay->adresi    . " --- " . 
    	    $SONUC->TekDetay->postakodu . "<br>";
    }


}
