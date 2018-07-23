@extends('layouts/app')
@section('content')
    <script src="{{ asset('../js/jquery-3.3.1.js') }}"></script>
<div class="container">
  <h2>Parcels</h2>

  <p>Folowing table shows non-pickedup parcels.<br> Please select a parcel to view more details.</p>             
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Item</th>
        <th>Pickup State</th>
        <th>Deliver State</th>
      </tr>
    </thead>
    <tbody>
        @foreach($parcels as $parcel)
         <tr>
            <td id="paid_date" name="paid_date"><a href="parcels/{{$parcel->id}}">{{$parcel->item}}</a></td>
            <td>{{$parcel->pickup_state}}</td>
            <td>{{$parcel->delivery_state}}</td>
            <td>
              {{--<form action="{{ route('parcels.pickup')}}" method="post">
                <input type="hidden" name="parcel_id" id="parcel_id" value="{{$parcel->id}}">
          <button type="submit" class="btn btn-primary">Add to vehicle</button>
                  {{csrf_field() }}
            </form>--}}
    
    </td>
        </tr>
<!--        <form method="post" action="{{ route('parcels.create')}}">
 
          {{csrf_field() }}

          <input type="hidden" name="_method" value="put"><!--And this as well-->
        @endforeach
    </tbody>
  </table>


  <div class="container">
    <div class="row">
      <div class="form-group col-md-6 col-lg-3 col-sm-12">
         <a class="btn btn-lg btn-primary col-sm-offset-3" href="/senderparcels/create">Add a Parcel</a>
    </div><!--Right coloumn-->
                  

        
    <div class="form-group col-md-6 col-lg-3 col-sm-12">{{--Add a track id later--}}
      <div class="container">
        <div class="row">
          <form action="{{ route('parcel.location')}}" method="post"  name="parcel-id2">
          <input type="text" class="form-control" id="parcel-id" placeholder="Parcel ID" name="parcel-id">
            <button type="submit" class="btn btn-primary btn-track">Track your Parcel</button>
            {{csrf_field() }}
          </form>
        </div>
      </div>     
    </div>

<div class="form-group col-md-6 col-lg-3 col-sm-12">{{--Add a track id later--}}
      <div class="container">
        <div class="row">
         <form id="delete-form" action="{{ route('parcels.destroy',['9']) }}" method="POST"> 
          <input type="text" class="form-control" id="parcelid2" placeholder="Parcel ID" name="parcel-id">
            <button type="submit" class="btn btn-track btn-primary btn-delete" onclick="getDelete()">Confirm Delivery</button>
                        <input type="hidden" name="_method" value="delete">
            {{csrf_field() }}
          </form>
        </div>
      </div>     
    </div>

    
    <script type="text/javascript">

 $(document).ready(function () {
   // body...
   $('body').css('background-color', 'yellow');
 });



</script>
  @endsection()

<script type="text/javascript">
      function getDelete(){//onclick to delete the data
       // var parcel_id = getElementById(parcelid2).val ;
        console.log(parcel_id);
     var result = confirm('Are you sure you wish to delete user: {{"Parcel name and ID here"}}');//Alert Dialog message
                          if( result ){//If the user clicks on the delete button (onClick())
                                  event.preventDefault();
                                  document.getElementById('delete-form').submit();
                          }
                              
    }
</script>

