<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="path/to/your/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

        /* Custom styles for pagination */
.pagination-custom {
    margin-top: 20px; /* Adjust the top margin as needed */
}

/* Style for pagination links */
.pagination-custom .pagination li {
    display: inline;
    margin-right: 10px; /* Adjust the right margin as needed */
}

/* Style for active pagination link */
.pagination-custom .pagination .page-item.active .page-link {
    background-color: #007BFF;
    color: #fff;
    border: none; /* Remove the border */
}

/* Style for pagination link on hover */
.pagination-custom .pagination .page-item:hover .page-link {
    background-color: #eee;
    border: none; /* Remove the border */
}

/* Hide Bootstrap Carousel arrows */
.relative z-0 inline-flex shadow-sm rounded-md {
    display: none !important;
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
                            @if (!empty($data->main_title))
                                <h2>{{ $data->main_title }}</h2>
                            @endif
                            <br>
                            @if (!empty($data->sub_title))
                                <h3>{{ $data->sub_title }}</h3>
                            @endif
                            <br>
                            @if (!empty($data->description))
                                <p>{{ $data->description }}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pagination">
                {{ $courses->links() }}
            </div>
        </div>

        <div class="hidden">
        <div>
                <span class="relative z-0 inline-flex shadow-sm rounded-md">
                    
                                            <span aria-disabled="true" aria-label="&amp;laquo; Previous">
                            <span class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default rounded-l-md leading-5" aria-hidden="true">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </span>
                    
                    
                                            
                        
                        
                                                                                                                        <span aria-current="page">
                                        <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5">1</span>
                                    </span>
                                                                                                                                <a href="http://127.0.0.1:8000/course_meterial/3?page=2" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page 2">
                                        2
                                    </a>
                                                                                                        
                    
                                            <a href="http://127.0.0.1:8000/course_meterial/3?page=2" rel="next" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-r-md leading-5 hover:text-gray-400 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="Next &amp;raquo;">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                                    </span>
            </div>
</div>

    </section>

    @include('user.footer')
</body>
</html>


