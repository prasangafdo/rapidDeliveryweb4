{{--@foreach($parcel as $parcels)
{{$parcels}}
<br>
{{$parcels->parcelUser}}
@endforeach--}}

@extends('layouts/app')
@section('content')
{{--
<div class="col-sm-7 col-sm-offset-2">
    <div class="panel panel-primary">
        <div class="panel-heading">Select a parcel</div>
    <div class="panel-body">
        <ul class="list-group">
             @foreach($parcels as $parcel)
             <li class="list-group-item"><a href ="/parcels/{{$parcel->id}}">{{$parcel->pickup_state}}</li>
            @endforeach
        </ul>
        <a class="btn btn-lg btn-primary col-sm-offset-1" href="/parcels/create">Add a Parcel</a>
        <hr/>
    </div>
</div>
<hr/>
<footer class="footer col-sm-6 col-sm-offset-3">
        <p style="text-align:center">© 2018 Company, Inc.</p>
</footer>
</div>


<!--  -->

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	--}}


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
<!-- 	      <form method="post" action="{{ route('parcels.create')}}">
 
          {{csrf_field() }}

          <input type="hidden" name="_method" value="put"><!--And this as well-->
  			@endforeach
    </tbody>
  </table>

  <div class="container">
    <div class="row">
      <div class="form-group col-md-6 col-lg-6 col-sm-12">
         <a class="btn btn-lg btn-primary col-sm-offset-3" href="/senderparcels/create">Add a Parcel</a>
    </div><!--Right coloumn-->
                  

        
    <div class="form-group col-md-6 col-lg-4 col-sm-12">{{--Add a track id later--}}
      <div class="container">
        <div class="row">
          <form action="{{ route('parcel.location')}}" method="post"  name="parcel-id2">
          <input type="text" class="form-control" id="parcel-id" placeholder="Parcel ID" name="parcel-id">
            <button type="submit" class="btn btn-primary btn-track">Track your Parcel</button>
            {{csrf_field() }}
          </form>
        </div>
         <div class="row">{{--start--}}
          
          <a href="#" onclick="getDelete()"> Delete</a>

      <form id="delete-form" action="{{ route('parcels.destroy',['3']) }}" 
        method="POST" style="display: none;"> <!--Link to the delete action in the controller-->
                <input type="hidden" name="_method" value="delete">
                {{ csrf_field() }}
      </form> 
        </div>{{--end--}}
      </div>
          
    </div>
    </div>
  </div><!--Right coloumn ends-->

         
         
</div>

    <script type="text/javascript">
      function getDelete(){//onclick to delete the data
     var result = confirm('Are you sure you wish to delete user: {{"Parcel name and ID here"}}');//Alert Dialog message
                          if( result ){//If the user clicks on the delete button (onClick())
                                  event.preventDefault();
                                  document.getElementById('delete-form').submit();
                          }
                              
    }
    </script>

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
});
</script>
</html>



@endsection()

