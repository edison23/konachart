<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\LinkedSite;

class LinkedSiteController extends Controller
{
    public function store(Request $request)
    {
        $site = new LinkedSite($request->all());
        $site->save();
        return redirect(action('LinkedSiteController@index'));
    }

    public function index()
    {
        $sites = LinkedSite::all();
        return view('admin.list', with([
            'items' => $sites,
            'title' => 'Prehled linkovanych webu',
            'name' => 'linkedSite'
            ]));
    }


    public function create()
    {
        return view('admin.createLinkedSite');
    }
}
