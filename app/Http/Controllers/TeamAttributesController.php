<?php

namespace App\Http\Controllers;

use App\TeamAttributes;
use Illuminate\Http\Request;

class TeamAttributesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teamAttributes = TeamAttributes::paginate(50);
        return view('teamAttributes.index', compact('teamAttributes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teamAttributes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TeamAttributes::create($request->all());
        return redirect()->route('teamAttributes.index')->with('message', 'Item has been added succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TeamAttributes  $teamAttributes
     * @return \Illuminate\Http\Response
     */
    public function show(TeamAttributes $teamAttribute)
    {
        return view('teamAttributes.show', compact('teamAttribute'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeamAttributes  $teamAttributes
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamAttributes $teamAttribute)
    {
        return view('teamAttributes.edit', compact('teamAttribute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeamAttributes  $teamAttributes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamAttributes $teamAttribute)
    {
        $teamAttribute->update($request->all());
        return redirect()->route('teamAttributes.index')->with('message','Item has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeamAttributes  $teamAttributes
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamAttributes $teamAttribute)
    {
        $teamAttribute->delete();
        return redirect()->route('teamAttributes.index')->with('message','Item has been deleted successfully');
    }
}
