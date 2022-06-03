<?php

namespace App\Http\Controllers;

use App\Models\Accesorio;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class AccesorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['accesorios']=Accesorio::paginate(5);
        return view ('accesorios.index',$datos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('accesorios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        //$datosAccesorios = request()->all();//

        $datosAccesorios = request()->except('_token');

        if($request->hasfile('Foto'))
        {
            $datosAccesorios['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Accesorio::insert($datosAccesorios);

        return redirect('accesorios')->with('mensaje','Accesorio agregado con exito');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Accesorio  $accesorio
     * @return \Illuminate\Http\Response
     */
    public function show(Accesorio $accesorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accesorio  $accesorio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $accesorio= Accesorio::findOrFail($id);
        return view ('accesorios.edit', compact('accesorios') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accesorio  $accesorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $datosAccesorios = request()->except(['_token','_method']);

        if($request->hasfile('Foto'))
        {
            $accesorio= Accesorio::findOrFail($id);

            Storage::delete('public/'.$accesorio->Foto);
            
            $datosAccesorios['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Accesorio::where('id','=',$id)->update($datosAccesorios);

        $accesorio= Accesorio::findOrFail($id);
        return view ('accesorios.edit', compact('accesorios')) ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accesorio  $accesorio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $accesorio= Accesorio::findOrFail($id);

        if(Storage::delete('public/'.$accesorio->Foto))
        {
            Accesorio::destroy($id);
        }
        
        return redirect('accesorios')->with ('mensaje','Accesorio eliminado');
    }
}
