  <div class="form-group col-md-6 col-lg-3 col-sm-12">{{--Add a track id later--}}
      <div class="container">
        <div class="row">
         <form id="delete-form" action="{{ route('parcels.destroy',['9']) }}" method="POST"> 
          <input type="text" class="form-control" id="parcel-id2" placeholder="Parcel ID" name="parcel-id">
            <button type="submit" class="btn btn-track btn-primary btn-delete" onclick="getDelete()">Confirm Delivery</button>
                        <input type="hidden" name="_method" value="delete">
            {{csrf_field() }}
          </form>
        </div>
      </div>     
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