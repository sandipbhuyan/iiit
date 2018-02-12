@extends('layouts.app')

@section('content')
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
@endsection
