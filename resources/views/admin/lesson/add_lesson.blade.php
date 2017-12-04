@extends('layouts.master')

@section('title', $title)

@section('content')

  <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="header">
            <h4 class="title">Lesson</h4>
            <p class="category">Insert new Lesson</p>
          </div>
          <form action="/lesson" method="post">
          <div class="content">
            <div class="row">
              <div class="col-md-12">
                @if($errors->has('title'))
                  <div class="form-group has-error">
                @else
                  <div class="form-group">
                @endif
                    <label class="control-label" for="titleInput">Title* {{$errors->has('title') ? '('.$errors->first('title').')' : ""}}</label>
                    <input type="text" class="form-control" name="title" id="titleInput" placeholder="Title" value="{{old('title')}}" autofocus>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                @if($errors->has('category'))
                  <div class="form-group has-error">
                @else
                  <div class="form-group">
                @endif
                    <label class="control-label" for="categoryInput">Category* {{$errors->has('category') ? '('.$errors->first('category').')' : ""}}</label>
                    <select class="js-example-basic-single js-states form-control" id="categoryInput" name="category">
                        @foreach($data as $category)
                            <option value="{{$category->id}}" {{old('category') == $category->id ? "selected" : "" }}>{{$category->name}}</option>
                        @endforeach
                        <!-- <input type="text" class="form-control" name="category" id="categoryInput" placeholder="Category" value="{{old('category')}}"> -->
                    </select>
                  </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                @if($errors->has('description'))
                  <div class="form-group has-error">
                @else
                  <div class="form-group">
                @endif
                    <label class="control-label" for="descriptionInput">Description {{$errors->has('description') ? '('.$errors->first('description').')' : ""}}</label>
                    <textarea rows="5" class="form-control" name="description" id="descriptionInput" placeholder="Description" value="{{old('description')}}"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h4>Sublesson</h4>
              </div>
            </div>

            <div id="sublessons" style="padding:20px">

              @if(old('sublesson.title'))
                <div>
                  @for($i=0; $i < count(old('sublesson.title')); $i++)

                    <div class="sublesson">
                      <!-- {{print_r(old('sublesson.title.'.$i))}} -->
                      <div class="row">
                        <div class="col-md-12">
                          @if($errors->has('sublesson.title.'.$i))
                            <div class="form-group has-error">
                          @else
                            <div class="form-group">
                          @endif
                              <label class="control-label" for="sublesson[title][]">Title* {{$errors->has('sublesson.title.'.$i) ? '('.$errors->first('sublesson.title.'.$i).')' : ""}}</label>
                              <input type="text" class="form-control" placeholder="Title" name="sublesson[title][]" value="{{old('sublesson.title.'.$i)}}"/ />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          @if($errors->has('sublesson.src.'.$i))
                            <div class="form-group has-error">
                          @else
                            <div class="form-group">
                          @endif
                              <label class="control-label" for="sublesson[src][]">File Source* {{$errors->has('sublesson.src.'.$i) ? '('.$errors->first('sublesson.src.'.$i).')' : ""}}</label>
                              <input type="file" class="form-control" placeholder="File Source" name="sublesson[src][]" value="{{old('sublesson.src.'.$i)}}"/ />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row" style="padding:15px"/>
                  @endfor
                </div>
              @endif
            </div>

            <div class="row">
                <div class="col-md-12">
                    <a id="add" class="btn btn-success btn-fill pull-left">Add Sublesson</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <hr />
                </div>
            </div>


            <a href="/lesson" class="btn btn-default btn-fill pull-left">Back</a>
            <button type="submit" class="btn btn-info btn-fill pull-right">Create</button>
            {{ csrf_field() }}
            <div class="clearfix"></div>
            </div>
          </form>
        </div>
      </div>
  </div>

  <div style="display:none" id="copy">
    <div class="sublesson">
      <div class="row">
        <div class="col-md-12">
          <label class="control-label" for="sublesson[title][]">Title*</label>
          <input type="text" class="form-control" placeholder="Title" name="sublesson[title][]" value=""/ />
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <label class="control-label" for="sublesson[src][]">File*</label>
            <input type="file" class="form-control" placeholder="File Source" name="sublesson[src][]" value=""/ />
        </div>
      </div>
      <div class="row" style="padding:15px"/>

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


  $('#add').click(function(){
      var $sublesson = $(".sublesson").clone();
      $('#sublessons').html($sublesson);
  });

  $('.js-example-basic-single').select2({
    placeholder: "Select an option",
    allowClear: true
  });
@endsection
