<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Carbon\Carbon;

class ProductoController extends Controller
{
  
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index',compact('productos'));
    }

  
    public function create()
    {
        return view('productos.create');
    }

   
    public function store(Request $request)
    {        
        $request->validate([
            'nombre' => 'required',
            'referencia' => 'required',
            'precio' => 'required',
            'peso' => 'required',
            'categoria' => 'required',
            'stock' => 'required',
            //'fecha_creacion' => 'required'            
        ]);

        $producto = Producto::create([
            'nombre' => $request->nombre,
            'referencia' => $request->referencia,
            'precio' => $request->precio,
            'peso' => $request->peso,
            'categoria' => $request->categoria,
            'stock' => $request->stock,
            'fecha_creacion' => carbon::now()
        ]);
 
        return redirect()->route('productos.index');
    }

    
    public function show(Producto $producto)    {
        
        return view('productos.show',compact('producto'));
    }

    
    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }
  

   
    public function update(Request $request, Producto $producto)
    {       
        $request->validate([
            'nombre' => 'required',
            'referencia' => 'required',
            'precio' => 'required',
            'peso' => 'required',
            'categoria' => 'required',
            'stock' => 'required'                         
        ]);

        $producto->update([
            'nombre' => $request->nombre,
            'referencia' => $request->referencia,
            'precio' => $request->precio,
            'peso' => $request->peso,
            'categoria' => $request->categoria,
            'stock' => $request->stock           
        ]);
 
        return redirect()->route('productos.index');
    }

    public function destroy(Producto $producto)
    {        
        $producto->delete();

        return redirect()->route('productos.index');
    }

   
}
