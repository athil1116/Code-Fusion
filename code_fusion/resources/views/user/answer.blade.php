<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Page Title</title>
    
    <style>
    /* Style for course cards */
    .course-card {
        margin: 20px 0;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    /* Style for headings and subheadings */
    .course-card h2, .course-card h3 {
        font-weight: bold;
    }

    /* Style for description */
    .course-card p {
        font-size: 16px;
        line-height: 1.5;
        text-align: justify;
    }

    /* Style for syntax card */
    .syntax-card {
        background-color: #000;
        color: #fff;
        padding: 10px;
        border: 1px solid #222;
    }

    .syntax-card pre {
        font-family: Consolas, monospace;
        white-space: pre-wrap;
        margin: 0;
        color: #fff; /* Set the code text color to white */
    }

    .syntax-card code {
        display: block;
    }
    </style>

    <style>
        /* Style for the quiz container */
        .quiz-container {
            position: relative;
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Style for question text */
        .question {
            font-size: 18px;
            margin-bottom: 10px;
        }

        /* Style for options */
        .options label {
            display: block;
            margin-bottom: 5px;
            cursor: pointer;
            position: relative;
            padding-left: 35px;
        }

        .options input[type="radio"] {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        /* Style for the custom radio button */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
            border-radius: 50%;
        }

        /* Add more styling for the radio button as needed */

        /* On mouse-over, add a grey background color */
        .options label:hover .checkmark {
            background-color: #ccc;
        }

        /* When the radio button is checked, add a blue background */
        .options input[type="radio"]:checked + .checkmark {
            background-color: #2196F3;
        }

        /* Create the indicator (the dot/circle - hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the indicator (dot/circle) when checked */
        .options input[type="radio"]:checked + .checkmark:after {
            display: block;
        }

        /* Style the indicator (dot/circle) */
        .checkmark:after {
            top: 7px;
            left: 7px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: white;
        }

        /* Style for the submit button */
        .submit-button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-button:hover {
            background-color: #0056b3;
        }

        /* Style for the countdown timer */
        /* Style for the countdown timer container */
.score {
    position: absolute;
    top: 0;
    right: 0;
    background-color: red;
    color: black;
    padding: 10px;
    border-radius: 50%;
}

.timer {
    font-size: 18px;
    margin: 0;
}

    </style>
</head>
<body>
    @include('user.header')
    <br>
    <br>
    <br>

    
    <div class="quiz-container">
    

    
    <div>

    @foreach ($answer as $data)
      
    <div class="question">
            <h4>{{ $loop->iteration }}: {{ $data->question }}</h4>
    </div>
    <div class="options">
    @if($data->answer == 'a')
    <label>
        <input type="radio" value="a" checked><span class="checkmark"></span> a) {{ $data->ans1 }}
    </label>
    <label>
        <input type="radio" value="b"><span class="checkmark"></span> b) {{ $data->ans2 }}
    </label>
    <label>
        <input type="radio" value="c"><span class="checkmark"></span> c) {{ $data->ans3 }}
    </label>
    <label>
        <input type="radio" value="d"><span class="checkmark"></span> d) {{ $data->ans4 }}
    </label>
@elseif($data->answer == 'b')
    <label>
        <input type="radio" value="a"><span class="checkmark"></span> a) {{ $data->ans1 }}
    </label>
    <label>
        <input type="radio" value="b" checked><span class="checkmark"></span> b) {{ $data->ans2 }}
    </label>
    <label>
        <input type="radio" value="c"><span class="checkmark"></span> c) {{ $data->ans3 }}
    </label>
    <label>
        <input type="radio" value="d"><span class="checkmark"></span> d) {{ $data->ans4 }}
    </label>
@elseif($data->answer == 'c')
    <label>
        <input type="radio" value="a"><span class="checkmark"></span> a) {{ $data->ans1 }}
    </label>
    <label>
        <input type="radio" value="b"><span class "checkmark"></span> b) {{ $data->ans2 }}
    </label>
    <label>
        <input type="radio" value="c" checked><span class="checkmark"></span> c) {{ $data->ans3 }}
    </label>
    <label>
        <input type="radio" value="d"><span class="checkmark"></span> d) {{ $data->ans4 }}
    </label>
@elseif($data->answer == 'd')
    <label>
        <input type="radio" value="a"><span class="checkmark"></span> a) {{ $data->ans1 }}
    </label>
    <label>
        <input type="radio" value="b"><span class="checkmark"></span> b) {{ $data->ans2 }}
    </label>
    <label>
        <input type="radio" value="c"><span class="checkmark"></span> c) {{ $data->ans3 }}
    </label>
    <label>
        <input type="radio" value="d" checked><span class="checkmark"></span> d) {{ $data->ans4 }}
    </label>
@endif

        
    </div>
        <p>Correct Answer: {{ $data->answer }}</p>
    @endforeach
    <br>
    <br>
    <a href="{{ url('course_meterial', ['id' => $id]) }}" class="btn btn-warning"> Continue Learning</a>
    </div>





    </div>
</form>
<br>
    <br>
    <br>

    @include('user.footer')
</body>

</html>
