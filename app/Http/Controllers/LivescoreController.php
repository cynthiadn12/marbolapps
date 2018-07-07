<?php

namespace App\Http\Controllers;

use App\Livescore;
use App\Http\Requests\LivescoreRequest;
use Illuminate\Http\Request;

class LivescoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livescores = Livescore::all();
        return view('livescore.index', compact('livescores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livescore.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LivescoreRequest $request)
    {
        Livescore::create($request->all());
        return redirect()->route('livescore.index')->with('message', 'Item has been added succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Livescore $livescore)
    {
        return view('livescore.show', compact('livescore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Livescore $livescore)
    {
        return view('livescore.edit', compact('livescore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LivescoreRequest $request, Livescore $livescore)
    {
        $livescore->update($request->all());
        return redirect()->route('livescore.index')->with('message','Item has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livescore $livescore)
    {
        $livescore->delete();
        return redirect()->route('livescore.index')->with('message','Item has been deleted successfully');
    }
}
