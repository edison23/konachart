<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Animu;
use App\Season;

class AnimusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $season = Season::find($id);
        return view('admin.createAnimu', with([
            'season' => $season,
            ])
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $animu = new Animu($request->all());
        $season = new Season;

        $season = Season::find($animu->season_id);
        $animu->slug = str_slug($animu->title);
        $animu->season()->associate($season);
        $animu->save();
        return redirect(action('AnimusController@edit', $animu->id));
        // return redirect('/animu/'. $animu->id .'/edit');
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
        $animu = Animu::all()->where('id', $id)->first();
        return view('admin.editAnimu', with([
            'animu' => $animu
            ])
        );
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
        $animu = Animu::all()->where('id', $id)->first();
        $input = $request->all();
        $input['slug'] = str_slug($input['title']);
        $animu->update($input);
        // return redirect('/animu/'. $input['id'] .'/edit');
        return redirect(action('AnimusController@edit', $animu->id));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animu = Animu::find($id); //is this safe?
        $season = $animu->season;
        $animu->delete();
        return redirect(action('SeasonsController@edit', $season->id));
    }

}
