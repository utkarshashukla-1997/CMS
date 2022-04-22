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
        $term = TermPrivacy::first();
        return view('Backend.Privacy.show', compact('term'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $term = TermPrivacy::first();
        return view('Backend.Privacy.create', compact('term'));
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
        $term = TermPrivacy::create($input);
        return redirect()->back()->with('success','New Terms and Conditions/Privacy Policy Created Successfully !!!',compact('term'));
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
        $term = TermPrivacy::find($id);
        return view('Backend.Privacy.create', compact('term'));
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
        $term = TermPrivacy::find($id);
        $term->update($input);

        return redirect()->back()
            ->with('success', 'New Terms and Conditions/Privacy Policy Updated Successfully !!!', compact('term'));
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
