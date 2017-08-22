@extends('admin.layout')
@section('content')

	<section class="content-header">
          <h1>
           Portfolio
            <small>Create</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>DashBoard</a></li>
            <li><a href="#">Portfolio</a></li>
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
                  
                </div><!-- /.box-header -->
                <div class="box-body">
                  {!! Form::open(['route' => 'admin.portfolio.post', 'files'=>true])   !!}
                    <!-- text input -->
                   <div class="form-group">
                     {!! Form::label('title', 'Title') !!}
                     {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
                   </div>
                 
                    <div class="form-group">
	                    {!! Form::label('image', 'Choose Image') !!}
	                    {!! Form::file('image') !!}
                    </div>
                 {!! Form::submit('Submit', array( 'class'=>'btn btn-info' )) !!}
                {!! Form::close() !!}
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
            
          </div>   <!-- /.row -->
        </section><!-- /.content -->
        
        <section class="content">
             
          <div class="row">
            <!-- right column -->
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Portfolio Content</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                @forelse($portfolios as $portfolio)
                 <div class="col-md-3">
                   <img src="{{ url('images/portfolio/thumb/' . $portfolio->image )}}" class="img-responsive img-rounded" style="padding-top:30px; padding-bottom: 5px;">
                  <button class="btn btn-danger">Delete</button>
                 </div>
                 @empty
                 <h1>No Portfolio Image Posted Yet</h1>
                 @endforelse
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
            
          </div>   <!-- /.row -->
        </section><!-- /.content -->
        
@endsection