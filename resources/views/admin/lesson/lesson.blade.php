@extends('layouts.master')

@section('title','Lesson')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Lesson</h4>
          <p class="category">List of Lesson</p>
        </div>
        <div class="content">
            <div class="content table-responsive table-full-width">
              <div class="col-md-12">
                <a class="btn btn-default btn-sm pull-right" style="margin-bottom:10px" href="/lesson/add">
                    <span class="glyphicon glyphicon-plus"></span>
                    Add Lesson
                </a>
              </div>
              <table class="table table-hover table-striped" cellspacing="0" id="table">
                <thead>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  @foreach($data as $lesson)
                    <tr>
                      <td>{{$lesson->id}}</td>
                      <td>{{$lesson->name}}</td>
                      <td>{{$lesson->category->name}}</td>
                      <td>
                        <a href="/lesson/{{$lesson->id}}">
                            <i class="fa fa-edit"></i>
                            <p class="hidden-lg hidden-md">Edit</p>
                        </a>
                        <form action="/lesson/{{$lesson->id}}" method="post" id="formdelete" style="display:inline">
                          <a href="#" type="submit" name="submit" value="">
                              <span class="fa fa-remove"></span>
                          </a>
                          {{ csrf_field() }}
                          <input type="hidden" name="_method" value="DELETE" onclick=""/>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection
