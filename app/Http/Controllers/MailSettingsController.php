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
    function __construct()
    {

        $this->middleware('permission:mail-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:mail-edit', ['only' => ['edit', 'update']]);
    }
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mail = MailSettings::first();
        return view('Backend.Mail.create',compact('mail'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'mail_mailer'=> 'required',
            'mail_host' => 'required',
            'mail_port' => 'required',
            'mail_username' => 'required',
            'mail_password'=> 'required',
            'mail_encryption' => 'required',
            'mail_from_address' => 'required',
            'mail_from_name' => 'required',
        ]);
        $input = $request->all();
        $mail = MailSettings::create($input);
        return redirect()->back()->with('success','New Terms and Conditions/Privacy Policy Created Successfully !!!',compact('mail'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MailSettings  $mailSettings
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MailSettings  $mailSettings
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mail = MailSettings::find($id);
        return view('Backend.Mail.edit',compact('mail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MailSettings  $mailSettings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'mail_mailer'=> 'required',
            'mail_host' => 'required',
            'mail_port' => 'required',
            'mail_username' => 'required',
            'mail_password'=> 'required',
            'mail_encryption' => 'required',
            'mail_from_address' => 'required',
            'mail_from_name' => 'required',
        ]);
        $input = $request->all();
        $mail = MailSettings::find($id);
        $mail->update($input);

        return redirect()->back()
            ->with('success', 'New Terms and Conditions/Privacy Policy Updated Successfully !!!', compact('mail'));
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
