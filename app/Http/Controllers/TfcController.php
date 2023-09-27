<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTfcRequest;
use App\Http\Requests\UpdateTfcRequest;
use App\Models\Tfc;
use Illuminate\View\View;

class TfcController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $tfcs = Tfc::all()->sortDesc();
        return view('index.home', ['tfcs' => $tfcs]);
    }
    public function showAll():View
    {
        $tfcs = Tfc::all()->sortDesc();
        return view('show.tfc.all', ['tfcs' => $tfcs]);
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
    public function store(StoreTfcRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tfc $tfc)
    {
        return view('show.tfc.view', ['tfc' => $tfc]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Tfc $tfc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTfcRequest $request, Tfc $tfc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tfc $tfc)
    {
        //
    }
}
