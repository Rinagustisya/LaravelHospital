<?php

namespace App\Http\Controllers;

use App\Models\jenisKelamin;
use Illuminate\Http\Request;

class JenisKelaminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jeniskelamin.all', ['data_jeniskelamin' => jenisKelamin::all()]);
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
     * @param  \App\Models\jenisKelamin  $jenisKelamin
     * @return \Illuminate\Http\Response
     */
    public function show(jenisKelamin $jenisKelamin)
    {
        return view('jeniskelamin.detail', ['jenisKelamin' => $jenisKelamin]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jenisKelamin  $jenisKelamin
     * @return \Illuminate\Http\Response
     */
    public function edit(jenisKelamin $jenisKelamin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jenisKelamin  $jenisKelamin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jenisKelamin $jenisKelamin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jenisKelamin  $jenisKelamin
     * @return \Illuminate\Http\Response
     */
    public function destroy(jenisKelamin $jenisKelamin)
    {
        //
    }
}