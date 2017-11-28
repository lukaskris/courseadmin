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
        <form action="/category/add" method="post">
        <div class="content">
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Name" value="">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-info btn-fill pull-right">Save</button>
          {{ csrf_field() }}
          <div class="clearfix"></div>
          </div>
        </form>
      </div>
    </div>
</div>
@endsection
