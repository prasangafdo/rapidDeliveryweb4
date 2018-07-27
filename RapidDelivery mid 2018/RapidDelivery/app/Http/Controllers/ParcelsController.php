<?php

namespace RapidDelivery\Http\Controllers;

use RapidDelivery\Parcel;
use RapidDelivery\SenderParcel;
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

            if($parcel_sender){//Add $parcel to condition and check as well
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
     * @param  \RapidDelivery\Parcel  $parcel
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
     * @param  \RapidDelivery\Parcel  $parcel
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
     * @param  \RapidDelivery\Parcel  $parcel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parcel $parcel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \RapidDelivery\Parcel  $parcel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parcel $parcel)
    {
        //
        //echo "This is destroy";

          $find_parcel = Parcel::find($parcel->id);

          if ($find_parcel->delete()) {
              echo "Parcel deleted";
          }
          else
            echo "Something went wrong";

    //     if($findStudent->delete()){
    //         return redirect()->route('students.index')
    //         ->with('success', 'Student Deleted Successfully');
    //     }
  
    //     return back()->withInput()->with('error', 'Student could not be deleted.');
  
    //   return ($student);
    // }
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

}
