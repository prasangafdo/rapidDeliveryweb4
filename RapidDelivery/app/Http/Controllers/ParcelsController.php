<?php

namespace App\Http\Controllers;

use App\Parcel;
use Illuminate\Http\Request;

class ParcelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parcels = Parcel::all();
        return view('parcels.index', ['parcels'=>$parcels]);
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
     * @param  \App\Parcel  $parcel
     * @return \Illuminate\Http\Response
     */
    public function show(Parcel $parcel)
    {
        //
         $dd= Parcel::find($parcel->id);//Check the migration
        return view('parcels.show', ['parcel'=>$dd]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parcel  $parcel
     * @return \Illuminate\Http\Response
     */
    public function edit(Parcel $parcel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parcel  $parcel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parcel $parcel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parcel  $parcel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parcel $parcel)
    {
        //
    }

    public function pickup(Request $request)
    {
        //$dd= Parcel::find($parcel->id);//Check the migration
        //return view('parcels.show', ['parcel'=>$dd]);
       // print($request->input('parcel_id'));

        $pickup = Parcel::where('id', $request->input('parcel_id'))
                            ->update([
                                'status'=>'picked_up'
                            ]);
        if($pickup){
            return redirect()->route('parcels.index')
            ->with('success', 'User updated successfully');//Return message *not working.
        }                        
        return back()->withInput();

    }
}
