@extends('layouts.app')

@section('content')
<div class="main-container">
  <div class="container gallery fadeIn animated">
    <div class="row">
      @for($var = 0;$var < 16; $var++)
        <a href="{{url('/images/550x280.png')}}" class="col-md-3 col-sm-4 gallery-item lightbox">
          <img src="{{url('/images/550x280.png')}}" alt="">
          <span class="on-hover">
            <span class="hover-caption">Captions</span>
          </span>
        </a> <!-- /.gallery-item -->
        @endfor
    </div>
  </div>
</div> <!-- /.main-container  -->
@endsection
