<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Http\Requests\UsuarioRequest;

class UsuarioController extends Controller {
	//
	public function index() {
		// $usuarios = Usuario::orderBy ( 'CONS_USUARIO', 'DESC' )->paginate ();
		$usuarios = Usuario::orderBy ( 'id', 'DESC' )->paginate ();
		return view ( 'usuarios.index', compact ( 'usuarios' ) );
	}
	public function store(UsuarioRequest $request) {
		
		$usuario = new Usuario ();
		
		
		// Get all existing numbers in database
		$ids = Usuario::pluck('id');
		
		// Generate a new unique number
		do {
			$id = rand(100000000, 999999999);
			$usuario->id=$id;
			$usuario->NUM_IDENTIFICACION = $request->NUM_IDENTIFICACION;
			$usuario->TIPO_DOCUMENTO = $request->TIPO_DOCUMENTO;
			$usuario->PRIMER_NOMBRE = $request->PRIMER_NOMBRE;
			$usuario->SEGUNDO_NOMBRE = $request->SEGUNDO_NOMBRE;
			$usuario->PRIMER_APELLIDO = $request->PRIMER_APELLIDO;
			$usuario->SEGUNDO_APELLIDO = $request->SEGUNDO_APELLIDO;
			$usuario->FECHA_DE_NACIMIENTO = $request->FECHA_DE_NACIMIENTO;
			$usuario->ESTADO = $request->ESTADO;
			$usuario->SEXO = $request->SEXO;
			$usuario->GRUPO_SANGUINEO = $request->GRUPO_SANGUINEO;
			$usuario->FACTOR_RH = $request->FACTOR_RH;
			$usuario->ESTADO_CIVIL = $request->ESTADO_CIVIL;
			$usuario->VINCULO_LABORAL = $request->VINCULO_LABORAL;
			$usuario->DISCAPACIDAD = $request->DISCAPACIDAD;
			$usuario->TIPO_DISCAPACIDAD = $request->TIPO_DISCAPACIDAD;
			$usuario->CONDICION_DISCAPACIDAD = $request->CONDICION_DISCAPACIDAD;
			$usuario->ETNIA = $request->ETNIA;
			
			$usuario->save ();
			
			return redirect ()->route ( 'usuarios.index' )->with ( 'info', 'El usuario fue creado exitosamente' );
			
			
		} while (in_array($id, $ids));
		

	}
	public function update(UsuarioRequest $request, $id) {
		// $usuario = Usuario::where ( 'CONS_USUARIO', '=', $id )->first ();
		// die(__FILE__);
		$usuario = Usuario::find ( $id );
		// echo '<pre>';
		// print_r($usuario);
		// echo '<pre>';
		// die(__FILE__.' '.__LINE__);
		
		/*
		 * [CONS_USUARIO] => 29
		 * [NUM_IDENTIFICACION] => 500176732
		 * [LOGIN_ID] => 28
		 * [TIPO_DOCUMENTO] => CE
		 * [PRIMER_NOMBRE] => Amya
		 * [SEGUNDO_NOMBRE] => Juwan
		 * [PRIMER_APELLIDO] => Schamberger
		 * [SEGUNDO_APELLIDO] => Boyle
		 * [FECHA_DE_NACIMIENTO] => 1931-06-21
		 * [ESTADO] => I
		 * [SEXO] => F
		 * [GRUPO_SANGUINEO] => AB
		 * [FACTOR_RH] => -
		 * [ESTADO_CIVIL] => P
		 * [VINCULO_LABORAL] => C
		 * [DISCAPACIDAD] => 1
		 * [TIPO_DISCAPACIDAD] => F
		 * [CONDICION_DISCAPACIDAD] => T
		 * [ETNIA] => 01
		 * [created_by] => admin
		 * [deleted_at] =>
		 * [created_at] => 2017-05-18 09:23:51
		 * [updated_at] => 2017-05-18 09:23:51
		 */
		$usuario->NUM_IDENTIFICACION = $request->NUM_IDENTIFICACION;
		$usuario->TIPO_DOCUMENTO = $request->TIPO_DOCUMENTO;
		$usuario->PRIMER_NOMBRE = $request->PRIMER_NOMBRE;
		$usuario->SEGUNDO_NOMBRE = $request->SEGUNDO_NOMBRE;
		$usuario->PRIMER_APELLIDO = $request->PRIMER_APELLIDO;
		$usuario->SEGUNDO_APELLIDO = $request->SEGUNDO_APELLIDO;
		$usuario->FECHA_DE_NACIMIENTO = $request->FECHA_DE_NACIMIENTO;
		$usuario->ESTADO = $request->ESTADO;
		$usuario->SEXO = $request->SEXO;
		$usuario->GRUPO_SANGUINEO = $request->GRUPO_SANGUINEO;
		$usuario->FACTOR_RH = $request->FACTOR_RH;
		$usuario->ESTADO_CIVIL = $request->ESTADO_CIVIL;
		$usuario->VINCULO_LABORAL = $request->VINCULO_LABORAL;
		$usuario->DISCAPACIDAD = $request->DISCAPACIDAD;
		$usuario->TIPO_DISCAPACIDAD = $request->TIPO_DISCAPACIDAD;
		$usuario->CONDICION_DISCAPACIDAD = $request->CONDICION_DISCAPACIDAD;
		$usuario->ETNIA = $request->ETNIA;
		
		$usuario->save ();
		
		return redirect ()->route ( 'usuarios.index' )->with ( 'info', 'El usuario fue actualizado' );
		
		// Usuario::where ( 'CONS_USUARIO', '=', $id )->first ();
		// return 'Producto actualizado';
		// return back ()->with ( 'info', 'usuario actualizado'.$id);
	}
	public function edit($id) {
		// $usuario = Usuario::where ( 'CONS_USUARIO', '=', $id )->first ();
		$usuario = Usuario::find ( $id );
		return view ( 'usuarios.edit', compact ( 'usuario' ) );
	}
	public function create() {
		return view ( 'usuarios.create' );
	}
	public function show($id) {
		// $usuario = Usuario::where ( 'CONS_USUARIO', '=', $id )->first ();
		$usuario = Usuario::find ( $id );
		return view ( 'usuarios.show', compact ( 'usuario' ) );
	}
	public function destroy($id) {
		// $usuario = Usuario::where('CONS_USUARIO','=',$id)->first();
		$usuario = Usuario::find ( $id );
		// $usuario = Usuario::where ( 'CONS_USUARIO', '=', $id )->delete ();
		$usuario->delete ();
		return back ()->with ( 'info', 'El producto fue eliminado' );
	}
}
