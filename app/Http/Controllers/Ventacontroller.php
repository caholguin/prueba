<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Producto;

class Ventacontroller extends Controller
{
   
    public function index()
    {
        $productos = Producto::all();
        return view('ventas.index', compact('productos'));
    }

   
    public function create()
    {
        
    }

 
    public function store(Request $request)
    {
        
        $producto = Producto::find($request->producto_id);

        if ($producto->stock < $request->cantidad) {
          return redirect()->back()->with('info', 'No hay suficiente stock');
        }else{
          
            $request->validate([
                'producto_id' => 'required',
                'cantidad' => 'required'                       
            ]);
    
            $venta = Venta::create([
                'producto_id' => $request->producto_id,
                'cantidad' => $request->cantidad,
                'total' => $producto->precio*$request->cantidad,                              
            ]);
            
            $producto->stock = $producto->stock - $request->cantidad;
            $producto->save();

            return redirect()->route('ventas.index');
        }
    }

    
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
