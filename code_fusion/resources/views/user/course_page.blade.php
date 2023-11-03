<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="path/to/your/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
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

</style>
<body>
    @include('user.header')

    <section class="w3l-blogpost-content w3l-courses py-5">
        <div class="container py-md-5">
            <div class="header-title mb-md-5 mb-4">
                <span class="sub-title">Top Courses</span>
                <h3 class="hny-title text-left">Popular Courses</h3>
            </div>
            <div class="row">
                @foreach ($courses as $data)
                    <div class="col-md-12">
                        <div class="course-card">
                            <h2>{{ $data->main_title }}</h2>
                            <h3>{{ $data->sub_title }}</h3>
                            @if (!empty($data->description))
                                <p>{{ $data->description }}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('user.footer')
</body>
</html>
