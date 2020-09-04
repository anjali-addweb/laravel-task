<!DOCTYPE html>
<html>
<head>
	<title>Employee</title>
	
</head>
<body>
	<a class="togglethis">Toggle</a>
        <div class="table-box">
            <form method="post" action="{{route('employee.store')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
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
                                                        <button class="btn btn-success"> Submit</button></td>
                                                    <td class="col-md-8">
                                                        
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                      </form>
                                    </div>
                                    
</body>
</html>