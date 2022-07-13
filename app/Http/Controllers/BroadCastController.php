<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBroadCastRequest;
use App\Http\Requests\UpdateBroadCastRequest;
use App\Models\BroadCast;

class BroadCastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreBroadCastRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBroadCastRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BroadCast  $broadCast
     * @return \Illuminate\Http\Response
     */
    public function show(BroadCast $broadCast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BroadCast  $broadCast
     * @return \Illuminate\Http\Response
     */
    public function edit(BroadCast $broadCast)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBroadCastRequest  $request
     * @param  \App\Models\BroadCast  $broadCast
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBroadCastRequest $request, BroadCast $broadCast)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BroadCast  $broadCast
     * @return \Illuminate\Http\Response
     */
    public function destroy(BroadCast $broadCast)
    {
        //
    }
}
