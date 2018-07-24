@extends('layouts/app')
@section('content')

<div class="container">
  <h2>Parcels</h2>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-lg-4">
      <p>Folowing table shows all the parcels in the database.<br> Please select a parcel to view more details.</p>             
      </div>
      <div class="col-md-4 col-lg-4">
      <a class="btn btn-lg btn-primary col-sm-offset-3" href="/parcels/create">Add a Parcel</a>
        
      </div>
    </div>
  </div>

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



 <!--    <div class="form-group col-md-6 col-lg-3 col-sm-12">{{--Add a track id later--}}
      <div class="container">
        <div class="row">
         
        </div>
      </div>     
    </div>
 -->

<!-- {{ route('parcels.destroy',['9']) }} -->

    <script type="text/javascript">

 $(document).ready(function () {
   // body...
   //$('body').css('background-color', 'yellow');
   var ddd = $('#deleteparcelid').val();
   
 });



</script>
  @endsection()

<!-- <script type="text/javascript">
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
 -->
 <script type="text/javascript">
      function getDelete(){//onclick to delete the data
      var ddd = $('#deleteparcelid').val();//Getting delete parcel id
                $('#delete-form').attr('action', '{{ route("parcels.destroy", [$parcel->id]) }}');

     var result = confirm('Are you sure you wish to delete user: ' + ddd);//Alert Dialog message
                          if( result ){//If the user clicks on the delete button (onClick())
                                  event.preventDefault();
                                  document.getElementById('delete-form').submit();
                          }                              
    }
    // $('#delete-form').attr('action', '{{ route("parcels.destroy",' $("#deleteparcelid").val();' ) }}');
</script>
