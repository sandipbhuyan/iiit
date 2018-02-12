@extends('layouts.app')

@section('content')
<div class="main-container">
  <div class="container gallery fadeIn animated">
    <div class="row">
      @for($var = 1;$var < 13; $var++)
        <a href="{{url('/images/gallery/'.$var.'.jpg')}}" class="col-md-3 col-sm-4 gallery-item lightbox">
          <img src="{{url('/images/gallery/'.$var.'.jpg')}}" alt="" class="gallery">
          <span class="on-hover">
            <span class="hover-caption">Captions</span>
          </span>
        </a> <!-- /.gallery-item -->
        @endfor
    </div>
  </div>
</div> <!-- /.main-container  -->
@endsection
