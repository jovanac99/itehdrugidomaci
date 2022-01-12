<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResourceUstanova;
use App\Models\Ustanova;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ControllerUstanova extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ust = Ustanova::all();
        return ResourceUstanova::collection($ust);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'naziv_ustanove' => 'required|string',
            'adresa' => 'required|string',
            'grad' => 'required|string',
            'broj_zaposlenih' => 'required|integer',
            'website' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json(['Greska pri unosu ustanove u bazu', $validator->errors()]);
        }

        $ustanova = Ustanova::create([
            'naziv_ustanove' => $request->naziv_ustanove,
            'adresa' => $request->adresa,
            'grad' => $request->grad,
            'broj_zaposlenih' => $request->broj_zaposlenih,
            'website' => $request->website,
        ]);

        return response()->json(['Nova ustanova je uneta u bazu', new ResourceUstanova($ustanova)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ustanova  $ustanova
     * @return \Illuminate\Http\Response
     */
    public function show(Ustanova $ustanova)
    {
        return new ResourceUstanova($ustanova);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ustanova  $ustanova
     * @return \Illuminate\Http\Response
     */
    public function edit(Ustanova $ustanova)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ustanova  $ustanova
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ustanova $ustanova)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ustanova  $ustanova
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ustanova $ustanova)
    {
        $ustanova->delete();
        return response()->json(['Tražena ustanova je obrisana iz baze', new ResourceUstanova($ustanova)]);
    }
}
