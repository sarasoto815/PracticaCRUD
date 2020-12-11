<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
class crud extends Controller
{

    public function index()
    {
        $user = DB::table('poetas')
            ->orderBy('First_Name')
            ->get();

        return view('crud.showPoetas', [
            'poetas'=> $user
        ]);
    }

    public function create()
    {
        return view('crud.altaPoet');
    }

    public function store(Request $request)
    {
        $User = DB::table('poetas')
            ->insert([
                'First_Name'=> $request->input('nombre'),
                'SurName'=> $request->input('apellido'),
                'Address'=> $request->input('direccion'),
                'PostCode'=> $request->input('codigo'),
                'Telephone_Number'=> $request->input('telefono')
            ]);
        return redirect()->action('Crud@index')
            ->with('status', 'Usuario Agregado Exitosamente');
    }


    public function show($id)
    {
        $user = DB :: table('poetas')
            ->where('Poet_Code', '=', $id)
            ->first();
        return view ('crud.altaPoet', ['user'=> $user]);
    }



    public function update(Request $request)
    {
        $user = DB :: table('poetas')
            ->where('Poet_Code', $request->input('id'))
            ->update([
                'First_Name'=> $request->input('nombre'),
                'SurName'=> $request->input('apellido'),
                'Address'=> $request->input('direccion'),
                'PostCode'=> $request->input('codigo'),
                'Telephone_Number'=> $request->input('telefono')
            ]);
        return redirect()->action('Crud@index')
            ->with('status', 'Poeta Modificado Exitosamente');
    }


    public function destroy($id)
    {
        $user = DB :: table('poetas')
            ->where('Poet_Code','=', $id)
            ->delete();

        return redirect()->action('Crud@index')
            ->with('status', 'Poeta Eliminado Exitosamente');
    }
}
