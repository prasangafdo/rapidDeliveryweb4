@extends('layouts/app')<!--Using the same code as the edit.blade but have removed the values and id-->
@section('content')

<div class="container col-lg-10 col-md-10 pull-left">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">About</a></li>
            <li role="presentation"><a href="#">Contact</a></li>
          </ul>
        </nav>
        <h3 class="text-muted"></h3><!--Setting the name-->
      </div>
<hr/>

    <div class=" col-lg-10 col-lg-offset-1">

          <form method="post" action="{{ route('parcels.store')}}">
          {{--Since the method is post, we do not need a hidden value --}} 
   
          {{csrf_field() }}<!--We need to add this in order to work a form in laravel-->
          
          <div class="form-group">
            <label for="name">Item</label>
           <input type="text" 
                  required
                  id="item"
                  name="item"
                  class="form-control" 
                  placeholder="Item"/>
          </div>
          <div class="form-group">
            <label for="student_address">Pickup Address</label>
           <input type="text" 
                  required
                  id="pickup_address"
                  name="pickup_address"
                  class="form-control" 
                  placeholder="Pickup Address"/>
          </div>
            <div class="form-group">
              <label for="pickup_state">Pickup State (City)</label>
             <input type="text" 
                    required
                    id="pickup_state"
                    name="pickup_state"
                    class="form-control" 
                    placeholder="Pickup State (City)"/>
            </div>
            <div class="form-group">
              <label for="delivery_address">Delivery Address</label>
             <input type="text"
                    required
                    id="delivery_address"
                    name="delivery_address" 
                    class="form-control"
                    placeholder="delivery_address"/>
            </div> 
            <div class="form-group">
              <label for="delivery_state">Delivery State (City)</label>
             <input type="text"
                    required
                    id="delivery_state"
                    name="delivery_state" 
                    class="form-control"
                    placeholder="delivery_state"/>
            </div>  
            <div class="form-group">
              <label for="sender_id">Sender ID</label>
                  <select class="form-control" 
                    required
                    id="sender_id"
                    name="sender_id" 
                    class="form-control"
                    placeholder="sender_id">

                         @foreach ($senders as $sender) 
                         <option>{{$sender->sender_id}}</option>
                         @endforeach

                  </select>
                 
            </div>  

            <button type="submit" class="btn btn-primary col-md-offset-4 col-md-4">Submit</button>
          </form>
    </div>


    </div>


<div class ="col-lg-2 col-md-2 pull-right">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p style="text-align:center; font-size:14px">This is the web interface to Edit, Update and/or Delete records of the  <em>ABC International school Student Management System</em> </p>
          </div>

          <div class="sidebar-module">
            <h4>User Management</h4>
            <ol class="list-unstyled">
              <li><a href="/students/create">Add a student</a></li>
              <li><a href="/users">All users</a></li>
              <li><a href="/students/">All students</a></li>
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
</div>
<hr/>    
      <footer class="footer col-sm-7 col-sm-offset-3">
        <p style="text-align:center">© 2018 Company, Inc.</p>
      </footer>

    @endsection()