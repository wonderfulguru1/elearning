<div class="row our-course-content">
  @foreach($courses as $course)
    <div class="col-sm-12 col-md-4 col-xs-3">
      <div class="thumbnail" style="height:345px;">
        <div style="height:140px; display: block; width:100%;overflow:hidden;">
          <img src="../image/{{$course->src}}" style="max-width:100%;" alt="...">
        </div>

          <div class="caption">
            <h3 class="courseTitle" >{{$course->name}}</h3>
              <p style="overflow:hidden;  display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2; text-overflow: ellipsis;">{{$course->about}}</p>
          </div>
          <ul class="course-meta">
          <li>
         {{$course->user_count}}<span> Student</span>
          </li>
          <li>Starting <?php date('D M, Y ') ?>24 Jan, 2018 </li>
          </ul>
          <a href="course/{{$course->id}}" class="btn btn-primary col-sm-12 btn-success" role="button">Take course</a>
      </div>
    </div>
    @endforeach
</div>
