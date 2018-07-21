<?php

namespace App\Http\Controllers;

use App\CourierParcel;
use Illuminate\Http\Request;

class CourierParcelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        print("This is courierparcels controller");
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
     * @param  \App\CourierParcel  $courierParcel
     * @return \Illuminate\Http\Response
     */
    public function show(CourierParcel $courierParcel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CourierParcel  $courierParcel
     * @return \Illuminate\Http\Response
     */
    public function edit(CourierParcel $courierParcel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CourierParcel  $courierParcel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourierParcel $courierParcel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CourierParcel  $courierParcel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourierParcel $courierParcel)
    {
        //
    }
}
