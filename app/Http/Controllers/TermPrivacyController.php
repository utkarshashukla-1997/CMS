<?php

namespace App\Http\Controllers;
use App\Models\TermPrivacy;
use Illuminate\Http\Request;

class TermPrivacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {

        $this->middleware('permission:privacy-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:privacy-edit', ['only' => ['edit', 'update']]);
    }
    public function index()
    {
        $privacy = TermPrivacy::first();
        return view('Backend.Privacy.show', compact('privacy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $privacy = TermPrivacy::first();
        return view('Backend.Privacy.create', compact('privacy'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $privacy = TermPrivacy::create($input);
        return redirect()->back()->with('success','New Terms and Conditions/Privacy Policy Created Successfully !!!',compact('privacy'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $privacy = TermPrivacy::find($id);
        return view('Backend.Privacy.create', compact('privacy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $privacy = TermPrivacy::find($id);
        $privacy->update($input);

        return redirect()->back()
            ->with('success', 'New Terms and Conditions/Privacy Policy Updated Successfully !!!', compact('privacy'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
