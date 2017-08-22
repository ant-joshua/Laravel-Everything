@extends('admin.layout')
@section('content')
	<section class="content-header">
          <h1>
           Blog banner
            <small>Create</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>DashBoard</a></li>
            <li><a href="#">Blog banner</a></li>
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
                  <h3 class="box-title">Blog banner Content</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  {!! Form::open(['secure_url' => 'admin/blog/banner', 'files'=>true])   !!}
                    <!-- text input -->
                   
                    <div class="form-group">
	                    {!! Form::label('image', 'For Best View Choose 1920x1080 Size Image') !!}
	                    {!! Form::file('image') !!}
                    </div>
                   
                 {!! Form::submit('Submit', array( 'class'=>'btn btn-info' )) !!}
                {!! Form::close() !!}
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
            
          </div>   <!-- /.row -->
          <div class="">
          	<div class="row">
          	@forelse($blogbanners as $blogbanner)
          		<div class="col-md-3">
          			<img src="{{ secure_url('images/blog/banner/' . $blogbanner->image )}}" class="img-responsive img-rounded">
          		</div>
          	@empty
          		<h1>No Blogbanner Posted Yet</h1>
          	@endforelse
          	</div>
          </div>
        </section><!-- /.content -->
@endsection