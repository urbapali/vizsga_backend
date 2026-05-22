<?php

namespace App\Http\Controllers;

use App\Models\Esemenyek;
use App\Http\Requests\StoreEsemenyekRequest;
use App\Http\Requests\UpdateEsemenyekRequest;
use Ramsey\Uuid\Type\Integer;

class EsemenyekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Esemenyek::leftJoin('kategoriaks', 'esemenyeks.kategoria_id', '=', 'kategoriaks.id')
            ->select('esemenyeks.*', 'kategoriaks.kategoria_nev as kategoria_nev')
            ->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEsemenyekRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Esemenyek $esemenyek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEsemenyekRequest $request, Integer $id)
    {
        $esemeny = Esemenyek::find($id);
     

        $esemeny->fill($request->all());
        $esemeny->save();
        return response()->json($esemeny, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Integer $id)
    {
        return Esemenyek::find($id)->delete();
    }
}
