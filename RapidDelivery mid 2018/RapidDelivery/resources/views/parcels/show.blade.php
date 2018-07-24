@extends('layouts/app')
@section('content')
<div class="container col-lg-10 col-md-10 pull-left">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#about">About</a></li>
            <li role="presentation"><a href="#">Contact</a></li>
          </ul>
        </nav>
      </div>

      <div class="jumbotron">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h1 class="text-primary">{{$parcel->item}}</h1>
            </div>
            
            <!-- Delete form -->
          <div class="form-group col-md-4 col-lg-4 col-sm-12 ">{{--Add a track id later--}}
            <div class="container">
              <div class="row">
               <form id="delete-form" action="#" method="POST"> <!--Check how to do this with JQ-->
                  <button type="submit" class="btn btn-lg btn-track btn-primary btn-delete" onclick="getDelete()">Confirm Delivery</button>
                              <input type="hidden" name="_method" value="delete">
                  {{csrf_field() }}
                </form>
              </div>
            </div>     
          </div>
          <!-- Delete form ends -->
          <!-- Track form starts -->
          <div class="form-group col-md-4 col-lg-4 col-sm-12 ">
             <form action="{{ route('parcel.location')}}" method="post"  name="parcel-id2">
                <input type="hidden" class="form-control" id="parcel-id" placeholder="Parcel ID" name="parcel-id" value="{{$parcel->id}}">
                  <button type="submit" class="btn btn-lg btn-primary btn-track">Track this Parcel</button>
                  {{csrf_field() }}
              </form>
          </div>
          <!-- Track form ends -->
          </div>
        </div>

      

      </div>

      <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Student Details</div>
      <div class="panel-body">
        <p>This table shows the details of each and every user</p>
      </div>
    
      <!-- Table -->
        <div class=" col-lg-8 col-lg-offset-2">
           <table class="table">
                <tr>
                    <th>Item</th>
                    <th>Pickup Address</th>
                    <th>Delivery Address</th>
                    <th>Parcel status</th> 
                </tr>

                <tr>
                  
                    <td>{{$parcel->item}}</td>
                    <td>{{$parcel->pickup_address." ".$parcel->pickup_state}}</td>
                    <td>{{$parcel->delivery_address." ".$parcel->delivery_state}}</td>
                    <td>{{$parcel->status}}</td>
                    
                </tr>

                <!--<th>- Table heading-->
                <!--<th>- Table data-->
            </table>
        </div>
  </div>



  <h1 class="col-lg-10" id="about">About</h1><!--Move this to the welcome blade-->
  <p></p>
<!--End about-->
</div>

<div class ="col-lg-2 col-md-2 pull-right">
  <div class="sidebar-module sidebar-module-inset">
    <h4>About</h4>
    <p style="text-align:center; font-size:14px">This is the web interface to Edit, Update and/or Delete records of the  <em>ABC International school Student Management System</em> </p>
  </div>

  <div class="sidebar-module">
    <h4>User Management</h4>
    <ol class="list-unstyled"><!--No need to add a user in the show.blade-->
      <li><a href="/users/create">Add a user</a></li>
      <li><a href="/students/create">Add a student</a></li>
      <li><a href="/students/{{$parcel->id}}/edit">Edit</a></li>
      <li><a href="/students">View all students</a></li>

<!--Delete code copied from "daveozoalor's github"-->

<li>            

      {{--  <!--Improved code with a function-->  --}}
      <a href="#" onclick="getDelete()"> Delete</a>

      <form id="delete-form" action="{{ route('parcels.destroy',[$parcel]) }}" 
        method="POST" style="display: none;"> <!--Link to the delete action in the controller-->
                <input type="hidden" name="_method" value="delete">
                {{ csrf_field() }}
      </form> 
      </li>

{{--Delete code ends --}}
    </ol>
  </div>

  <div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
      <li><a href="#">March 2014</a></li>
      <li><a href="#">February 2014</a></li>
      <li><a href="#">January 2014</a></li>
      <li><a href="#">December 2013</a></li>
      <li><a href="#">November 2013</a></li>
      <li><a href="#">October 2013</a></li>
      <li><a href="#">September 2013</a></li>
      <li><a href="#">August 2013</a></li>
      <li><a href="#">July 2013</a></li>
      <li><a href="#">June 2013</a></li>
      <li><a href="#">May 2013</a></li>
      <li><a href="#">April 2013</a></li>
    </ol>
  </div>
  
</div>
    <hr/>    
    <footer class="footer col-sm-7 col-sm-offset-3">
        <p style="text-align:center">© 2018 Company, Inc.</p>

        <!-- Delete function -->
         <script type="text/javascript">
      function getDelete(){//onclick to delete the data
      
     var result = confirm('Are you sure you wish to delete user: {{$parcel->item}}');//Alert Dialog message
                          if( result ){//If the user clicks on the delete button (onClick())
                                  event.preventDefault();
                                  document.getElementById('delete-form').submit();
                          } 
                          else {

                          }                            
            }
            // $('#delete-form').attr('action', '{{ route("parcels.destroy",' $("#deleteparcelid").val();' ) }}');
        </script>
      </footer>

    @endsection()



