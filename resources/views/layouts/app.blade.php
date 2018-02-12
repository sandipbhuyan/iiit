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
  <div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel" style="margin-bottom:10px">
      <!-- Indicators -->
      <header class="main-header" style="margin-bottom:0">
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
                      <li><a href="{{url('/about')}}">ABOUT</a></li>
                    </ul>
                  </div> <!-- /#navbar -->
                </div> <!-- /.container -->
              </div> <!-- /.navbar-main -->
            </nav>
      </header> <!-- /. main-header -->
      <ol class="carousel-indicators">
          <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#homeCarousel" data-slide-to="1"></li>
          <li data-target="#homeCarousel" data-slide-to="2"></li>
          <li data-target="#homeCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
          <div class="item active">
              <img src="{{url('images/4.jpg')}}" alt="">
              <div class="container">
                  <div class="carousel-caption">
                      <h2 class="carousel-title bounceInDown animated slow">More than 41,000 Blood donation</h2>
                      <h4 class="carousel-subtitle bounceInUp animated slow ">are needed every day</h4>
                      <a href="{{url('/register-blood')}}" class="btn btn-lg btn-secondary  bounceInUp animated slow">DONATE NOW</a>
                      <a href="#" class="btn btn-lg btn-secondary  bounceInUp animated" data-toggle="modal" data-target="#recieveModal">GET BLOOD</a>
                  </div> <!-- /.carousel-caption -->
              </div>
          </div> <!-- /.item -->
          <div class="item ">
              <img src="{{url('images/2.jpg')}}" alt="">
              <div class="container">
                  <div class="carousel-caption">
                      <a href="#" class="btn btn-lg btn-secondary bounceInUp animated" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>
                      <a href="#" class="btn btn-lg btn-secondary  bounceInUp animated" data-toggle="modal" data-target="#recieveModal">GET BLOOD</a>
                  </div> <!-- /.carousel-caption -->
              </div>
          </div> <!-- /.item -->
          <div class="item ">
              <img src="{{url('images/1.jpg')}}" alt="">
              <div class="container">
                  <div class="carousel-caption">
                      <h2 class="carousel-title bounceInDown animated slow" >One Donation Can </h2>
                      <h4 class="carousel-subtitle bounceInUp animated slow">Save Three lives</h4>
                      <a href="#" class="btn btn-lg btn-secondary  bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>
                      <a href="#" class="btn btn-lg btn-secondary  bounceInUp animated" data-toggle="modal" data-target="#recieveModal">GET BLOOD</a>
                  </div> <!-- /.carousel-caption -->
              </div>
          </div> <!-- /.item -->
          <div class="item ">
              <img src="{{url('images/3.jpg')}}" alt="">
              <div class="container">
                  <div class="carousel-caption">
                      <h2 class="carousel-title bounceInDown animated slow" >One Donation Can </h2>
                      <h4 class="carousel-subtitle bounceInUp animated slow">Save Three lives</h4>
                      <a href="#" class="btn btn-lg btn-secondary  bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>
                      <a href="#" class="btn btn-lg btn-secondary  bounceInUp animated" data-toggle="modal" data-target="#recieveModal">GET BLOOD</a>
                  </div> <!-- /.carousel-caption -->
              </div>
          </div> <!-- /.item -->
      </div>
      <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
          <span class="fa fa-angle-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
          <span class="fa fa-angle-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
  </div><!-- /.carousel -->
  <div class="container">
    @yield('content')
  </div>
<footer class="main-footer">
    <div class="footer-bottom">
        <div class="container text-right">
            CodeBusters @ copyrights 2018 - by Sandip && Meet</a>
        </div>
    </div>
</footer> <!-- main-footer -->
<div class="modal fade" id="recieveModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="donateModalLabel">GET BLOOD</h4>
            </div>
            <div class="modal-body">
                <form class="form-donation" action="{{url('/api/get-blood-details')}}" method="post">
                  {{ csrf_field() }}
                    <h3 class="title-style-1 text-center"> <span class="title-under">Enter Your blood group</span>  </h3>
                    <div class="row">
                        <div class="form-group col-md-8 col-md-offset-2 ">
                            <select class="selectpicker" name="blood_groop">
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
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-primary pull-right" name="donateNow" >Get Blood</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> <!-- /.modal -->
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
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{asset('js/main.js')}}"></script>
<script>
    $( function() {
        $( "#datepicker" ).datepicker();
    } );
</script>

</body>
</html>
