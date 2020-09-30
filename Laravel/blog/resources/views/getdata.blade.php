@extends('layout')
@section('content')

@if(session('success'))
<div class="alert alert-success">
    success name as {{ session('success') }}
</div>
@endif
<form class="p-4" method="post" action="/getdatapost">
@csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
   
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Name</label>
        <textarea class="form-control" name="name" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button class="btn btn-success" type="submit">Submit</button>
</form>
@endsection