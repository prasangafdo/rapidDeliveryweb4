<?php

namespace RapidDelivery\Http\Controllers;

use RapidDelivery\Parcel;
use RapidDelivery\CourierParcel;
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
        $parceels = Parcel::all();
       return view('courierparcels.index' , ['parcels'=>$parceels]);
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
     * @param  \RapidDelivery\CourierParcel  $courierParcel
     * @return \Illuminate\Http\Response
     */
    public function show(CourierParcel $courierParcel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \RapidDelivery\CourierParcel  $courierParcel
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
     * @param  \RapidDelivery\CourierParcel  $courierParcel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourierParcel $courierParcel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \RapidDelivery\CourierParcel  $courierParcel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourierParcel $courierParcel)
    {
        //
    }
}
