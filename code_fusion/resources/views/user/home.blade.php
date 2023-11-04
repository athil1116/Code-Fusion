@include('user.header');
  <!--/courses-->
  <section class="w3l-blogpost-content w3l-courses py-5">
    <div class="container py-md-5">
      <div class="header-title mb-md-5 mb-4">
        <span class="sub-title">Top Courses</span>
        <h3 class="hny-title text-left"> Popular Courses</h3>
      </div>
      <div class="row">



@foreach($category as $data)
        

<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
    <div class="card mb-4">
        <a href="{{ url('course_meterial', ['id' => $data->id]) }}">
            <img class="card-img-top" src="/uploads/{{$data->image}}" alt="Card image cap" style="height: 200px; width: 200px;">
        </a>
        <div class="card-body">
            <h5 class="card-title">{{$data->category_name}}</h5>
            <p class="card-text">{{ $data->details }}</p>
          
            <p>
            <span class="meta-value"> 40 Students </span>
            </p>
        </div>
    </div>
</div>
@endforeach




        

      </div>
      <div class="course-button mt-lg-4 text-center">
      <a href="contact.html" class="btn btn-style btn-primary pt-lg-3 mt-sm-5 mt-4">Start Today <span
          class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
        </div>
    </div>
  </section>
  @include('user.footer');