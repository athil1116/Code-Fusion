<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        /* Style for the form */
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Style for form labels and input fields */
        label {
            display: block;
            margin-top: 10px;
        }

        textarea, input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        /* Style for the submit button */
        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Style for success message */
        .alert-success {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }

        .close {
            margin-left: 10px;
        }
    </style>
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

                <!-- Alert for success message -->
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{ session()->get('message') }}
                </div>
                @endif

                <form action="{{ url('upload_quiz',['data' => $data,'id' => $id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1>Insert Question</h1>

                    <label for="question">Question:</label>
                    <textarea id="question" name="question" rows="4" cols="50" required></textarea>

                    <label for="image_url">Image URL:</label>
                    <input type="file" id="image_url" name="file">

                    <label for="option1">Option 1:</label>
                    <input type="text" id="option1" name="ans1" required>

                    <label for="option2">Option 2:</label>
                    <input type="text" id="option2" name="ans2" required>

                    <label for="option3">Option 3:</label>
                    <input type="text" id="option3" name="ans3" required>

                    <label for="option4">Option 4:</label>
                    <input type="text" id="option4" name="ans4" required>

                    <label for="correct_option">Correct Option:</label>
                    <select id="correct_option" name="answer" required>
                        <option >select</option>
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                        <option value="option3">Option 3</option>
                        <option value="option4">Option 4</option>
                    </select>

                    

                    <input type="submit" value="Submit Question">
                </form>
            </div>
        </div>
    </div>

    @include('admin.script')
</body>
</html>
