<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('post');
    }
    public function view_coctant($id,$name){

        return view('pages.contact' ,['id' =>$id , 'name'=> $name]);
    }

public function advance(){


    $peaple = ['ahmad' , 'khalid' , 'wali' , 'sahel' , 'wafa'  , 'jan' , 'layla'];
    return view('pages.advance' ,['peaple' =>$peaple]);
      


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
    public function show(string $id ,$name)
    {
        return "this is our show method the number is   " .$id . "my name is ". $name;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id )
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
