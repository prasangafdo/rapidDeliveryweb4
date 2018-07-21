<?php

namespace App\Http\Controllers;

use App\Parcel;
use App\SenderParcel;
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
        $sender = SenderParcel::all()->unique('sender_id');//To get the distinct value. (Remove repetitions).
       return view('parcels.create', ['senders'=>$sender]);
        //print($sender);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
      //  if(Auth::check()){
            $parcel =Parcel::create([
                'item'=>$request->input('item'),
                'pickup_address'=>$request->input('pickup_address'),
                'pickup_state'=>$request->input('pickup_state'),
                'delivery_address'=>$request->input('delivery_address'),
                'delivery_state'=>$request->input('delivery_state'),               
                'status'=>'available',               
            ]);

            $parcel_sender =SenderParcel::create([
                'sender_id'=>$request->input('sender_id'),//Change later
                'parcel_id'=>$parcel->id,             
            ]);

            if($parcel_sender){
                return redirect()->route('parcels.show', ['parcel'=>$parcel->id])
                ->with('success', 'Parcel added successfully');
           // }
         }
        // else
         //   return('error');
            //return back()->withInput()->with('error', 'Error saving data');//Not working
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Parcel  $parcel
     * @return \Illuminate\Http\Response
     */
    public function show(Parcel $parcel)
    {
        $dd= Parcel::find($parcel->id);//Check the migration
       //return view('userparcels.show', ['parcel'=>$dd]);
       //  print($dd);
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
            return redirect()->route('courierparcels.index')
            ->with('success', 'User updated successfully');//Return message *not working.
        }                        
        return back()->withInput();

    }
    public function location(Request $request)
    {
        return view('parcels.location');
    }
}
