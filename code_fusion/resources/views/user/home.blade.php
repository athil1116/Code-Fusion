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
        
        <div class="col-lg-4 col-md-6 item">

        <a href="{{url('course_page',['id' => $data->category_name])}}">
          <div class="card">
            <div class="card-header p-0 position-relative">

              <a href="{{url('course_page',['id' => $data->category_name])}}">
                <img class="card-img-bottom d-block " src="/uploads/{{$data->image}}" heigh="100px" width="100px"  alt="Card image cap">
              </a>
            </div>
            <div class="card-body blog-details">
              
              <a href="#" class="blog-desc mt-2">{{$data->category_name}}
              </a>
              <div class="course-meta mt-1">
                <div class="meta-item course-lesson">
                  
                </div>
                <div class="meta-item course-students">
                  <span class="fa fa-user-o"></span>
                  <span class="meta-value"> 40 Students </span>
                </div>
              </div>
            </div>
          </div>
          </a>

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