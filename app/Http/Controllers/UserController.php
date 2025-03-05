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
        return "list users";
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
        //get data

        //dd($request->input("email"));
        //dd($request->name);

        //dd($request->path());

        $url = $request->url();
        $urlWithQueryString = $request->fullUrl();

        //dd($url, $urlWithQueryString);

       /*  $host = $request->host();
        $http = $request->httpHost();
        $schema = $request->schemeAndHttpHost();

        dd($host,$http,$schema); */

       /*  if($request->isMethod('post')){
            dd("post");
        }  */

        //dd($request->all());

       /*  $name = $request->input('name1', 'Sally');
        dd($name); */

        //dd($request->input());

        //dd($request->query('token'));

        //dd($request->only(["name","email"]));
        //dd($request->except(["name","email"]));

       /*  if ($request->has('name2')) {
            dd("exist");
        } */
        


        //validate data
        // stock
        // redirection

        //if validate 

        //save data

        //else
        //return back()->withInput();

        //dd($request->file("cv"));
        $request->cv->store("cvs");
        

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
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
