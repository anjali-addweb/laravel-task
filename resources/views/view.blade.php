
<!DOCTYPE html>
<html>
<head>
	<title></title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
    

</head>
<body>
   
<div id="dialog" style="display: none;">
@foreach($data as $row)
    <form method="post" action="/update/{{$row->id}}" enctype="multipart/form-data">
      
            {{ csrf_field() }}
            @endforeach
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="col-md-4"> Name:</td>
                                                    <td class="col-md-8"><input type="text" placeholder="Enter Name Of Employee" class="form-control" name="name"></td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-4"> Contact No:</td>
                                                    <td class="col-md-8"><input type="text" placeholder="Enter Contact No:" class="form-control" name="contact"></td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-4"> Email:</td>
                                                    <td class="col-md-8"><input type="text" placeholder="Enter EmailID:" class="form-control" name="email"></td>
                                                </tr>
                                                <tr>
                                                    <td class="col-md-4"> Image:</td>
                                                    <td class="col-md-8"><input type="file"  class="form-control" name="image" multiple type="file"></td>
                                                </tr>
                                                    <td class="col-md-4">
                                                        <button class="btn btn-success" id="submit"> Submit</button></td>
                                                    <td class="col-md-8">
                                                        
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                      </form>
</div>

    <a class="togglethis">Toggle</a>
        <section>
            <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Contact No</th>
                                                    <th>Email Id</th>
                                                    <th>Image</th>
                                                </tr>
                                            </thead>
                                            @foreach($data as $row)
                                            <tbody>
                                                <tr>
                                                    <td>{{$row->id}}</td>
                                                    <td>{{$row->name}}</td>
                                                    <td>{{$row->contact_no}}</td>
                                                    <td>{{$row->email}}</td>
                                                    
                                                    <td><img src="{{asset('images/'.$row->image)}}" width="100px" height="100px"></td>
                                                    <td>
                                                       <button type="button" class="btn btn-primary"  id="fun">
                                                        Add Data
                                                        </button>
                                                     <a href="/delete/{{$row->id}}" class="delete">Delete</a>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                            <script type="text/javascript">
                                            $(function () {
        
                                            $("#fun").click(function () {

                                                 $('#dialog').show();
                                            });
                                            $("#submit").click(function () {

                                        $('#dialog').hide();
                                            });
                                        });
    
                                        </script>
                                           @endforeach 
                                        </table>

                                        
                                    </section>
                                </div>
                                 <!-- <div class="modal fade" id="adddata"   tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body" id="adddata" >
        <form enctype="multipart/form-data" id="addform">
        {{csrf_field()}}
         <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Name" name="name">
        </div>
      
    <div class="form-group">
    <label for="contact">Contact No:</label>
    <input type="number" class="form-control" id="contact" aria-describedby="emailHelp" placeholder="Enter contact" name="contact">
  </div>

    <div class="form-group">
    <label for="Email">Email address:</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="image">Image:</label>
    <input type="file" class="form-control" id="image" aria-describedby="emailHelp" placeholder="Enter Image" name="image" multiple type="file">
  </div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="button">Save changes</button>
      </div>
  </form>
    </div>
  </div>
</div>
 -->

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
                                
</body>
</html>
