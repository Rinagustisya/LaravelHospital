<?php

namespace App\Http\Controllers;

use App\Models\Goldarah;
use Illuminate\Http\Request;

class GoldarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('goldarah.all', ['data_goldarah' => Goldarah::all()]);
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
     * @param  \App\Models\goldarah  $goldarah
     * @return \Illuminate\Http\Response
     */
    public function show(Goldarah $goldarah)
    {
        return view('goldarah.detail', ['goldarah' => $goldarah]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\goldarah  $goldarah
     * @return \Illuminate\Http\Response
     */
    public function edit(goldarah $goldarah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\goldarah  $goldarah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, goldarah $goldarah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\goldarah  $goldarah
     * @return \Illuminate\Http\Response
     */
    public function destroy(goldarah $goldarah)
    {
        //
    }
}