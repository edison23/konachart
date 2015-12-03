<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Season;

class SeasonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current = Season::all()->last();
        $latestAnimus = $current->animus;
        return view('public.season', with([
            'animus' => $latestAnimus,
            'current' => $current,
            ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createSeason');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['slug'] = str_slug($input['name']); // TODO: uniq slugs
        Season::create($input);
        return redirect(action('AdminController@show'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // dd(Season::where('slug', '=', $slug)->get());
        // dd($slug);
        $current = Season::all()->where('slug', $slug)->first();
        $animus = $current->animus;
        return view('public.season', with([
            'animus' => $animus,
            'current' => $current
            ]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $season = Season::where('id', $id)->first();
        $animus = $season->animus;
        return view('admin.editSeason', with([
            'animus' => $animus,
            'season' => $season
            ]));
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
        $season = Season::all()->where('id', $id)->first();
        $input = $request->all();
        $input['slug'] = str_slug($input['name']); //TODO uniq slugs
        $season->update($input);
        return redirect(action('SeasonsController@edit', $season->id));
        // return redirect('/season/'. $input['slug'] .'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $season = Season::find($id);
        $season->delete();
        return redirect(action('AdminController@show'));
    }

    public function createAnimu($slug)
    {
        // $season = Season::where('slug', $slug)->first();
        // return view('admin.createAnimu', with([
        //     'season' => $season,
        //     ]));
    }

    public function storeAnimu(Request $request, $id)
    {
        $season = Season::all()->where('id', $id)->first();
        $input = $request->all();
        $input['slug'] = str_slug($input['title']); //TODO uniq slugs
        $season->animus()->create($input);
    }


}
