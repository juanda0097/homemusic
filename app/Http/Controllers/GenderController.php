<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gender=Gender::paginate(10);
        return view('gender.index',['gender'=>$gender]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gender.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gender::create($request->all());
        return redirect()->route('Gender.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function show(Gender $gender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gender=Gender::findOrFail($id);
        return view ('gender.edit', ['gender'=>$gender]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name'=>'required|max:255'
        ]);

        Gender::whereId($id)->update($validatedData);

        return redirect('/Gender')->with('success', 'Este genero ha sido actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gender::find($id)->delete();
        return redirect()->route('Gender.index');
    }
    public function mostrar_all_pdf()
    {
       $genderpdf=Gender::all();
       $pdf=\App::make('dompdf.wrapper');
       $pdf=\PDF::loadView('pdf.genderpdf',['genderpdf'=>$genderpdf]);
       return $pdf->stream('genderpdf');
    }
}
