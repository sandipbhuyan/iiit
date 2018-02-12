@extends('layouts.app')

@section('content')
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
    <a class="btn btn-primary btn-lg" href="{{url('recieve/'.$detail->id)}}" role="button">Get Blood</a>
  </p>
</div>
@endforeach
@endsection
