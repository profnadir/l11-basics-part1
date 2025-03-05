<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        /* return response()->json([
            'name' => 'Abigail',
            'state' => 'CA',
        ]); */
        

        $users = User::all();
        return view("users.index",["users" => $users]);

       

        //return $users;

        // Illuminate\Http\Response 

        //return response("hi dev",200);

        //return redirect()->route("dev201",["groupe" => 202]);

        //return back()->withInput();

        //return redirect()->away('https://www.google.com');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return redirect()->route("users.index")->with("status","user created");

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return redirect()->action([UserController::class, 'edit']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
