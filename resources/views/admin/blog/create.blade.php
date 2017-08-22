@extends('admin.layout')
@section('content')
	<section class="content-header">
          <h1>
           Service
            <small>Create</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>DashBoard</a></li>
            <li><a href="#">Service</a></li>
            <li class="active">Create</li>
          </ol>
        </section>
        <section class="content">
              @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
              @endif

              @if (session('warning'))
                <div class="alert alert-danger ">
                {{ session('warning') }}
            </div>
              @endif
            <div class="alert-warning">
              @foreach( $errors->all() as $error )
                {{ $error }}<br>
              @endforeach
            </div>
          <div class="row">
            <!-- right column -->
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Service Content</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  {!! Form::open(['route' => 'admin.blog.post', 'files'=>true])   !!}
                    <!-- text input -->
                   <div class="form-group">
                     {!! Form::label('title', 'Title') !!}
                     {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
                   </div>
                 	  <div class="form-group">
                      {!! Form::label('description', 'Please Type Here Content') !!}
                      {!! Form::textarea('content', null, ['class'=>'ckeditor', 'id'=>'my-editor']) !!}
                    </div>
                    <div class="form-group">
                     {!! Form::label('tag', 'Categories') !!}
                     {!! Form::text('tag', null, ['class' => 'form-control', 'placeholder' => 'Categories']) !!}
                   </div>
                   
                   <div class="row">
	                   	<div class="col-md-4">
		                   	<div class="form-group">
				                {!! Form::label('published_at', 'Publish On') !!}
				                {!! Form::input('date', 'published_at', date('Y-m-d'), ['class'=>'form-control']) !!}
			                </div>
	                   </div>
                   </div>
                    <div class="form-group">
	                    {!! Form::label('image', 'Choose Image') !!}
	                    {!! Form::file('image') !!}
                    </div>
                    @push('scripts')
                <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                <script>
                  var options = {
                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                    filebrowserImageUploadUrl: '/upload?type=Images&_token={{csrf_token()}}',
                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                    filebrowserUploadUrl: '/upload?type=Files&_token={{csrf_token()}}'
                  };
                  CKEDITOR.replace('my-editor', options);
                </script>
                @endpush
                 {!! Form::submit('Submit', array( 'class'=>'btn btn-info' )) !!}
                {!! Form::close() !!}
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
            
          </div>   <!-- /.row -->
        </section><!-- /.content -->
@endsection