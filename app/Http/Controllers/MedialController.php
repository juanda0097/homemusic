<?php

namespace App\Http\Controllers;

use App\Models\Medial;
use Illuminate\Http\Request;

class MedialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medial=Medial::paginate(10);
        return view('medial.index',['medial'=>$medial]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Medial::create($request->all());
        return redirect()->route('Medial.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medial  $medial
     * @return \Illuminate\Http\Response
     */
    public function show(Medial $medial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medial  $medial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medial=Medial::findOrFail($id);
        return view ('medial.edit', ['medial'=>$medial]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medial  $medial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name'=>'required|max:255'
        ]);
        Medial::whereId($id)->update($validatedData);
        return redirect('/Medial')->with('success', 'el archivo ha sido actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medial  $medial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Medial::find($id)->delete();
        return redirect()->route('Medial.index');
    }
}
