<?php

namespace App\Http\Controllers;

use App\Models\markatingsetting;
use Illuminate\Http\Request;

class MarkatingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = markatingsetting::first();
        return view('backend.markatingsetting',[
            'setting'=>$setting,
        ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $setting = markatingsetting::findOrFail($id);

        $rules = [
            'meta_title' => 'nullable|max:225',
            'meta_tag' => 'nullable|max:225',
            'meta_description' => 'nullable',
            'fb_pixel' => 'nullable',
            'google_tag' => 'nullable',
        ];

        $validatedData = $request->validate($rules);

        $setting->update($validatedData);

        if ($setting) {
            return back()->with('success', 'Setting updated successfully.');
        } else {
            return back()->with('error', 'Failed to update Setting.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
