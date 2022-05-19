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
    function __construct()
    {

        $this->middleware('permission:general-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:general-edit', ['only' => ['edit', 'update']]);
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
        $general = GeneralSettings::first();
        return view('Backend.General.create',compact('general'));
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
            'site_title'=> 'required',
            'tagline' => 'required',
            'url' => 'required',

        ]);
        $input = $request->all();
        if ($request->hasFile('logo_image')) {
            $image = $request->file('logo_image');
            $logo_image = "TD-" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path() . '/Uploads/Settings/General/', $logo_image);

            $request->logo_image = $logo_image;
            $input['logo_image'] = $logo_image;
        }
        if ($request->hasFile('background_image')) {
            $image = $request->file('background_image');
            $background_image = "TD-" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path() . '/Uploads/Settings/General/', $background_image);

            $request->background_image = $background_image;
            $input['background_image'] = $background_image;
        }
        $general = GeneralSettings::create($input);
        return redirect()->back()->with('success','General Settings Created Successfully !!!',compact('general'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GeneralSettings  $generalSettings
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $general = GeneralSettings::find($id);
        return view('Backend.General.create', compact('general'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GeneralSettings  $generalSettings
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $general = GeneralSettings::find($id);
        return view('Backend.General.edit', compact('general'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GeneralSettings  $generalSettings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'site_title'=> 'required',
            'tagline' => 'required',
            'url' => 'required',

        ]);
        $input = $request->all();
        $general = GeneralSettings::find($id);
        if ($request->logo_image != '') {
            $path = public_path() . '/Uploads/Settings/General/';
            //code for remove old file
            if ($general->logo_image != ''  && $general->logo_image != null) {
                $file_old = $path . $general->logo_image;
                unlink($file_old);
            }
            if ($request->hasFile('logo_image')) {
                $image = $request->file('logo_image');
                $logo_image = "TD-" . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path() . '/Uploads/Settings/General', $logo_image);

                $request->logo_image = $logo_image;
                $input['logo_image'] = $logo_image;
            }
        }
        if ($request->background_image != '') {
            $path = public_path() . '/Uploads/Settings/General/';
            //code for remove old file
            if ($general->background_image != ''  && $general->background_image != null) {
                $file_old = $path . $general->background_image;
                unlink($file_old);
            }
            if ($request->hasFile('background_image')) {
                $image = $request->file('background_image');
                $background_image = "TD-" . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path() . '/Uploads/Settings/General', $background_image);

                $request->background_image = $background_image;
                $input['background_image'] = $background_image;
            }
        }
        $general->update($input);

        return redirect()->back()
            ->with('success', 'New Terms and Conditions/Privacy Policy Updated Successfully !!!', compact('general'));
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
