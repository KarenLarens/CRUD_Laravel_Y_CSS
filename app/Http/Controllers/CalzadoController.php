<?php

namespace App\Http\Controllers;

use App\Models\Calzado;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
class CalzadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['calzado']=Calzado::paginate(5);
        return view ('calzado.index',$datos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view ('calzado.create');
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
        //$datosCalzado = request()->all();//
        
        $datosCalzados = request()->except('_token');
        if($request->hasfile('Foto'))
        {
            $datosCalzados['Foto']=$request->file('Foto')->store('uploads','public');
        }
        Calzado::insert($datosCalzados);
        
        return redirect('calzado')->with('mensaje','Calzado agregado con exito');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Calzado  $calzado
     * @return \Illuminate\Http\Response
     */
    public function show(Calzado $calzado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Calzado  $calzado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $calzado= Calzado::findOrFail($id);
        return view ('calzado.edit',compact ('calzado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Calzado  $calzado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $datosCalzados = request()->except(['_token','_method']);

        if($request->hasfile('Foto'))
        {
            $calzado= Accesorio::findOrFail($id);

            Storage::delete('public/'.$calzado->Foto);
            
            $datosCalzados['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Calzado::where('id','=',$id)->update($datosCalzados);
        
        $calzado= Calzado::findOrFail($id);
        return view ('calzado.edit',compact ('calzado'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calzado  $calzado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
        $calzado= Calzado::findOrFail($id);

        if(Storage::delete('public/'.$calzado->Foto))
        {
            Calzado::destroy($id);
        }
        
        return redirect('calzado')->with ('mensaje','Calzado eliminado');
    }
}
