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
    public function create($slug)
    {
        $season = Season::all()->where('slug', $slug)->first();
        return view('admin.addAnimu', with([
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
        $animu = new Animu;
        $input = $request->all();
        $input['slug'] = str_slug($input['title']);
        Animu::create($input);
        return redirect('/animu/'. $input['slug'] .'/edit');
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
    public function edit($slug)
    {
        $animu = Animu::all()->where('slug', $slug)->first();
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
    public function update(Request $request, $slug)
    {
        $animu = Animu::all()->where('slug', $slug)->first();
        $input = $request->all();
        $input['slug'] = str_slug($input['title']);
        $animu->update($input);
        return redirect('/animu/'. $input['slug'] .'/edit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
