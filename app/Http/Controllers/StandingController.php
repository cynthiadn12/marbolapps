<?php

namespace App\Http\Controllers;

use App\Standing;
use App\Http\Requests\StandingRequest;
use Illuminate\Http\Request;

class StandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $standings = Standing::all();
        return view('standings.index', compact('standings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('standings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Standing::create($request->all());
        return redirect()->route('standings.index')->with('message', 'Item has been added succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Standing $standing)
    {
        return view('standings.show', compact('standing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Standing $standing)
    {
        return view('standings.edit', compact('standing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Standing $standing)
    {
        $standing->update($request->all());
        return redirect()->route('standings.index')->with('message','Item has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Standing $standing)
    {
        $standing->delete();
        return redirect()->route('standings.index')->with('message','Item has been deleted successfully');
    }
}
