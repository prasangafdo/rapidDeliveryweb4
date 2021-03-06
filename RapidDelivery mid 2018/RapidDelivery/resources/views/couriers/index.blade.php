
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
  <title>Couriers _Rapid Delivery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  --}}


<div class="container">
  <h2>Couriers</h2>
  <p>Folowing table shows all the registered couriers.<br> Please select a courier to view more details.</p>             
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Courier's Name</th>
        <th>Contact Number</th>
      </tr>
    </thead>
    <tbody>
        @foreach($couriers as $courier)
         <tr>
            <td id="courier_id" name="courier_id"><a href="couriers/{{$courier->id}}">{{$courier->name}}</a></td>
            <td>{{$courier->contact}}</td>
            <td>
    </td>
        </tr>
        @endforeach
    </tbody>
  </table>

</div>

<script type="text/javascript">
// $( document ).ready(function() {
//     $('tr').click(function(){
//        window.location = $(this).data('href');
//    return false;
//    });

//    $("td > a").on("click",function(e){
//      e.stopPropagation();
//    });
// });

$( document ).ready(function() {
  function pickup() {
    window.location ="parcels.pickup";
  }
});
</script>
</html>



@endsection()

