
@extends('layouts.app')
@section('content')
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="mt-5">{{$plan->name}}</h1><hr>
        <p>Price : {{$plan->price}}</p><hr>
        <hr>
    <div>
    </div>
</div>
@endsection