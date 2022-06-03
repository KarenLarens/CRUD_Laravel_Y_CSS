<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $datos['marcas']=Marca::paginate(5);
        return view ('marcas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view ('marcas.create');
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

        //$datosMarcas = request()->all();//
       
        $datosMarcas = request()->except('_token');
        if($request->hasfile('Foto'))
        {
            $datosMarcas['Foto']=$request->file('Foto')->store('uploads','public');
        }
        Marca::insert($datosMarcas);

        return redirect('marcas')->with('mensaje','Marca agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function show(Marca $marca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $marcas=Marca::findOrFail($id);
        return view ('marcas.edit',compact ('marcas'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $datosMarcas = request()->except(['_token','_method']);

        if($request->hasfile('Foto'))
        {
            $datosMarcas['Foto']=$request->file('Foto')->store('uploads','public');
        }
        
        Marca::where('id','=',$id)->update($datosMarcas);

        $marcas= Marca::findOrFail($id);
        return view ('marcas.edit',compact ('marcas'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $marcas= Marca::findOrFail($id);

        if(Storage::delete('public/'.$marcas->Foto))

        {
            Marca::destroy($id);
        }
        
        return redirect('marcas')->with ('mensaje','Marca eliminada');
    }
}
