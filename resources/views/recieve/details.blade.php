<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>Blood-donation camp</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

    <!-- Bootsrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <!-- Owl carousel -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">

    <!-- Template main Css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
    <!-- Modernizr -->
    <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>


</head>

<body ng-app="public-page">
  <header class="main-header">
      <nav class="navbar navbar-static-top">
          <div class="navbar-main">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="assets/images/sadaka-logo.png" alt=""></a>
              </div>
              <div id="navbar" class="navbar-collapse collapse pull-right">
                <ul class="nav navbar-nav">
                  <li><a class="" href="{{url('/')}}">HOME</a></li>
                  <li><a href="{{url('/gallery')}}">GALLERY</a></li>
                </ul>
              </div> <!-- /#navbar -->
            </div> <!-- /.container -->
          </div> <!-- /.navbar-main -->
        </nav>
  </header> <!-- /. main-header -->
  <div class="container">

    @foreach($details as $detail)
    <div class="jumbotron">
      <h1 class="display-3">Blood Details</h1>
      <p class="lead">{{ $detail->blood_group }}</p>
      <hr class="my-4">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Type</th>
            <th scope="col">Amount</th>
          </tr>
        </thead>
        <tbody>
          <tr class="table-active">
            <th scope="row">hymoglobin</th>
            <td>{{ $detail->hymoglobin }} <b>gm/dl</b></td>
          </tr>
          <tr class="table-active">
            <th scope="row">rbc</th>
            <td>{{ $detail->rbc }} <b>mg/ml</b></td>
          </tr>
          <tr class="table-active">
            <th scope="row">wbc</th>
            <td>{{ $detail->wbc }} <b>mg/ml</b></td>
          </tr>
          <tr class="table-active">
            <th scope="row">Patlets</th>
            <td>{{ $detail->patelets }} <b>mg/ml</b></td>
          </tr>
          <tr class="table-active">
            <th scope="row">hiv</th>
            <td>
              @if($detail->hiv == 1)
                +ve
              @else
                -ve
              @endif
            </td>
          </tr>
          <tr class="table-active">
            <th scope="row">Group</th>
            <td>{{ $detail->blood_group }}</td>
          </tr>
        </tbody>
      </table>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="{{url('api/recieve-blood/'.$detail->id)}}" role="button">Get Blood</a>
      </p>
    </div>
    @endforeach
  </div>
<footer class="main-footer">

    <div class="footer-bottom">

        <div class="container text-right">
            CodeBusters @ copyrights 2018 - by Sandip && Meet</a>
        </div>
    </div>

</footer> <!-- main-footer -->
<!--  Scripts
================================================== -->

<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script>window.jQuery || document.write('<script src="{{asset('js/jquery.min.js')}}"><\/script>')</script>

<!-- Bootsrap javascript file -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- owl carouseljavascript file -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>

<!-- Template main javascript -->
<script src="{{asset('js/main.js')}}"></script>

<script src="{{asset('js/angular.min.js')}}"></script>
@include('angular.home')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $( function() {
        $( "#datepicker" ).datepicker();
    } );
</script>

</body>
</html>
