<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = productos::all();
        return response()->json($productos, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate(
        //     [

        //         'sku' => 'required',
        //         'título' => 'required',
        //         'imagen' => 'required',
        //         'descripción' => 'required',
        //         'precio' => 'required',
        //         'categoría' => 'required',
        //     ]
        // );
        $producto = productos::create($request->all());
        return response()->json(["mensaje" => "Prodcto creado correctamente", "productos" => $producto], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $producto = productos::find($id);
        if (is_null($producto)) {
            return response()->json(["Mensaje" => "Producto no encontrado"], 404);
        }
        return response()->json($producto, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $producto = productos::find($id);
        if (is_null($producto)) {
            return response()->json(["Mensaje" => "Producto no encontrado"], 404);
        }
        $producto->update($request->all());
        return response()->json(["mensaje" => "Prodcto actualizado correctamente", "producto" => $producto], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producto = productos::find($id);
        if (is_null($producto)) {
            return response()->json(["Mensaje" => "Producto no encontrado"], 404);
        }
        $producto->delete();
        return response()->json(["mensaje" => "Producto eliminado correctamente"], 200);
    }
}
