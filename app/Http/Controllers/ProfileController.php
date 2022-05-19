<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {

        $this->middleware('permission:profile-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:profile-edit', ['only' => ['edit', 'update']]);
    }
    public function index()
    {
        $profile = Profile::first();
        return view('Backend.Profile.show', compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profile = Profile::first();
        return view('Backend.Profile.create',compact('profile'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' =>'required',
            'email' => 'required',
            'website' => 'required',
        ]);
        $input = $request->all();
        if ($request->hasFile('profile_picture')) {
            $image = $request->file('profile_picture');
            $profile_picture = "TD-" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path() . '/Uploads/Profile/Picture/', $profile_picture);

            $request->profile_picture = $profile_picture;
            $input['profile_picture'] = $profile_picture;
        }
        $profile = Profile::create($input);
        return redirect()->back()->with('success','New Terms and Conditions/Privacy Policy Created Successfully !!!',compact('profile'));
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
        $profile = Profile::find($id);
        return view('Backend.Profile.create',compact('profile'));
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
        $this->validate($request,[
            'name' =>'required',
            'email' => 'required',
            'website' => 'required',
        ]);
        $input = $request->all();
        // dd($input);
        $profile = Profile::findOrFail($id);
        if ($request->profile_picture != '') {
            $path = public_path() . '/Uploads/Profile/Picture/';
            //code for remove old file
            if ($profile->profile_picture != ''  && $profile->profile_picture != null) {
                $file_old = $path . $profile->profile_picture;
                unlink($file_old);
            }
            if ($request->hasFile('profile_picture')) {
                $image = $request->file('profile_picture');
                $profile_picture = "TD-" . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path() . '/Uploads/Profile/Picture', $profile_picture);

                $request->profile_picture = $profile_picture;
                $input['profile_picture'] = $profile_picture;
            }
        }

            $profile->update($input);

        return redirect()->back()
            ->with('success', 'Selected Notice Details Updated Successfully !!!');
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
