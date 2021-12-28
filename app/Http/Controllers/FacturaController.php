<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveFacturaRequest;
use Illuminate\Http\Request;

use App\Models\Compra;
use App\Models\Facturas;
use App\Models\Producto;
use App\Models\User;

class FacturaController extends Controller
{
    public function index(){ 
        $facturas = Facturas::select('users.id','users.name','users.apellido','users.email','facturas.created_at','facturas.monto_total','facturas.impuesto_total')->join('users','facturas.id_user','=','users.id')->get();
       
                $data = [
                    'facturas' => $facturas 
                ];
                // dd($data);
                return view('factura.index',compact('data'));
    }

    public function show($id){
        $users = User::where('id', $id)->first();
        $facturas = Facturas::where('id_user', $id)->first();
        $productos = Producto::select('productos.nombre','productos.precio','productos.impuesto','compras.created_at as fecha_compra')
                ->join('compras', 'productos.id', '=', 'compras.id_producto')->where('compras.id_user', $id)->orderBy('compras.created_at','DESC')->get();
        
        
        $data = [
            'user' => $users,
            'factura' => $facturas,
            'productos' => $productos,
        ];
        return view('factura.show',compact('data'));
    }

    public function store(SaveFacturaRequest $request)
    {   
        
            $factura = Facturas::create([
                'id_user'        => $request['id_user'],
                'monto_total'    => $request['montototal'],
                'impuesto_total' => $request['impuestototal'],
            ]);

            Compra::where('id_user', $request['id_user'])->update([
                'status'    => '0',
            ]);

            $messege = $factura ? 'Generado correctamente' : 'Error al agregar';
            return redirect()->route('compra.index')->with('mensaje', $messege);
             
    }
}
