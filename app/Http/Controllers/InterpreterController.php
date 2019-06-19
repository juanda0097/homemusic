<?php

namespace App\Http\Controllers;

use App\Models\Interpreter;
use Illuminate\Http\Request;

class InterpreterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interpreter=Interpreter::paginate(10);
        return view('interpreter.index',['interpreter'=>$interpreter]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('interpreter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Interpreter::create($request->all());
        return redirect()->route('Interpreter.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Interpreter  $interpreter
     * @return \Illuminate\Http\Response
     */
    public function show(Interpreter $interpreter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Interpreter  $interpreter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $interpreter=Interpreter::findOrFail($id);
        return view ('interpreter.edit', ['interpreter'=>$interpreter]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Interpreter  $interpreter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'nationality'=>'required|max:255'
        ]);

        Interpreter::whereId($id)->update($validatedData);

        return redirect('/Interpreter')->with('success', 'La informacion del interprete ha sido actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Interpreter  $interpreter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Interpreter::find($id)->delete();
        return redirect()->route('Interpreter.index');
    }
    public function mostrar_all_pdf()
    {
       $interpreterpdf=Interpreter::all();
       $pdf=\App::make('dompdf.wrapper');
       $pdf=\PDF::loadView('pdf.interpreterpdf',['interpreterpdf'=>$interpreterpdf]);
       return $pdf->stream('canciinterpreterpdfones');
    }
}
