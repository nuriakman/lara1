<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Yazar;

class YazarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Yazarlar = Yazar::all();
        return view('yazarlar.yazarIndex', compact(['Yazarlar']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('yazarlar.yazarCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Yazar = new Yazar;
        $Yazar->yazarAdi    = $request->yazarAdi;
        $Yazar->yazarEposta = $request->yazarEposta;
        $Sonuc = $Yazar->save();
        dd("Yazar Kayıt eklendi");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Yazar = Yazar::findOrFail($id);
        return view('yazarlar.yazarShow', compact(['Yazar']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Yazar = Yazar::findOrFail($id);
        return view('yazarlar.yazarEdit', compact(['Yazar']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->silonay == "SİL") {
            $this->destroy($id);
        }

        $Yazar = Yazar::findOrFail($id);
        $Yazar->yazarAdi    = $request->yazarAdi;
        $Yazar->yazarEposta = $request->yazarEposta;
        $Sonuc = $Yazar->save();
        dd("Yazar Kayıt güncellendi");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Yazar = Yazar::findOrFail($id);
        $Yazar->delete();
        dd("Kayıt silindi");
    }
}
