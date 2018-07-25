@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-sm-12">
    <ol class="breadcrumb courseheading2">
      <li class="active">{{$course->name}}</li>
    </ol>
  </div>
 <div class="row">
	<div class="col-sm-5 col-md-offset-1">
		<img src="/image/{{$course->src}}" style="max-width:100%;" />
	</div>
	<div class="col-sm-6">
	  @include('sectionlist')
	</div>
 </div>
</div>
@endsection
