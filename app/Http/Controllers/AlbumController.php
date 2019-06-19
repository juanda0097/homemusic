<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use App\Models\HomeMusic;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halbum=Album::paginate(10);
        return view('album.index',['halbum'=>$halbum]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('album.create');
        $hacreate= HomeMusic::all();
        return view('album.create', compact('hacreate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Album::create($request->all());
        return redirect()->route('Album.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $halbum=Album::findOrFail($id);
        
        return view ('album.edit', ['halbum'=>$halbum]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'date'=>'required|max:255'
        ]);

        Album::whereId($id)->update($validatedData);

        return redirect('/Album')->with('success', 'El album se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Album::find($id)->delete();
        return redirect()->route('Album.index');
    }
    public function mostrar_all_pdf()
    {
       $albumpdf=Album::all();
       $pdf=\App::make('dompdf.wrapper');
       $pdf=\PDF::loadView('pdf.albumpdf',['albumpdf'=>$albumpdf]);
       return $pdf->stream('albumpdf');
    }
}
