<?php

namespace App\Http\Controllers;

use App\Models\Interaccion;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\InteraccionRequest;

class InteraccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(InteraccionRequest $request)
    {
        try {
            $interaccion = new Interaccion();
            $interaccion->idDogI = $request->idDogI;
            $interaccion->idDogC = $request->idDogC;
            $interaccion->preference = $request->preference;
            $interaccion->save();

            return response()->json(["interaccion" => $interaccion], Response::HTTP_OK);
        } catch (Exception $e) {
            return response()->json(["error" => $e->getMessage()], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function listOne(Interaccion $interaccion, $id)
    {
        try {
            $interaccion = Interaccion::where('idDogI', $id)->get();
            return response()->json(["interaccion" => $interaccion], Response::HTTP_OK);
        } catch (Exception $e) {
            return response()->json(["error" => $e->getMessage()], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Interaccion $interaccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Interaccion $interaccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Interaccion $interaccion)
    {
        //
    }
}
