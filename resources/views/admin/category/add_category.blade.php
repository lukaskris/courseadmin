@extends('layouts.master')

@section('title', $title)

@section('content')

  <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="header">
            <h4 class="title">Category</h4>
            <p class="category">Insert new Category</p>
          </div>
          <form action="/category" method="post">
          <div class="content">
            <div class="row">
              <div class="col-md-12">
                @if($errors->has('name'))
                  <div class="form-group has-error">
                @else
                  <div class="form-group">
                @endif
                    <label class="control-label" for="nameInput">Name {{$errors->has('name') ? '('.$errors->first('name').')' : ""}}</label>
                    <input type="text" class="form-control" name="name" id="nameInput" placeholder="Name" value="{{old('name')}}" autofocus>
                </div>
              </div>
            </div>
            <a href="/category" class="btn btn-default btn-fill pull-left">Back</a>
            <button type="submit" class="btn btn-info btn-fill pull-right">Create</button>
            {{ csrf_field() }}
            <div class="clearfix"></div>
            </div>
          </form>
        </div>
      </div>
  </div>
@endsection

@section('notification')
  @if(count($errors)>0)
    @foreach($errors->all() as $error)
        $.notify({
          icon: 'pe-7s-attention',
          message: '{{$error}}'
        },{
            type: 'danger',
            timer: 400
        });
    @endforeach
  @endif

@endsection
