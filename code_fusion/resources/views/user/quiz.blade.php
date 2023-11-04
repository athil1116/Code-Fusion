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
.timer-container {
    position: absolute;
    top: 0;
    right: 0;
    background-color: orange;
    color: white;
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

    <form action="{{url('submmit_quiz',['id' => $id])}}" method="POST">
    @csrf
    <div class="quiz-container">
    <div class="timer-container">
        <div class="timer" id="countdown">25:00</div>
    </div>

        @foreach($quiz as $key => $data)
        <div class="question">
            {{$key + 1}}. {{$data->question}}
        </div>
        <div class="options">
            <label>
                <input type="radio" name="questions[{{$key}}]" value="a"><span class="checkmark"></span> a) {{$data->ans1}}
            </label>
            <label>
                <input type="radio" name="questions[{{$key}}]" value="b"><span class="checkmark"></span> b) {{$data->ans2}}
            </label>
            <label>
                <input type="radio" name="questions[{{$key}}]" value="c"><span class="checkmark"></span> c) {{$data->ans3}}
            </label>
            <label>
                <input type="radio" name="questions[{{$key}}]" value="d"><span class="checkmark"></span> d) {{$data->ans4}}
            </label>
        </div>
        <br><br>
        @endforeach

        <button type="submit" class="submit-button" id="submitBtn">Submit</button>
    </div>
</form>

    @include('user.footer')
</body>
<script>
    // Set the countdown time to 25 minutes (in seconds)
    let countdownTime = 1 * 60;
    // Function to display and update the countdown timer
    function updateCountdown() {
        const countdownElement = document.getElementById('countdown');
        const minutes = Math.floor(countdownTime / 60);
        const seconds = countdownTime % 60;
        countdownElement.textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
        if (countdownTime <= 0) {
            // Automatically submit the form when the timer reaches 0
            document.getElementById('submitBtn').click();
        } else {
            countdownTime--;
            setTimeout(updateCountdown, 1000); // Update every second
        }
    }
    // Start the countdown when the page loads
    updateCountdown();
</script>
</html>
