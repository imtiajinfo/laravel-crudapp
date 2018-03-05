@extends('layout.app');
@section('content')
  <div class="container">

    @if($errors->any())
      @foreach ($errors->all() as $error)
         <div class="alert alert-dismissible alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Oh snap!</strong> {{ $error }}
    </div>
      @endforeach 
    @endif
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">
          Add New Sudents
        </h3>
      </div>
      <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ route('edit', $student->id) }}">
          {{ csrf_field() }}
  <fieldset>
    <legend>Add Student Information</legend>
    <div class="form-group">
      <label for="firstname" class="col-md-2 control-label">First Name</label>

      <div class="col-md-10">
        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Input First Name" value="{{ $student->first_name }}">
      </div>
    </div>
    <div class="form-group">
      <label for="lastname" class="col-md-2 control-label">Last Name</label>

      <div class="col-md-10">
        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Input Last Name" value="{{ $student->last_name }}">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-md-2 control-label">Email</label>

      <div class="col-md-10">
        <input type="text" class="form-control" name="email" id="inputEmail" placeholder="Email" value="{{ $student->email }}">
      </div>
    </div>
    <div class="form-group">
      <label for="phone" class="col-md-2 control-label">Phone</label>

      <div class="col-md-10">
        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" value="{{ $student->phone }}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-10 col-md-offset-2">
        <button type="button" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
      </div>
    </div>
  </div>
@endsection