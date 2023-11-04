<!DOCTYPE html>
<html lang="en">

<head>
    <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete this?');
        }

        function approve() {
            return confirm('Are you sure you want to Approve this?');
        }

        function reject() {
            return confirm('Are you sure you want to reject this?');
        }
    </script>
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
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->

                    <!-- Upload Courses -->
                    <div class="container">
                        <div class="row">
<div class="col-md-6">
    <h2>Uploaded Notes</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Main Title</th>
                <th>Sub Title</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($notes as $note)
                <tr>
                    <td>{{ $note->main_title }}</td>
                    <td>{{ $note->sub_title }}</td>

                    <td>
                        @if ($note->type === null)
                            <a href="{{url('view_material', ['id' => $note->id]) }}" class="btn btn-info">View</a>
                        @else
                        <a href="{{url('add_questions',['data' => $data,'id' => $note->id]) }}" class="btn btn-danger">Add Questions</a>

                        @endif
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>



                            <div class="col-md-6">

                            <h1>Select an Option</h1>

                            <label for="pageSelector" >Select a page:</label>
                            <select id="pageSelector" class="form-control">
                                <option value="page1">Add course Material</option>
                                <option value="page2">Add Quiz Slot</option>
                            </select>

<div id="page1" style="display: none;">
                            
                                <h1>Upload Notes</h1>
                                <div class="form-validation">
                                <form class="form-valide" action="{{ url('store', ['data' => $data]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="course_title">Course Title <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="course_title" name="main_title" placeholder="Enter Course Title..">
                                            </div>
                                            <label class="col-lg-4 col-form-label" for="sub_title">Sub Title <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="sub_title" name="sub_title" placeholder="Sub Title..">
                                            </div>

                                            <label class="col-lg-4 col-form-label" for="course_details">Course Details <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="course_details" name="description" rows="4" cols="50" placeholder="Course Details.."></textarea>
                                            </div>

                                            <label class="col-lg-4 col-form-label" for="course_details">Syntax <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="course_details" name="syntax" rows="4" cols="50" placeholder="Syntax.."></textarea>
                                            </div>

                                            <label class="col-lg-4 col-form-label" for="media">Upload Media (Image or Video) <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" name="file" placeholder="Upload Media.." accept="image/*,video/*">
                                            </div>
                                            <br>
                                            <div class="col-lg-6">
                                                <button type="submit" class="btn btn-success" onclick="return verify()">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
<br>
<br>
<div id="page2" style="display: none;">
    
    <a href="{{ url('add_quiz_slot',['data' => $data]) }}" class="btn btn-success">Add Quiz Slot</a>
</div>


</div>


                               
                            

                            
</div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer">
                            <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- @include('admin.script') -->

    <script>
        // Function to show the selected page
        function showPage() {
            var select = document.getElementById("pageSelector");
            var page1 = document.getElementById("page1");
            var page2 = document.getElementById("page2");

            if (select.value === "page1") {
                page1.style.display = "block";
                page2.style.display = "none";
            } else if (select.value === "page2") {
                page1.style.display = "none";
                page2.style.display = "block";
            }
        }

        // Add an event listener to the select element
        document.getElementById("pageSelector").addEventListener("change", showPage);

        // Initially show the default selected page
        showPage();
    </script>

    <script src="admin/assets/js/lib/jquery.min.js"></script>
    <script src="admin/assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="admin/assets/js/lib/menubar/sidebar.js"></script>
    <script src="admin/assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <!-- bootstrap -->
    <script src="admin/assets/js/lib/bootstrap.min.js"></script>
    <script src="admin/assets/js/scripts.js"></script>
    <!-- script init-->
    <script src="admin/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="admin/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="admin/assets/js/lib/data-table/buttons.flash.min.js"></script>
    <script src="admin/assets/js/lib/data-table/jszip.min.js"></script>
    <script src="admin/assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="admin/assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="admin/assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="admin/assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="admin/assets/js/lib/data-table/datatables-init.js"></script>
</body>

</html>
