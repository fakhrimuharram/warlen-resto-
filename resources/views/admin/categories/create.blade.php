@extends('layouts.global')
<meta name="csrf-token" content="{{ csrf_token() }}" />
@section('title') Create Category @endsection 

@section('content')

<div class="col-md-8">

  @if(session('status'))
    <div class="alert alert-success">
      {{session('status')}}
    </div>
  @endif 

  <form 
    enctype="multipart/form-data" 
    class="bg-white shadow-sm p-3" 
    action="{{route('categories.store')}}" 
    method="POST">

         <!-- @csrf -->
      <input type="hidden" name="_token" value="{{ csrf_token() }}">


    <label>Category name</label><br>
    <input 
      type="text" 
      class="form-control {{$errors->first('name') ? "is-invalid" : ""}}"
      value="{{old('name')}}"
      name="name">
    <div class="invalid-feedback">
      {{$errors->first('name')}}
    </div>
    <br>
    
    <label>Category image</label>
    <input 
      type="file" 
      class="form-control {{$errors->first('image') ? "is-invalid" : ""}}"
      name="image">
    <div class="invalid-feedback">
      {{$errors->first('image')}}
    </div>
    
    <br>

    <input 
      type="submit" 
      class="btn btn-primary" 
      value="Save">

  </form>
</div>

@endsection