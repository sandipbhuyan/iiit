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
    <form class="form-donation" action="{{url('/api/reciver-register')}}" method="post">
      {{ csrf_field() }}
        <h3 class="title-style-1 text-center">Thank you for your donation <span class="title-under"></span>  </h3>
        <div class="row">
            <div class="form-group col-md-12 ">
                <input type="text" class="form-control" id="amount" name="name" placeholder="Name" ng-model="name">
            </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
              <input type="text" class="form-control" name="email" placeholder="Email*" ng-model="email">
          </div>
            <div class="form-group col-md-6 ">
                <input type="text" class="form-control" name="date" placeholder="Date" id="datepicker" ng-model="date">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" name="weight" placeholder="Weight(In kg)" ng-model="weight">
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" name="phone" placeholder="Phone" ng-model="phn">
            </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
              <input type="text" class="form-control" name="age" placeholder="Age" ng-model="age">
          </div>
          <div class="form-group col-md-6">
              <input type="text" class="form-control" name="amount" placeholder="Amount" ng-model="age">
          </div>
        </div>
        <div class="row">

            <div class="form-group col-md-6">
                <label for="blood-group">Gender : </label>
                <select class="selectpicker" name="gender" ng-model="gen">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
            </div>
            <div class="form-group col-md-6">
              <label for="blood-group">Blood Group:</label>
                <select class="selectpicker" name="blood_group" ng-model="bldGrp">
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select>
            </div>
        </div>
        <div class="row">

            <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary pull-right" name="donateNow" ng-click="donateBlood()">DONATE NOW</button>
            </div>
        </div>
    </form>
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
