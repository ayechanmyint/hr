@extends('layout.app')
@section('content')
<div class="container">
<div class="row">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Department List</span>
          @foreach($departments as $id=>$department)
           <p><a href="/department/{{$id}}/showdetail"> {{$id}}.  {{$department}}  </a></p>
          @endforeach
          <a href="/department/create" class="waves-effect waves-light btn-small">Add Department</a>
          <a href="/employee/create" class="waves-effect waves-light btn-small">Add Employee</a>
        </div>

      </div>
    </div>
  </div>
</div>


@endsection