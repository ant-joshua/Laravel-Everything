@extends('admin.layout')
@section('content')

	<section class="content-header">
          <h1>
           Video
            <small>Create</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>DashBoard</a></li>
            <li><a href="#">Video</a></li>
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
                  {!! Form::open(['route' => 'admin.video.post', 'files'=>false])   !!}
                    <!-- text input -->
                   <div class="form-group">
                     {!! Form::label('video', 'Video ID') !!}
                     {!! Form::text('video', null, ['class' => 'form-control', 'placeholder' => 'DTk1M7s3yj4']) !!}
                   </div>
                 
                 {!! Form::submit('Submit', array( 'class'=>'btn btn-info' )) !!}
                {!! Form::close() !!}
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
            
          </div>   <!-- /.row -->
           <div class="row">
            <!-- right column -->
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Video Content</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  @foreach($videoList as $video)
                    <div class="col-sm-6 col-md-3">
                      <div class="thumbnail">
                        <img src="{{ $video->snippet->thumbnails->high->url }}" alt="{{ $video->snippet->title }}">
                        <div class="caption">
                          <h3>{!! Markdown::parse(Str_limit($video->snippet->title, 50)) !!}</h3>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
            
          </div>   <!-- /.row -->
        </section><!-- /.content -->
        
             
         
       
@endsection