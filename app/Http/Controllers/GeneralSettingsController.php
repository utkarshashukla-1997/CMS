<?php

namespace App\Http\Controllers;

use App\Models\GeneralSettings;
use Illuminate\Http\Request;

class GeneralSettingsController extends Controller
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
        return view('Backend.General.create');
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
     * @param  \App\Models\GeneralSettings  $generalSettings
     * @return \Illuminate\Http\Response
     */
    public function show(GeneralSettings $generalSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GeneralSettings  $generalSettings
     * @return \Illuminate\Http\Response
     */
    public function edit(GeneralSettings $generalSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GeneralSettings  $generalSettings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GeneralSettings $generalSettings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GeneralSettings  $generalSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(GeneralSettings $generalSettings)
    {
        //
    }
}
