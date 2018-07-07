<?php

namespace App\Http\Controllers;

use App\Lineup;
use App\Http\Requests\LineupRequest;
use Illuminate\Http\Request;

class LineupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lineups = Lineup::all();
        return view('lineup.index', compact('lineups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lineup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LineupRequest $request)
    {
        Lineup::create($request->all());
        return redirect()->route('lineup.index')->with('message', 'Item has been added succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Lineup $lineup)
    {
        return view('lineup.show', compact('lineup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Lineup $lineup)
    {
        return view('lineup.edit', compact('lineup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LineupRequest $request, Lineup $lineup)
    {
        $lineup->update($request->all());
        return redirect()->route('lineup.index')->with('message','Item has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lineup $lineup)
    {
        $lineup->delete();
        return redirect()->route('lineup.index')->with('message','Item has been deleted successfully');
    }
}
