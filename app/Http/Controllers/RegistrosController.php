<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registro;
use DB;

class RegistrosController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
       // $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$registros = Registro::orderBy('created_at','desc')->take(2)->get();
        $registros = Registro::orderBy('created_at','desc')->Paginate(5);
        return view('registros.index')->with('registros',$registros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'apellido' => 'required',
            'fecha_nac' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'domicilio' => 'required',
            'solicitud' => 'required'          
        ]);
        $registro = new Registro;
        $registro->nombre = $request->input('nombre');
        $registro->apellido = $request->input('apellido');
        $registro->fecha_nac = $request->input('fecha_nac');
        $registro->email = $request->input('email');
        $registro->telefono = $request->input('telefono');
        $registro->domicilio = $request->input('domicilio');
        $registro->solicitud = $request->input('solicitud');
        $registro->user_id = auth()->user()->id;
        $registro->save();

      //  $ahijado = ahijado::find([3, 4]);
      //  $registro->ahijados()->attach($ahijado);

        return redirect('/registros')->with('success','Registro Creado');

      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registro = Registro::find($id);
        return view('registros.show')->with('registro',$registro);        
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registro = Registro::find($id);
            
       /* if(auth()->user()->id !== $registro->userd_id){
            return redirect('/registros')->with('error', 'Página No Autorizada');
        }*/

        return view('registros.edit')->with('registro',$registro);

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
        $this->validate($request, [
            'nombre' => 'required',
            'apellido' => 'required',
            'fecha_nac' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'domicilio' => 'required',
            'solicitud' => 'required'          
        ]);
        
        $registro = Registro::find($id);
        $registro->nombre = $request->input('nombre');
        $registro->apellido = $request->input('apellido');
        $registro->fecha_nac = $request->input('fecha_nac');
        $registro->email = $request->input('email');
        $registro->telefono = $request->input('telefono');
        $registro->domicilio = $request->input('domicilio');
        $registro->solicitud = $request->input('solicitud');
        $registro->save();

      // $ahijado = ahijado::find([3, 4]);
       // $registro->ahijados()->attach($ahijado);

        return redirect('/registros')->with('success', 'Registro Actualizado');

      }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registro = Registro::find($id);

      /*  if(auth()->user()->id !== $registro->userd_id){
            return redirect('/registros')->with('error', 'Página No Autorizada');
        }*/


        $registro->delete();
        return redirect('/registros')->with('success','Solicitud Eliminada'); 
    }
}
