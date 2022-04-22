<?php

namespace App\Http\Controllers;

use App\Models\MailSettings;
use Illuminate\Http\Request;

class MailSettingsController extends Controller
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
        return view('Backend.Mail.create');
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
     * @param  \App\Models\MailSettings  $mailSettings
     * @return \Illuminate\Http\Response
     */
    public function show(MailSettings $mailSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MailSettings  $mailSettings
     * @return \Illuminate\Http\Response
     */
    public function edit(MailSettings $mailSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MailSettings  $mailSettings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MailSettings $mailSettings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MailSettings  $mailSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(MailSettings $mailSettings)
    {
        //
    }
}
