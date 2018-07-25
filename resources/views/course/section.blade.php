@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-sm-12">
    <ol class="breadcrumb courseheading2">
      <li><a href="/course/learn/sectioncourse/{{$course->id}}">{{$course->name}}</a></li>
      {!!$path!!}
      <li class="active">{{$section->title}}</li>
    </ol>
  </div>
  <h1>{{$section->title}}</h1>
  @include('sectionlist')
</div>
@endsection
