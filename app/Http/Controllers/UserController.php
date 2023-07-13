<?php

namespace App\Http\Controllers;

use App\Http\Requests\userStore;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();
        return view('users.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(userStore $request)
    {
        $input = $request->validated();
        $input['password'] = bcrypt($input['password']);
        User::create($input);
        return redirect()->back()->withSuccess('User Created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        User::destroy($id);

        return redirect()->back()->withdele('User has been deleted successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = user::find($id);
        return view('users.index',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(userStore $request,$id)
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
