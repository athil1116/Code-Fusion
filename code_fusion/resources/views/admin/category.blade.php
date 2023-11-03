<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <script>    
        function ver()
  {
  
    var category= document.getElementById("t1").value;
   
    
    

    
    // var dob=document.getElementById("t12");
    let allowedMimes = ['png', 'jpg', 'jpeg']; //allowed image mime types
    let allowedMimesbook = ['pdf', 'docx', 'pptx'];
    let maxMb = 2; //maximum allowed size (MB) of image 
    let maxMb1=5;      
    var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
    var letters = /^[A-Za-z]+$/;

    if(category=='')
    {
      alert('Please enter  Category Name !');
      return false;
    }

    
        
  }

  function confirmDelete() {
        return confirm('Are you sure you want to delete this category?');
    }
    </script> 
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
                                <h1>Hello, <span>Welcome to Category</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">



                                <!-- ------------------------------------------------------------------------ -->
                                @if(session()->get('message'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    {{session()->get('message')}}
                                 </div>
                                @endif
                                <!-- --------------------------------------------------------------------------------- -->
                                <!-- ------------------error alert------------------------- -->
                                @if(session()->has('error'))
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">x</button>
                                        {{session()->get('error')}}
                                    </div>
                                @endif
                                <!-- -------------------------error alert end--------------- -->





                                <div class="form-validation">
                                    <form class="form-valide" action="{{url('add_category')}}" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="hidden" value='h'>
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Add Category <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="t1" name="category" placeholder="Enter Category Name..">
                                            </div>
                                            <label class="col-lg-4 col-form-label" for="val-username">Add Description <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="t1" name="desc" placeholder=" Description..">
                                            </div>
                                            <label class="col-lg-4 col-form-label" for="val-username">Add Image <span class="text-danger">*</span></label>

                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" name="file" placeholder=" Description..">
                                            </div>

                                            <br>
                                            <div class="col-lg-2">
                                                <button type="submit" class="btn btn-primary" onclick="return ver()">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                   
                </div>
                
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <!-- ------------------------------------------------------------------------ -->
                                @if(session()->get('messagee'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    {{session()->get('messagee')}}
                                 </div>
                                @endif
                                <!-- --------------------------------------------------------------------------------- -->
                                <!-- ------------------error alert------------------------- -->
                                @if(session()->has('errore'))
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">x</button>
                                        {{session()->get('errore')}}
                                    </div>
                                @endif
                                <!-- -------------------------error alert end--------------- -->
                                    <div style="overflow-x:auto">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Category Name</th>
                                                    <th>Created Date</th>
                                                    <th>Updated Date</th>
                                                    <th>Edit</th>
                                                    <th>Action</th>
                                                    
                                              
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($datas as $data)
                                                <tr>
                                                <td><img src="/uploads/{{$data->image}}" alt="Product image" heigh="150px" width="150px" ></td>
                                                <td>{{$data->category_name}}</td>
                                                <td>{{$data->created_at}}</td>
                                                <td>{{$data->updated_at}}</td>
                                                <td><a href="{{url('edit_category',$data->id)}}" class="btn btn-primary">Edit</a></td>
                                                <td><a href="{{url('delete_category',$data->id)}}" class="btn btn-danger" onclick="return confirmDelete()">Delete</a></td>
                                                </tr>
                                                @endforeach
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                








            






                </section>
            </div>
        </div>
    </div>






                
        </div>
</div>

























    @include('admin.script')
</body>

</html>