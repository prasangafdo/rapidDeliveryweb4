<?php

namespace App\Http\Controllers;

use App\Parcel;
use App\Location;
use App\SenderParcel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SenderParcelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parcels = Parcel::all();
        return view('senderparcels.index', ['parcels'=>$parcels]);
       // print($parcels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('senderparcels.create');
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
        // if(Auth::check()){
            $parcel =Parcel::create([
                'item'=>$request->input('item'),
                'pickup_address'=>$request->input('pickup_address'),
                'pickup_state'=>$request->input('pickup_state'),
                'delivery_address'=>$request->input('delivery_address'),
                'delivery_state'=>$request->input('delivery_state'),               
                'status'=>'available',               
            ]);
            $parcel_sender =SenderParcel::create([
                'sender_id'=>'1',//Change later
                'parcel_id'=>$parcel->id,             
            ]);

            if($parcel && $parcel_sender){
                return redirect()->route('parcels.show', ['parcel'=>$parcel->id])
                ->with('success', 'Parcel added successfully');
            // if ($parcel_sender) {
            //     print("Done");
            
            }
       // return redirect()->route('senderparcels.show', 5)->with('success', 'Parcel added successfully');

        // }
        // else
           // return('error');
            //return back()->withInput()->with('error', 'Error saving data');//Not working
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SenderParcel  $senderParcel
     * @return \Illuminate\Http\Response
     */
    public function show(Parcel $parcel)
    {
        $dd= Parcel::find($parcel->id);//Check the migration
       //return view('userparcels.show', ['parcel'=>$dd]);
         print($dd);
        //return view('senderparcels.show', ['parcel'=>$dd]);

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
    public function location(Request $request)
    {
       // $dd = Location::all();
       // return view('parcels.location');
        
       
     // $loc = Location::where('id', $request->input('parcel-id'));

      //$loc = Location->where('parcel_id', 1);
        $loc = DB::table('locations')->where('parcel_id', ($request->input('parcel-id')))->get();
        //echo $user->latitude."<br>";
       // echo $user->longitude;

      return view('parcels.location', ['locations'=>$loc]);

    

        // $pickup = Parcel::where('id', $request->input('parcel_id'))
        //                     ->update([
        //                         'status'=>'picked_up'
        //                     ]);
        // if($pickup){
        //     return redirect()->route('courierparcels.index')
        //     ->with('success', 'User updated successfully');//Return message *not working.
        // }                        
        // return back()->withInput();

    }
}

    //Generated code
//     public function show(SenderParcel $senderParcel)
//     {
//        //   $dd= Parcel::find($parcel->id);//Check the migration
//        // //return view('userparcels.show', ['parcel'=>$dd]);
//        // //  print($dd);
//        //  return view('senderparcels.show', ['parcel'=>$dd]);
//         print("arg");
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\SenderParcel  $senderParcel
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(SenderParcel $senderParcel)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\SenderParcel  $senderParcel
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, SenderParcel $senderParcel)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\SenderParcel  $senderParcel
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(SenderParcel $senderParcel)
//     {
//         //
//     }
// }
