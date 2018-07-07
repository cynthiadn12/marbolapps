<?php

namespace App\Http\Controllers;

use App\Player;
use App\PlayerAttributes;
use App\Http\Requests\PlayerAttributesRequest;
use Illuminate\Http\Request;

class PlayerAttributesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playerAttributes = PlayerAttributes::paginate(50);
        //$playerAttr = DB::table('player_attributes')->paginate(1
        return view('playerAttributes.index', compact('playerAttributes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('playerAttributes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlayerAttributesRequest $request)
    {
        PlayerAttributes::create($request->all());
        return redirect()->route('playerAttributes.index')->with('message', 'Item has been added succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PlayerAttributes  $playerAttributes
     * @return \Illuminate\Http\Response
     */
    public function show(PlayerAttributes $playerAttribute)
    {
        return view('playerAttributes.show', compact('playerAttribute'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PlayerAttributes  $playerAttributes
     * @return \Illuminate\Http\Response
     */
    public function edit(PlayerAttributes $playerAttribute)
    {
        return view('playerAttributes.edit', compact('playerAttribute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PlayerAttributes  $playerAttributes
     * @return \Illuminate\Http\Response
     */
    public function update(PlayerAttributesRequest $request, PlayerAttributes $playerAttribute)
    {
        $playerAttribute->update($request->all());
        return redirect()->route('playerAttributes.index')->with('message','Item has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PlayerAttributes  $playerAttributes
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlayerAttributes $playerAttribute)
    {
        $playerAttribute->delete();
        return redirect()->route('playerAttributes.index')->with('message','Item has been deleted successfully');
    }

}
