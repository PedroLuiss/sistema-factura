<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Compra;
use App\Models\User;

class CompraController extends Controller
{
    
    public function __construct() 
    {
        $this->middleware('auth');
    }

    public function index(){
     $i=0;
     $sump=0;
     $sumi=0;
     $id_user='';
     $nombre='';
     $apellido='';
     $email='';
     $s=[];
        $users = User::where('rol', 'cliente')->get();
        foreach($users as $user){
            $compras = Compra::select('users.id','users.name','users.apellido','users.email','productos.precio','productos.impuesto')
                ->join('productos', 'productos.id', '=', 'compras.id_producto')->join('users','compras.id_user','=','users.id')->where('compras.id_user', $user->id)->where('compras.status','1')->get();
                $sump=0;
                $sumi=0;  
                foreach($compras as $compra){
                    if($compra->id == $user->id){
                        $sump += $compra->precio;
                        $sumi += $compra->impuesto;
                        $id_user = $compra->id;
                        $nombre = $compra->name;
                        $apellido = $compra->apellido;
                        $email = $compra->email;
                    } 

               

                }
                $s[$i]['sumaprecio']=$sump;
                $s[$i]['sumaimpuesto']=$sumi;
                $s[$i]['id_user']=$id_user;
                $s[$i]['nombre']=$nombre;
                $s[$i]['apellido']=$apellido;
                $s[$i]['email']=$email;
                $i++;
        }
    
        //  dd($s);
        $data = [
            'compras' => $s
        ];
                
                //dd(count($data['compras']));
        return view('compra.index',compact('data'));
    }
}
