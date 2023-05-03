<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Bug;
use App\Models\Subject;

use Illuminate\Support\Facades\Validator;

class BugController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bugs=Bug::where('user_id',auth()->user()->id)->get();
        //dd($bugs);

        //-----------------------------------------------
        $this->authorize('viewany',Cornellnote::class);
        //-----------------------------------------------

        return view('bugs.index', compact('bugs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $asignatura= Subject::where('ingenieria',auth()->user()->ingenieria)->get();
        //dd($asignatura);

        //-----------------------------------------------
        $this->authorize('create', Cornellnote::class);
        //-----------------------------------------------

        return view('bugs.create', compact('asignatura'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //-----------------------------------------------
        $this->authorize('create', Cornellnote::class);
        //-----------------------------------------------

        $validator = Validator::make($request->all(), [
            'descripcion' => 'required|string|max:255',
            'codigo' => 'required|string|max:100',
            'solucion' => 'required|string|max:255',
            'plataforma'=>'required|string|max:100',
            'estado' => 'required', // "integer" validacion de que sea solo numero no necesaria
            'asignatura'=>'required' // "integer" validacion de que sea solo numero no necesaria
        ]);

        if ($validator->fails()) {
            return redirect('bugs/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $bug=new Bug();
        $bug->descripcion=$request->descripcion;
        $bug->codigo=$request->codigo;
        $bug->solucion=$request->solucion;
        $bug->estado=$request->estado;
        $bug->plataforma=$request->plataforma;
        $bug->user_id=auth()->user()->id;
        $bug->subject_id=$request->asignatura;
        $bug->save();
        return redirect()->route('bugs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $detalle_bug=Bug::find($id);

        //------------------------------------
        $this->authorize('view', $detalle_bug);
        //------------------------------------

        return view('bugs.show', compact('detalle_bug'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bug=Bug::find($id);
        //de aqui se le envian los datos a la view de edith
        //dd($bug);

        //------------------------------------
        $this->authorize('update', $bug);
        //------------------------------------

        return view('bugs.edit',compact('bug'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'descripcion' => 'required|string|max:255',
            'solucion' => 'required|string|max:255',
            'estado' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect("bugs/$id/edit")
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $bug = Bug::find($id);

        //------------------------------------
        $this->authorize('update', $bug);
        //------------------------------------

        $bug->descripcion = $request->descripcion;
        $bug->solucion = $request->solucion;
        $bug->estado = $request->estado;
        $bug->user_id = auth()->user()->id;
        $bug->save();
        return redirect()->route('bugs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bug=Bug::find($id);

        //------------------------------------
        $this->authorize('delete', $bug);
        //------------------------------------

        $bug->delete();

        return redirect()->route('bugs.index');
    }
}
