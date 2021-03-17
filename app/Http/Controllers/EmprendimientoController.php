<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Emprendimiento;
use App\Models\Tipoempresa;
use Illuminate\Http\Request;
use App\Models\Localidad;
use League\CommonMark\Inline\Element\Image;



class EmprendimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 'Vista index()';
        $emprendimientos = Emprendimiento::all();
        return view('emprendimiento.index')->with('emprendimientos',$emprendimientos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $localidads = Localidad::all();
        $tipoempresas = Tipoempresa::all();
        return view('emprendimiento.create', compact('tipoempresas'), compact('localidads'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $emprendimientos = new Emprendimiento();
        $emprendimientos->nombre = $request->get('nombre');
        $emprendimientos->descripcion = $request->get('descripcion');
        $emprendimientos->localidad_id = $request->get('localidad_id');
        $emprendimientos->direccion = $request->get('direccion');
        $emprendimientos->sitio_web = $request->get('sitio_web');
        $emprendimientos->instagram = $request->get('instagram');
        $emprendimientos->facebook = $request->get('facebook');
        $emprendimientos->nro_telefono = $request->get('nro_telefono');
        $emprendimientos->logo= $request->get('logo');

        $emprendimientos->usuario_id = Auth::id();
        $emprendimientos->tipoempresa_id = $request->get('tipoempresa_id');
        $emprendimientos->save();
        

        $Mensaje=["required"=>'El campo :attribute es requerido'];



        return redirect('/emprendimientos')->with('Mensaje','Emprendimiento agregado con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emprendimiento = Emprendimiento::find($id);
        return view('emprendimiento.show',compact('emprendimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $localidads = Localidad::all();
        $tipoempresas = Tipoempresa::all();
        $emprendimiento = Emprendimiento::find($id);
         return view('emprendimiento.edit', compact('tipoempresas'), compact('localidads'))->with('emprendimiento',$emprendimiento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $emprendimiento= Emprendimiento::find($id);
        $emprendimiento->nombre = $request->get('nombre');
        $emprendimiento->descripcion = $request->get('descripcion');
        $emprendimiento->localidad_id = $request->get('localidad_id');
        $emprendimiento->direccion = $request->get('direccion');
        $emprendimiento->sitio_web = $request->get('sitio_web');
        $emprendimiento->instagram = $request->get('instagram');
        $emprendimiento->facebook = $request->get('facebook');
        $emprendimiento->nro_telefono = $request->get('nro_telefono');
        $emprendimiento->logo= $request->get('logo');
            //    $emprendimiento->usuario_id = auth()->user()->id;
        $emprendimiento->tipoempresa_id = $request->get('tipoempresa_id');
        $emprendimiento->save();

        return redirect('/emprendimientos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emprendimiento = Emprendimiento::find($id);
        $emprendimiento->delete();

        return redirect('/emprendimientos');
    }
}
