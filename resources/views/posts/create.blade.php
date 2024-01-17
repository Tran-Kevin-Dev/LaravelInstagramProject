@extends('layouts.app')

@section('content')
<div class="container">
   <form action="/p" enctype="multipart/form-data" method="post">
      @csrf
      <div class="row">
         <div class="col-8 offset-2">
            <div class="row">
               <h2>Add new post</h2>
            </div>
            <div class="form-group row">
               <div class="row mb-3">
                  <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
                  <input id="caption" type="text" class="form-control {{ $errors->has('caption') ? 'is-invalid' : ''}}" name="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>
                  @if ($errors->has('caption'))
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('caption') }}</strong>
                  </span>
                  @endif
               </div>
               <div class="row">
                  <label for="image" class="col-md-4 col-form-label">Post image</label>
                  <input type="file" class="form-control-file" id="image" name="image">
                  @if ($errors->has('image'))
                     <strong>{{ $errors->first('image') }}</strong>
                  @endif
               </div>
               <div class="row pt-3">
                  <button class="btn btn-primary w-50">Add new post</button>
               </div>
            </div>
         </div>
      </div>
   </form>
</div>
@endsection