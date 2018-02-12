@extends('layouts.app')

@section('content')
<form class="form-donation" action="{{url('/api/send-donor')}}" method="post">
  {{ csrf_field() }}
    <h3 class="title-style-1 text-center">Thank you for your donation <span class="title-under"></span>  </h3>
    <div class="row">
        <div class="form-group col-md-12 ">
            <input type="text" class="form-control" id="amount" name="name" placeholder="Name" ng-model="name">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
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
            @if ($errors->has('blood_group'))
                <span class="help-block">
                    <strong>{{ $errors->first('blood_group') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group col-md-6 ">
            <input type="text" class="form-control" name="date" placeholder="Date" id="datepicker" ng-model="date">
            @if ($errors->has('date'))
                <span class="help-block">
                    <strong>{{ $errors->first('date') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <input type="text" class="form-control" name="email" placeholder="Email*" ng-model="email">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group col-md-6">
            <input type="text" class="form-control" name="phone" placeholder="Phone" ng-model="phn">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-12">
            <input type="text" class="form-control" name="address" placeholder="Address" ng-model="addr">
            @if ($errors->has('address'))
                <span class="help-block">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <input type="text" class="form-control" name="age" placeholder="Age" ng-model="age">
            @if ($errors->has('age'))
                <span class="help-block">
                    <strong>{{ $errors->first('age') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group col-md-6">
            <input type="text" class="form-control" name="weight" placeholder="Weight(In kg)" ng-model="weight">
            @if ($errors->has('weight'))
                <span class="help-block">
                    <strong>{{ $errors->first('weight') }}</strong>
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
          @if ($errors->has('gender'))
              <span class="help-block">
                  <strong>{{ $errors->first('gender') }}</strong>
              </span>
          @endif
      </div>
        <div class="form-group col-md-6">
            <button type="submit" class="btn btn-primary pull-right" name="donateNow" ng-click="donateBlood()">DONATE NOW</button>
        </div>
    </div>
</form>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
@endsection
