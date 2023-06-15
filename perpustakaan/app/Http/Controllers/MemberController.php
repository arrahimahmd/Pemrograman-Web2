<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//import model book
use App\Models\Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::all();
        return view('admin.member.index', [
            'members'=> $members
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:5|max:20',
            'email' => 'required',
            'gender' => 'required|in:Pria,Wanita',
            'status' => 'required',
            'address' => 'required'
        ]);

        Member::create($validated);
        return redirect('/dashboard/member');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Mencari data berdasarkan ID
        $member =  Member::find($id);
        return view('admin.member.show', [
            'member' => $member
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Mencari data berdasarkan ID
        $member =  Member::find($id);
        return view('admin.member.edit', [
            'member' => $member
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Mencari data berdasarkan ID
        $member =  Member::find($id);

        // Validasi Form input
        $validated = $request->validate([
            'name' => 'required|min:5|max:20',
            'email' => 'required',
            'gender' => 'required|in:Pria,Wanita',
            'status' => 'required',
            'address' => 'required'
        ]);

        // Update Data
        $member->update($validated);

        return redirect('/dashboard/member')->with('success', 'Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Mencari data berdasarkan ID
        $member =  Member::find($id);
        $member->delete();
        return redirect('/dashboard/member');
    }
}
