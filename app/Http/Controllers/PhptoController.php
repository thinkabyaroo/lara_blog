<?php

namespace App\Http\Controllers;

use App\Models\Phpto;
use App\Http\Requests\StorePhptoRequest;
use App\Http\Requests\UpdatePhptoRequest;

class PhptoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePhptoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePhptoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Phpto  $phpto
     * @return \Illuminate\Http\Response
     */
    public function show(Phpto $phpto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Phpto  $phpto
     * @return \Illuminate\Http\Response
     */
    public function edit(Phpto $phpto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePhptoRequest  $request
     * @param  \App\Models\Phpto  $phpto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePhptoRequest $request, Phpto $phpto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Phpto  $phpto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phpto $phpto)
    {
        //
    }
}
