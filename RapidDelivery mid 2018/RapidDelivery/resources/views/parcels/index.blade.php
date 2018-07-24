@extends('layouts/app')
@section('content')

<div class="container">
  <h2>Parcels</h2>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-lg-4">
      <p>Folowing table shows non-pickedup parcels.<br> Please select a parcel to view more details.</p>             
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
<!-- 	      <form method="post" action="{{ route('parcels.create')}}">
 
          {{csrf_field() }}

          <input type="hidden" name="_method" value="put"><!--And this as well-->
  			@endforeach
    </tbody>
  </table>
</div>

<script type="text/javascript">
// $( document ).ready(function() {
//     $('tr').click(function(){
//      	window.location = $(this).data('href');
// 		return false;
// 		});

// 		$("td > a").on("click",function(e){
// 		  e.stopPropagation();
// 		});
// });

$( document ).ready(function() {
  function pickup() {
  	window.location ="parcels.pickup";
  }

  $(console.log($('');
});
</script>
</html>



@endsection()

