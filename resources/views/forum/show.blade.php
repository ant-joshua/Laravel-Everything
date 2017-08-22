@extends('layouts.app')
@section('head')
  <title>Forum | {{$forum->title }}</title>
@endsection
@section('content')
	<div id="maincontent" class="qt-main qt-paper">
		 	<div style="background-image: url('https://ssl-forum-files.fobby.net/forum_attachments/0029/3524/Jeff.png'); height: 500px;  background-attachment: fixed; background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
                <div class="qt-container">
                    <h3 style="padding-top: 300px; color: white;">{{ $forum->title }}</h3>
                </div>
            </div>
	</div>
	<div id="qtcontents" class="qt-container qt-vertical-padding-l">
		{!! Markdown::parse($forum->content) !!}
		<div style="padding-top: 30px;">
			
		</div>
            @if (session('status'))
            <div class="alert alert-success">
               <h4 style="color: green;">{{ session('status') }}</h4> 
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
            @foreach($forum->comment('created_at', 'desc')->paginate(5) as $comment)
            <div class="qt-part-archive-item qt-part-archive-item-inline">
                                            <a class="qt-inlineimg" href="{{ secure_url('forum/' . $forum->slug ) }}">
        <img width="150" height="150" src="{{ Gravatar::src($comment->user->email) }}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="">
    </a>
                                            <p class="qt-date">{{ $comment->published_at->diffForHumans() }}</p>
                                            <h5 class="tit qt-ellipsis-2 qt-t">
        <a class="" href="{{ secure_url('forum/' . $forum->slug ) }}">
            {{ $comment->comment }}   </a> <ul class="qt-tags ">
                         
                        </ul>
    </h5>

                                        </div>
              @endforeach
              <center></center>
                <div id="comments" class="comments-area comments-list qt-part-post-comments qt-spacer-s">
              <div id="respond" class="comment-respond">
    <h4 id="reply-title" class="comment-reply-title qt-spacer-s">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/demos/vlogger/demo/michael-wittmann-to-airfix-how-the-tiger-tank-became-a-brand-icon/#respond" style="display:none;"><i class="mdi-navigation-cancel icon-l"></i></a></small></h4>     
    {!! Form::open(['url' => 'forumcomment/' . $forum->slug, 'files'=>false, 'id' => 'qw-commentform' ,'class' => 'qt-clearfix'])   !!}
     
        <hr class="qt-spacer-s"><div class="input-field">
        {!! Form::textarea('comment', null, ['class'=>'materialize-textarea', 'id'=>'my-editor', 'required'=>'required','aria-required'=>true]) !!}
        <label for="comment" class="">Comment*</label></div>
        <hr class="qt-spacer-s">
      {!! Form::submit('Post Comment', array( 'class'=>'qt-btn qt-btn-primary qt-btn-xl' )) !!}
    {!! Form::close() !!}
      </div><!-- #respond -->
    
</div>
	</div>


@endsection