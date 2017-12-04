@extends('layouts.master')

@section('title', $title)

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Category</h4>
          <p class="category">Update Category</p>
        </div>
        <form action="/category/{{$data->id}}" method="post">
          <input type="hidden" name="_method" value="PUT"/>
          <div class="content">
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $data->name }}">
                </div>
              </div>
            </div>
            <input type="submit" name="submit" class="btn btn-info btn-fill pull-right" value="Save"/>
            {{ csrf_field() }}
            <div class="clearfix"></div>
          </div>
        </form>
      </div>
    </div>
</div>
@endsection
