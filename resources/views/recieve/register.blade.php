@extends('layouts.app')

@section('content')
<form class="form-donation" action="{{url('/api/reciver-register')}}" method="post">
  {{ csrf_field() }}
    <h3 class="title-style-1 text-center">Get Blood<span class="title-under"></span>  </h3>
    <div class="row">
        <div class="form-group col-md-12 ">
            <input type="text" class="form-control" id="amount" name="name" placeholder="Name" ng-model="name">
            @if ($errors->has('name'))
                <span class="help-block danger">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="row">
      <div class="form-group col-md-6">
          <input type="text" class="form-control" name="email" placeholder="Email*" ng-model="email">
          @if ($errors->has('email'))
              <span class="help-block danger">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
      </div>
        <div class="form-group col-md-6 ">
            <input type="text" class="form-control" name="date" placeholder="Date" id="datepicker" ng-model="date">
            @if ($errors->has('date'))
                <span class="help-block danger">
                    <strong>{{ $errors->first('date') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <input type="text" class="form-control" name="weight" placeholder="Weight(In kg)" ng-model="weight">
            @if ($errors->has('weight'))
                <span class="help-block danger">
                    <strong>{{ $errors->first('weight') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group col-md-6">
            <input type="text" class="form-control" name="phone" placeholder="Phone" ng-model="phn">
            @if ($errors->has('phone'))
                <span class="help-block danger">
                    <strong>{{ $errors->first('phone') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="row">
      <div class="form-group col-md-6">
          <input type="text" class="form-control" name="age" placeholder="Age" ng-model="age">
          @if ($errors->has('age'))
              <span class="help-block danger">
                  <strong>{{ $errors->first('age') }}</strong>
              </span>
          @endif
      </div>
      <div class="form-group col-md-6">
          <input type="text" class="form-control" name="amount" placeholder="Amount" ng-model="age">
          @if ($errors->has('amount'))
              <span class="help-block danger">
                  <strong>{{ $errors->first('amount') }}</strong>
              </span>
          @endif
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
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
@endsection
