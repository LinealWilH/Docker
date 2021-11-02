<?php

namespace App\Http\Controllers;

use App\Models\organisation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrganisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('https://api.meraki.com/api/v0/organisations');
        // , [    'apiKey' => ''
        // ]);
        $organisations = json_decode($response-body());
        return view('welcome')->with($organisations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function show(organisation $organisation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function edit(organisation $organisation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, organisation $organisation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(organisation $organisation)
    {
        //
    }
}
