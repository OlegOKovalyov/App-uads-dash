<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UadsuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uadsusers=\App\Uadsuser::all();
        //return view('index', compact('uadsusers'));
        return view('myUsers', compact('uadsusers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $uadsusers = \App\Uadsuser::find($id);
        return view('myedit',compact('uadsusers','id'));
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
        $uadsusers = \App\Uadsuser::find($id);
        $uadsusers->login=$request->get('login');
        $uadsusers->name=$request->get('name');
        $uadsusers->email=$request->get('email');
        $uadsusers->password=$request->get('password');
        $uadsusers->role=$request->get('role');
        $uadsusers->save();
        return redirect('my-users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $uadsusers = \App\Uadsuser::find($id);
        $uadsusers->delete();
        return redirect('my-users')->with('success','Information has been  deleted');
    }
}
