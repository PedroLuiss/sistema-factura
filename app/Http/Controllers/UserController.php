<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveCompraClienteRequest;
use App\Models\Compra;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }
    public function index()    {
        $productos = Producto::orderBy('id' , 'desc')->pluck('nombre', 'id');
        $users = User::where('rol', 'cliente')->get();
        $data = [
            'productos'=>$productos,
            'users' => $users,
        ];
        return view('usuarios.show',$data);
    }

    public function addcompra(SaveCompraClienteRequest $request){
    //    dd($request);
    $compra = Compra::create([
        'id_producto' => $request->id_producto,
        'id_user'    => Auth::user()->id,
    ]);
    $messege = $compra ? 'Comprado correctamente' : 'Error al agregar';
    return redirect()->route('user.index')->with('mensaje', $messege);
    }


}
