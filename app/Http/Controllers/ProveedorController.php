<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidationRequest;
use App\Http\Requests\ValidationUpdateRequest;
use App;
use Response;
use Validator;

class ProveedorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function mostrar(){
        $proveedores = App\Proveedor::all();
        return view('proveedores.mostrar', compact('proveedores'));
    }

    public function agregar(){
        return view('proveedores.agregar');
    }

    public function crear_proveedores(ValidationRequest $request){  

        $this->validate($request, [
            'razon_social' => 'required|max:255',
            'email' => 'required|email',
            'telefono' => 'required|numeric',
            'direccion' => 'required'
        ]);


        $proveedor = new App\Proveedor;
        $proveedor->razon_social = $request->razon_social;
        $proveedor->telefono = $request->telefono;
        $proveedor->email = $request->email;
        $proveedor->direccion = $request->direccion; 
        $proveedor->save();
        return back()->with('mensaje','notificacion');
    }

    public function editar($id){
        $proveedor = App\Proveedor::findOrFail($id);
        return view('proveedores.editar',compact('proveedor'));
    }

    public function update(ValidationUpdateRequest $request, $id){
        $proveedorActualizar = App\Proveedor::find($id);
        $proveedorActualizar->razon_social = $request->razon_social;
        $proveedorActualizar->telefono = $request->telefono;
        $proveedorActualizar->email = $request->email;
        $proveedorActualizar->direccion = $request->direccion;
        $proveedorActualizar->save();
        $proveedores = App\Proveedor::all();
        return view('proveedores.mostrar', compact('proveedores'))->with('mensaje', 'Proveedor Actualizado');
    }


    public function eliminar($id){
        $proveedorEliminar = App\Proveedor::findOrFail($id);
        $proveedorEliminar->delete();
    }

    public function edit($id){
        if(request()->ajax()) {
            $data = App\Proveedor::findOrFail($id);
            return response()->json(['result' => $data]);
        }
    }
    public function updateProveedor(Request $request){
        $proveedorActualizar = App\Proveedor::findOrfail($request->hidden_id);
        $proveedorActualizar->razon_social = $request->razon_social;
        $proveedorActualizar->telefono = $request->telefono;
        $proveedorActualizar->direccion = $request->direccion;
        $proveedorActualizar->save();
        return response()->json(['success' => 'Registro Actualizado']);
    }


    public function proveedores(Request $request){
        if ($request->ajax()) {
            $proveedores = App\Proveedor::all();
           return response()->json($proveedores);
        }
    }
    
    public function tiposMateriales(Request $request){
        if($request->ajax()){
            $tipos_materiales = App\MaterialTipo::all();
            return response()->json($tipos_materiales);
        }
    }

    public function unidadesMateriales(Request $request){
        if($request->ajax()){
            $tipos_unidades = App\MaterialUnidad::all();
            return response()->json($tipos_unidades);
        }
    }
}
