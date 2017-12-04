@extends('layouts.master')

@section('title','Category')
@section('content')

<!-- {!! $notif !!} -->
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
                  @foreach($data as $category)
                    <tr>
                      <td>{{$category->id}}</td>
                      <td>{{$category->name}}</td>
                      <td>
                        <a href="/category/{{$category->id}}">
                            <i class="fa fa-edit"></i>
                            <p class="hidden-lg hidden-md">Edit</p>
                        </a>
                        <form action="/category/{{$category->id}}" method="post" id="formdelete" style="display:inline">
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

@section('notification')

 {!! $notif !!}

  $("a[name='submit']").click(function(){
      $(this).closest('form').submit();
  });
@endsection
