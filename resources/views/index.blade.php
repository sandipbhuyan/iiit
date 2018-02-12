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
<!-- Carousel
================================================== -->
<div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#homeCarousel" data-slide-to="1"></li>
        <li data-target="#homeCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">

        <div class="item active">

            <img src="{{url('images/4.png')}}" alt="">

            <div class="container">

                <div class="carousel-caption">

                    <h2 class="carousel-title bounceInDown animated slow">More than 41,000 Blood donation</h2>
                    <h4 class="carousel-subtitle bounceInUp animated slow ">are needed every day</h4>
                    <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>
                    <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated" data-toggle="modal" data-target="#recieveModal">GET BLOOD</a>


                </div> <!-- /.carousel-caption -->

            </div>

        </div> <!-- /.item -->


        <div class="item ">

            <img src="{{url('images/2.jpg')}}" alt="">

            <div class="container">

                <div class="carousel-caption">


                    <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>
                    <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated" data-toggle="modal" data-target="#recieveModal">GET BLOOD</a>

                </div> <!-- /.carousel-caption -->

            </div>

        </div> <!-- /.item -->




        <div class="item ">

            <img src="{{url('images/1.jpg')}}" alt="">

            <div class="container">

                <div class="carousel-caption">

                    <h2 class="carousel-title bounceInDown animated slow" >One Donation Can </h2>
                    <h4 class="carousel-subtitle bounceInUp animated slow">Save Three lives</h4>
                    <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>
                    <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated" data-toggle="modal" data-target="#recieveModal">GET BLOOD</a>

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

<div class="section-home home-reasons">

    <div class="container">

        <div class="row">

            <div class="col-md-6">

                <div class="reasons-col animate-onscroll fadeIn">

                    <img src="{{url('images/blood-1.jpg')}}" alt="">

                    <div class="on-hover hidden-xs">

                        <p> The blood is red gold in time of saving a life.</p>


                        <p>Share a little, care a little – Donate Blood.</p>

                        <p>Five minutes of your time + 350 ml. of your blood = One life saved.</p>

                    </div>
                </div>

            </div>


            <div class="col-md-6">

                <div class="reasons-col animate-onscroll fadeIn">

                    <img src="{{url('images/blood-2.jpg')}}" alt="">

                    <div class="on-hover hidden-xs">

                        <p> To the young and healthy it’s no loss. To sick it’s hope of life. Donate Blood to give back life.</p>


                        <p> The Blood Donor of today may be recipient of tomorrow.</p>

                        <p> To the young and healthy it’s no loss. To sick it’s hope of life. Donate Blood to give back life.</p>

                    </div>


                </div>

            </div>


        </div>


        <br>
    </div>
</div> <!-- /.home-reasons -->

<footer class="main-footer">

    <div class="footer-bottom">

        <div class="container text-right">
            CodeBusters @ copyrights 2018 - by Sandip && Meet</a>
        </div>
    </div>

</footer> <!-- main-footer -->




<!-- Donate Modal -->
<div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true" ng-controller="donateBlood">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="donateModalLabel">DONATE NOW</h4>
            </div>
            <div class="modal-body">
                <form class="form-donation" action="{{url('/api/send-donor')}}" method="post">
                  {{ csrf_field() }}
                    <h3 class="title-style-1 text-center">Thank you for your donation <span class="title-under"></span>  </h3>
                    <div class="row">
                        <div class="form-group col-md-12 ">
                            <input type="text" class="form-control" id="amount" name="name" placeholder="Name" ng-model="name">
                        </div>
                    </div>
                    <div class="row">
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
                        <div class="form-group col-md-6 ">
                            <input type="text" class="form-control" name="date" placeholder="Date" id="datepicker" ng-model="date">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="email" placeholder="Email*" ng-model="email">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="phone" placeholder="Phone" ng-model="phn">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" name="address" placeholder="Address" ng-model="addr">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="age" placeholder="Age" ng-model="age">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="weight" placeholder="Weight(In kg)" ng-model="weight">
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
                            <button type="submit" class="btn btn-primary pull-right" name="donateNow" ng-click="donateBlood()">DONATE NOW</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> <!-- /.modal -->
<!-- Recieve Modal -->
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
