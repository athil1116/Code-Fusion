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
            @if (!empty($data->type))
            <h2>Quiz</h2>
            <br>
            <br>
            <p><a href="{{url('quiz',['id' => $data->id]) }}" class="btn btn-warning">Test Your Knowledge</a></p>
            @endif

            @if (!empty($data->main_title))
                <h2>{{ $data->main_title }}</h2>
            @endif
            
            
            @if (!empty($data->sub_title))
            <br>
                <h3>{{ $data->sub_title }}</h3>
            @endif
            
            @if (!empty($data->image))
            <br>
                <h2><img class="card-img-top" src="/uploads/{{ $data->image }}" alt="Card image cap" style="height: 300px; width: 70%;"></h2>
            @endif
           
            @if (!empty($data->description))
            <br>
                <p>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;{{ $data->description }}</p>
            @endif
            
            @if (!empty($data->syntax))
            <br>
                <div class="syntax-card">
                    <pre><code>{{ $data->syntax }}</code></pre>
                </div>
            @endif
            
            @if (!empty($data->syntax))
            <br>
            <p><a href="" class="btn btn-success">Try it Yourself</a></p>
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


