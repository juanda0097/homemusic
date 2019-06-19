<?php

namespace App\Http\Controllers;

use App\Models\Homemusic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomemusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hmusic=Homemusic::paginate(10);
        return view('homemusic.index',['hmusic'=>$hmusic]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('homemusic.create');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Homemusic::create($request->all());
        return redirect()->route('Homemusic.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Homemusic  $homemusic
     * @return \Illuminate\Http\Response
     */
    public function show(Homemusic $homemusic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homemusic  $homemusic
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $hmusic=HomeMusic::findOrFail($id);
        return view ('Homemusic.edit', ['hmusic'=>$hmusic]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Homemusic  $homemusic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $validatedData = $request->validate([
            'name'=>'required|max:255'
        ]);
 
        Homemusic::whereId($id)->update($validatedData);

        return redirect('/Homemusic')->with('success', 'La casa musical ha sido actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Homemusic  $homemusic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Homemusic::find($id)->delete();
        return redirect()->route('Homemusic.index');
    }
    public function mostrar_all_pdf()
    {
       $hmusicpdf=Homemusic::all();
       $pdf=\App::make('dompdf.wrapper');
       $pdf=\PDF::loadView('pdf.homemusicpdf',['hmusicpdf'=>$hmusicpdf]);
       return $pdf->stream('hmusicpdf');
    }
}
 