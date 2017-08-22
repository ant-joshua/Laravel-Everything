@extends('layouts.app')
@section('head')
  <title>New Discussion</title>
@endsection
@section('content')
	<!-- ================================ MENU END  ================================================================ -->

		<!-- ======================= MAIN SECTION  ======================= -->
		<div id="maincontent" class="qt-main qt-paper">
            <div style="background-image: url('https://ssl-forum-files.fobby.net/forum_attachments/0029/3524/Jeff.png'); height: 500px;  background-attachment: fixed; background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
                <div class="qt-container">
                    <h1 style="padding-top: 400px; color: white;">Create New Discussion</h1>
                </div>
            </div>
               
			<!-- ======================= HEADER SECTION END ======================= -->
			<div id="qtcontents" class="qt-container qt-vertical-padding-l">
                      @if (session('status'))
                        <div class="alert alert-success">
                           <h4 style="color: green;">{{ session('status') }}</h4> 
                           <a href="{{ secure_url('forum')}}">Click Here to Go Back</a>
                        </div>
                          @endif

                          @if (session('warning'))
                            <div class="alert alert-danger ">
                            {{ session('warning') }}
                        </div>
                          @endif
                        <div class="alert-warning">
                          @foreach( $errors->all() as $error )
                            <h3 style="color: red;">{{ $error }}</h3><br>
                          @endforeach
                        </div>
                {!! Form::open(['url' => 'forum/create', 'files'=>false])   !!}
                    <!-- text input -->
                    {!! Form::token() !!}
                   <div class="form-group">
                     <h2>Title</h2>
                     {!! Form::text('title', null, ['class' => '', 'placeholder' => 'Title']) !!}
                   </div>
                      <div class="form-group">
                      <h2>Content</h2>
                      {!! Form::textarea('content', null, ['class'=>'ckeditor', 'id'=>'my-editor']) !!}
                    </div>
                    
                    <h2>Select Category</h2>
                    <ul style="color: white;">
                        <div class="row">
                        @foreach($tags as $tag)
                          <div class="col m3">
                                <li>
                                <input type="radio" id="{{ $tag }}" name="tag" value="{{ $tag }}">
                                <label for="{{ $tag }}">{{ $tag }}</label>
                                
                                <div class="check"></div>
                              </li>
                          </div>
                        @endforeach
                      </div>
                    </ul>
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
                @if(Auth::user()->admin)
                  <div class="form-group">
                     <h2>Category</h2>
                     {!! Form::text('tag', null, ['class' => '', 'placeholder' => 'Category']) !!}
                  </div>
                @endif
                <div style="padding-top: 30px;">
                    
                </div>
                 {!! Form::submit('Submit', array( 'class'=>'qt-btn qt-btn-primary qt-btn-xl' )) !!}
                {!! Form::close() !!}
    			</div>
			<!-- ======================= CONTENT SECTION END ======================= -->

		</div>
        
@endsection