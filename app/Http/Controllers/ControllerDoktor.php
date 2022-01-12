<?php

namespace App\Http\Controllers;

use App\Models\Doktor;
use Illuminate\Http\Request;
use App\Http\Resources\ResourceDoktor;

class ControllerDoktor extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doktori = Doktor::all();
        return ResourceDoktor::collection($doktori);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doktor  $doktor
     * @return \Illuminate\Http\Response
     */
    public function show(Doktor $doktor)
    {
        return new ResourceDoktor($doktor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doktor  $doktor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doktor $doktor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doktor  $doktor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doktor $doktor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doktor  $doktor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doktor $doktor)
    {
        //
    }
}
