@extends('layouts.master')

@section('title','Category')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Category</h4>
          <p class="category">List of Category</p>
        </div>
        <div class="content">
            <div class="content table-responsive table-full-width">
              <div class="col-md-12">
                <a class="btn btn-default btn-sm pull-right" style="margin-bottom:10px" href="/category/add">
                    <span class="glyphicon glyphicon-plus"></span>
                    Add Category
                </a>
              </div>
              <table class="table table-hover table-striped" cellspacing="0" id="table">
                <thead>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Android</td>
                    <td>
                      <a href="/category/manage/1" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="fa fa-edit"></i>
                          <p class="hidden-lg hidden-md">Dashboard</p>
                      </a>
                      <a href="/category/delete/1" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="fa fa-remove"></i>
                          <p class="hidden-lg hidden-md">Delete</p>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection
