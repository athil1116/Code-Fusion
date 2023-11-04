<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Popular Courses</title>

    <style>
/* Style for course cards */
.course-card {
    background-color: #f7f7f7;
    padding: 20px;
    border: 1px solid #e0e0e0;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.course-card h2 {
    font-size: 24px;
    color: #333;
    margin-bottom: 10px;
}

.course-card p {
    font-size: 16px;
    color: #666;
    margin-bottom: 15px;
}

/* Highlight the duration and fee */
.course-card .highlight {
    font-weight: bold;
    color: #007bff;
}

.course-card .offer {
    color: #ff6600;
}





.pagination.pagination-lg {
    margin-top: 20px;
}


    </style>

</head>
<body>
    @include('user.header')

    <section class="w3l-blogpost-content w3l-courses py-5">
        <div class="container py-md-5">
            <div class="header-title mb-md5 mb-4">
                <span class="sub-title">Top Courses</span>
                <h3 class="hny-title text-left">Popular Courses</h3>
            </div>
            <div class="row">
                @foreach ($courses as $data)
                <div class="col-md-12">
                    <div class="course-card">
                        <!-- Display course details -->
                        <h2>{{ $data->name }}</h2>
                        <p align="justify">&ensp;&ensp;&ensp;{{ $data->description }}</p>
                        <p align="justify">&ensp;&ensp;&ensp;{{ $data->details }}</p>
                        <p2>
                            Duration: <span class="highlight"></span><br>
                            Fee: <span class="highlight">${{ $data->fees }}</span>
                            
                                <br><span class="offer">Special Offer: </span>
                           
                        </p2>
                        <br>
                            @if ($chk)
                            <a href="{{ url('course_meterial', ['id' => $data->id]) }}" class="btn btn-warning">Enrolled Continue Learning</a>
                            @else
                            <a href="{{ url('course_enrollment_free', ['id' => $data->id, 'name' => $data->name]) }}" class="btn btn-success">Enroll Now</a>
                               
                            @endif
                    </div>
                </div>
                @endforeach
            </div>
            <div class="pagination pagination-lg">
                {{ $courses->links() }}
            </div>
        </div>
    </section>

    @include('user.footer')
</body>

<script>
    window.onmessage = function (e) {
        if (e.data && e.data.language) {
            console.log(e.data)
        }
    };
</script>
</html>
