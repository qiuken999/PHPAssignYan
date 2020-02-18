<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ActorInformation;

class ActorInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //actor list
        $actors = ActorInformation :: all() -> toArray();
        return view('actorInfo.readActor', compact('actors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //add new actor
        return view('actorInfo.createActor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //save new data
        $this -> validate($request, [
            'name' => 'required',
            
        ]);
        $actor = new ActorInformation([
            'name' => $request -> get('name'),
            
        ]);
        $actor -> save();

        return redirect() -> route('actorInfo.index') -> with ('success', 'New Actor Record Added');
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
        //edit single data
        $actor = ActorInformation::find($id);
        return view('actorInfo.updateActor', compact('actor', 'id'));
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
        //save updated data
        $this -> validate($request, [
            'name' => 'required',
            
        ]);

        $actor = ActorInformation::find($id);
        $actor -> name = $request -> get('name');
        
        $actor -> save();
        return redirect() -> route('actorInfo.index') -> with('success', 'Actor Information Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete actor
        $actor = ActorInformation::find($id);
        $actor -> delete();
        return redirect() -> route('actorInfo.index') -> with('success', 'Actor Information Deleted');
    }
}
