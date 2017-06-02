<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//     	$usuarios = Usuario::orderBy ( 'id', 'DESC' )->paginate ();
    	$usuarios = Usuario::orderBy ( 'id', 'DESC' )->paginate ();

//     	return view('admin', compact ( 'usuarios' ));
    	return view('usuarios.index', compact ( 'usuarios' ));
    }
}
