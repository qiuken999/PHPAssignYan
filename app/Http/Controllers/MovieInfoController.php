<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MovieInformation;

class MovieInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //movie list
        $movies = MovieInformation :: all() -> toArray();
        return view('movieInfo.readMovie', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //add new movie
        return view('movieInfo.createMovie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //save data
        $this -> validate($request, [
            'title' => 'required',
            'releaseDate' => 'required',
            'description' => 'required',
            'genreType' => 'required'
        ]);
        $movie = new MovieInformation([
            'title' => $request -> get('title'),
            'releaseDate' => $request -> get('releaseDate'),
            'description' => $request -> get('description'),
            'genreType' => $request -> get('genreType')
        ]);
        $movie -> save();

        return redirect() -> route('movieInfo.index') -> with ('success', 'New Movie Record Added');
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
        $movie = MovieInformation::find($id);
        return view('movieInfo.updateMovie', compact('movie', 'id'));
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
        $this -> validate($request, ['title' => 'required',
            'releaseDate' => 'required',
            'description' => 'required',
            'genreType' => 'required'
        ]);

        $movie = MovieInformation::find($id);
        $movie -> title = $request -> get('title');
        $movie -> releaseDate = $request -> get('releaseDate');
        $movie -> description = $request -> get('description');
        $movie -> genreType = $request -> get('genreType');
        $movie -> save();
        return redirect() -> route('movieInfo.index') -> with('success', 'Movie Information Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete
        $movie = MovieInformation::find($id);
        $movie -> delete();
        return redirect() -> route('movieInfo.index') -> with('success', 'Movie Information Deleted');
    }
}
