<?php

namespace App\Http\Controllers;

use App\Models\Perro;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\PerroRequest;

class PerroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    // }

    //Show the form for creating a new resource.
    public function create(PerroRequest $request)
    {
        try {
            $perro = new Perro();
            $perro->name = $request->name;
            $perro->urlP = $request->urlP;
            $perro->sexo = $request->sexo;
            $perro->description = $request->description;
            $perro->save();

            return response()->json(["perro" => $perro], Response::HTTP_OK);
        } catch (Exception $e) {
            return response()->json(["error" => $e->getMessage()], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    
    // }

    //Display the specified resource.
    public function show(Perro $perro)
    {
        $perro = Perro::all();
        return response()->json(["perro" => $perro], Response::HTTP_OK);
    }

    
     //Show the form for editing the specified resource.
    // public function edit(Perro $perro)
    // {
    //     //
    // }

    //  Update the specified resource in storage.
    public function update(Request $request, Perro $perro)
    {
        try {
            $perro = Perro::find($id);
            $perro->name = $request->name;
            $perro->urlP = $request->urlP;
            $perro->sexo = $request->sexo;
            $perro->description = $request->description;
            $perro->save();

            return response()->json(["perro" => $perro], Response::HTTP_OK);
        } catch (Exception $e) {
            return response()->json(["error" => $e->getMessage()], Response::HTTP_BAD_REQUEST);
        }
    }


    //  Remove the specified resource from storage.
    public function destroy(Perro $perro, $id)
    {
        try {
            $perro = Perro::find($id);
            $perro->delete();
            return response()->json(["perro" => $perro], Response::HTTP_OK);
        } catch (Exception $e) {
            return response()->json(["error" => $e->getMessage()], Response::HTTP_BAD_REQUEST);
        }
    }
}
