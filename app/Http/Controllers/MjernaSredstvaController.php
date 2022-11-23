<?php

namespace App\Http\Controllers;

use App\Models\MjernaSredstva;
use App\Http\Requests\StoreMjernaSredstvaRequest;
use App\Http\Requests\UpdateMjernaSredstvaRequest;

class MjernaSredstvaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $mjerna_sredstva = MjernaSredstva::all();
            return view('dashboard', compact('mjerna_sredstva' , $mjerna_sredstva));
        }catch (\Exception $exception){
            echo $exception->getMessage();
            echo $exception->getLine();
        }
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
     * @param  \App\Http\Requests\StoreMjernaSredstvaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMjernaSredstvaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MjernaSredstvaController  $mjernaSredstvaController
     * @return \Illuminate\Http\Response
     */
    public function show(MjernaSredstvaController $mjernaSredstvaController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MjernaSredstvaController  $mjernaSredstvaController
     * @return \Illuminate\Http\Response
     */
    public function edit(MjernaSredstvaController $mjernaSredstvaController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMjernaSredstvaRequest  $request
     * @param  \App\Models\MjernaSredstvaController  $mjernaSredstvaController
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMjernaSredstvaRequest $request, MjernaSredstvaController $mjernaSredstvaController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MjernaSredstvaController  $mjernaSredstvaController
     * @return \Illuminate\Http\Response
     */
    public function destroy(MjernaSredstvaController $mjernaSredstvaController)
    {
        //
    }
}
