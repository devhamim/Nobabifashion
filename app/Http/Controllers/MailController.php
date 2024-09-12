<?php

namespace App\Http\Controllers;

use App\Models\Mailinfo;
use Illuminate\Http\Request;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mails = Mailinfo::first();
        return view('backend.mail',[
            'mails'=>$mails,
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
        $rules = [
            'mail'=>'required|max:225',
        ];

        $validatedData = $request->validate($rules);


        $mails = Mailinfo::create($validatedData);

        if($mails){
            return back()->with('success', 'create successfully.');
        }
        else{
            return back()->with('error', 'Failed to create.');
        }
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
        $mails = Mailinfo::find($id);

        $rules = [
            'mail'=>'required|max:225',
        ];

        $validatedData = $request->validate($rules);

        $mails->update($validatedData);

        if ($mails) {
            return back()->with('success', 'updated successfully.');
        } else {
            return back()->with('error', 'Failed to update.');
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
