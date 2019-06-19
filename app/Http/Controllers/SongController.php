<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use App\Models\Gender;
use App\Models\Interpreter;
use Illuminate\Support\Facades\DB;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $song=Song::paginate(10);
        return view('song.index',['song'=>$song]);
    }
    public function mostrar_all_pdf()
    {
       $canciones=Song::all();
       $pdf=\App::make('dompdf.wrapper');
       $pdf=\PDF::loadView('song.mostrarpdf',['canciones'=>$canciones]);
       return $pdf->stream('canciones');
    }
    public function mostrar_all_pdf1()
    {
       $canciones1= DB::table('medials')
       ->join('medial_songs', 'medials.id', '=', 'medial_songs.medial_id')
       ->join('songs', 'songs.id', '=', 'medial_songs.song_id')
       
       ->select('medials.name','songs.name as nameSong')
       ->get();
       $pdf=\App::make('dompdf.wrapper');
       $pdf=\PDF::loadView('song.mostrarpdf1',['canciones1'=>$canciones1]);
       return $pdf->stream('canciones1');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $screate= Interpreter::all();
        $screateG= Gender::all();
        return view('song.create', compact('screate','screateG'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Song::create($request->all());
        return redirect()->route('Song.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $song=Song::findOrFail($id);
        return view ('song.edit', ['song'=>$song]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            
        ]);

        Song::whereId($id)->update($validatedData);

        return redirect('/Song')->with('success', 'La cancion se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Song::find($id)->delete();
        return redirect()->route('Song.index');
    }
}
