<?php

namespace App\Http\Controllers;

use App\Models\Constitution;
use Illuminate\Http\Request;

class ConstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consts = Constitution::all();

        return view('admin.constitutions.index', compact('consts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.constitutions.create');
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
     * @param  \App\Models\Constitution  $constitution
     * @return \Illuminate\Http\Response
     */
    public function show(Constitution $constitution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Constitution  $constitution
     * @return \Illuminate\Http\Response
     */
    public function edit(Constitution $constitution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Constitution  $constitution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Constitution $constitution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Constitution  $constitution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Constitution $constitution)
    {
        //
    }
}
