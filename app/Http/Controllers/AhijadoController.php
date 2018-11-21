<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ahijado;
use DB;

class AhijadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ahijados = ahijado::orderBy('created_at','desc')->Paginate(5);
        return view('ahijados.index')->with('ahijados',$ahijados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ahijados.create');
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
            'nombre_ni' => 'required',
            'apellido_ni' => 'required',
            'fecha__nac_ni' => 'required',
            'edad_ni' => 'required',
            'domicilio_ni' => 'required'          
        ]);
        $ahijado = new ahijado;
        $ahijado->nombre_ni = $request->input('nombre_ni');
        $ahijado->apellido_ni = $request->input('apellido_ni');
        $ahijado->fecha__nac_ni = $request->input('fecha__nac_ni');
        $ahijado->edad_ni = $request->input('edad_ni');
        $ahijado->domicilio_ni = $request->input('domicilio_ni');
     //   $ahijado->user_id = auth()->user()->id;
        $ahijado->save();

      //  $ahijado = ahijado::find([3, 4]);
      //  $ahijado->ahijados()->attach($ahijado);

        return redirect('/ahijados')->with('success','Ahijado Creado');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $ahijado = ahijado::find($id);
        return view('ahijados.show')->with('ahijado',$ahijado);        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $ahijado = ahijado::find($id);
            
       /* if(auth()->user()->id !== $registro->userd_id){
            return redirect('/registros')->with('error', 'Página No Autorizada');
        }*/

        return view('ahijados.edit')->with('ahijado',$ahijado);
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
            'nombre_ni' => 'required',
            'apellido_ni' => 'required',
            'fecha__nac_ni' => 'required',
            'edad_ni' => 'required',
            'domicilio_ni' => 'required'          
        ]);
        $ahijado = ahijado::find($id);;
        $ahijado->nombre_ni = $request->input('nombre_ni');
        $ahijado->apellido_ni = $request->input('apellido_ni');
        $ahijado->fecha__nac_ni = $request->input('fecha__nac_ni');
        $ahijado->edad_ni = $request->input('edad_ni');
        $ahijado->domicilio_ni = $request->input('domicilio_ni');
     //   $ahijado->user_id = auth()->user()->id;
        $ahijado->save();

      //  $ahijado = ahijado::find([3, 4]);
      //  $ahijado->ahijados()->attach($ahijado);

        return redirect('/ahijados')->with('success','Perfil Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ahijado = ahijado::find($id);

      /*  if(auth()->user()->id !== $registro->userd_id){
            return redirect('/registros')->with('error', 'Página No Autorizada');
        }*/


        $ahijado->delete();
        return redirect('/ahijados')->with('success','Perfil Eliminada'); 
    }
}
