<?php

namespace App\Http\Controllers;
use Request;
//use Illuminate\Http\Request;
use App\Producto;
//


class ProductoController extends Controller
{
    //
        public function getIndex()
    	{
            $nombres = Producto::all();
            //$nombres = formulario::orderBy('nombre','asc')->get();
        	return view('productos/index', compact('nombres'));
    	}
    	public function getShow($id)
    	{
        	//
            $nombres = Producto::find($id);
        	return view('productos/show', compact('nombres'));
    	}

        public function getCreate(Request $request)
        {
            //
            //Producto::create(Request::all());
            return view('productos/create');
        }
    	
    	public function create(Request $request)
    	{
        	//
            Producto::create(Request::all());
        	return view('productos/create');
    	}
       	public function getEdit($id)
    	{
        	//
        	return view('productos/edit', array('id'=>$id));
    	}
}
