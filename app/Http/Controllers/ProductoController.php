<?php

namespace App\Http\Controllers;
use App\Http\Requests\UpdateProductoRequest;
use App\Http\Requests\SaveProductoRequest;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProductoController extends Controller
{
    public function index(){

        $productos = Producto::all();
        return view('producto.index', compact('productos')); 
        
    }

    public function create(){
        return view('producto.create');
    }

    public function store(SaveProductoRequest  $request){
        
        $Producto = Producto::create([
            'nombre' => $request->get('nombre'),
            'impuesto' => $request->get('impuesto'),
            'precio' => $request->get('precio')
        ]);

        $messege = $Producto ? 'Agregado correctamente' : 'Error al agregar';
        return redirect()->route('producto.index')->with('mensaje', $messege);
    }

    public function edit($id){

        $Producto = Producto::findOrFail($id);

        return view('producto.edit' ,compact('Producto'));
    }

    public function update(UpdateProductoRequest $request, $id){

        $Producto = Producto::findOrFail($id);
        $Producto->nombre = $request->get('nombre');
        $Producto->impuesto = $request->get('impuesto');
        $Producto->precio = $request->get('precio');
        $Producto->update();

        $messege = $Producto ? 'Actualizado correctamente' : 'Error al agregar';

        return redirect('/producto')->with('mensaje', $messege);
    }

    public function destroy($id){
        
        Producto::find($id)->delete();
        return back()->with('mensaje', 'Eliminado Correctamente');
     }
}
