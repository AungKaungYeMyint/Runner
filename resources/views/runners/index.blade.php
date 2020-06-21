@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="inline-block m-3">
    <a href="{{url('runners/create')}}" class="btn btn-success">Add Runner</a>
  </div>
  <div class="runners">
    <x-runner :runners="$runners"/>  
  </div>
</div>

@endsection