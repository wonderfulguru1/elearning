@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row">
      <div class="col-sm-12">
        <ol class="breadcrumb">
          <li><a href="/course/learn/sectioncourse/{{$course->id}}">{{$course->name}}</a></li>
          {!!$path!!}
          <li class="active">{{$section->title}}</li>
        </ol>
      </div>
        <div class="col-sm-12">
          <h1>{{$section->title}}</h1>
          <div class="row">
            <div class="col-sm-12">
              <?php if($video->type ==2){ ?>
              <iframe width="854" height="480" src="{{$video->path}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              <?php }else{  ?>
                <video class="art-preview lazy video-js vjs-default-skin vjs-big-play-centered vjs-16-9" data-setup='{ "example_option": true, "techOrder": ["html5","flash"] }' controls>
                     <source src="../../../../../video/{{$video->path}}" type="video/mp4">
                     <source src="../../../../../video/{{$video->path}}" type="video/ogg">
                </video>
              <?php } ?>
          </div>
        </div>
        </div>
    </div>
</div>
@endsection
