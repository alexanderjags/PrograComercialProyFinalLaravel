<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Bienvenido...';
        //return view('pages.index', compact('title'));
          return view('pages.index')->with('title',$title);
    }

    public function about()
    {
        $title = 'Acerca de nosotros';
        return view('pages.about')->with('title',$title);
    }

    
    public function services()
    {
        $data = array(
            'title'=> 'Nuestros Servicios',
            'services' => ['Adopción', 'Apadrinaciones', 'Escolaridad']
        );
        return view('pages.services')->with($data);
    }
}
