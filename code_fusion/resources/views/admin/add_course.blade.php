<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>

  
    @include('admin.sidebar')

    @include('admin.navbar')




<div class="content-wrap">
    <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Add Doctors Here</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
<!-- ------------------alert------------------------- -->
@if(session()->has('message'))
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">x</button>
{{session()->get('message')}}
</div>
@endif
<!-- -------------------------alert end--------------- -->



<form action="{{url('upload_course')}}" method="POST" enctype="multipart/form-data">
@csrf
<table align="center">

    <tr>
        <th>Category</th>
        <td>
        <select name="category" class="form-control">
					<option>Select category</option>
                    @foreach($category as $data)
					<option>{{$data->category_name}}</option>
					@endforeach

        </select>
        </td>
    </tr>

    <tr>
        <th>Course Name</th><td><input type="text" name="name" placeholder="Give a Name....." required="" class="form-control"></td>
    </tr>

    

    <tr>
        <th>Details</th><td><input type="text" name="details" placeholder="Give a Address....." required="" class="form-control"></td>
    </tr>


    <tr>
        <th>Fees</th><td><input type="number" name="fees" placeholder="Give a Fee....." required="" class="form-control"></td>
    </tr>

    
   
    <tr>
        <th>Course Image</th><td><input type="file" name="file" placeholder="Give a Product Image....."  class="form-control"></td>
    </tr>

    



<tr><td><input type="submit"  class="btn btn-success"></td></tr>

</table>

</form>





            </div>
        </div>
    </div>
</div>





    @include('admin.script')
</body>

</html>