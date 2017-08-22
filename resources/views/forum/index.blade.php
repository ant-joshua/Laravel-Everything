@extends('layouts.app')
@section('head')
	<title>Forum</title>
@endsection
@section('content')
	<!-- ================================ MENU END  ================================================================ -->

		<!-- ======================= MAIN SECTION  ======================= -->
		<div id="maincontent" class="qt-main qt-paper">

			<!-- ======================= HEADER SECTION ======================= -->
			<!-- HEADER CAPTION ========================= -->
			<div class="qt-pageheader qt-pageheader-short qt-negative" data-bgimage="https://ssl-forum-files.fobby.net/forum_attachments/0029/3524/Jeff.png" data-parallax="1">
				<div class="qt-headercontainer">
					<div class="qt-container">
						<div data-200-top="opacity:1" data--250-top="opacity:0">
							<h1 class="qt-caption qt-spacer-s">Forum</h1>
						</div>
					</div>
				</div>
			</div>
			<!-- HEADER CAPTION END ========================= -->
			<!-- ======================= HEADER SECTION END ======================= -->
			<div id="qtcontents" class="qt-container qt-vertical-padding-l">
			<p class="qt-spacer-s"><a href="{{ secure_url('forum/create') }}" class="qt-btn qt-btn-primary qt-btn-xl">New Discussion</a></p>
				<div class="row">
					
					<div class="col s12 m4 qt-spacer-s">
						
						 <div class="qt-widget">
                                    <div class="qt-widget-social">
                                        <h5 class="qt-widget-title"><span>Category</span></h5>
                                        <ul class="qt-socials">
                                             <li>
                                                <a class="qt-btn qt-btn-l qt-socialicon">
                    <i class="qticon-earth" style="color: black; "></i>
                </a>
                                                <h5><a href="#">All</a></h5>
                                            </li>
                                            @foreach($tags as $tag)
                                            <li>
                                                <a class="qt-btn qt-btn-l qt-socialicon">
                    <i class="qticon-earth" style="color: black; "></i>
                </a>
                                                <h5><a href="#">{{$tag}}</a></h5>
                                            </li>
                                            @endforeach
                                           

                                        </ul>
                                    </div>
                                </div>
						
						
						<!-- ITEM MEDIUM END ========================= -->
					</div>
					<div class="col s12 m8 qt-spacer-s">
                       
						 <div class="qt-widget">
                                    <h5 class="qt-widget-title"><span>Post</span></h5>
                                    <div class="qt-widget-categories qt-widget-list">

                                    @forelse($forums as $forum)
                                        <!-- ITEM INLINE  ========================= -->
                                        <div class="qt-part-archive-item qt-part-archive-item-inline">
                                            <a class="qt-inlineimg" href="{{ secure_url('forum/' . $forum->slug ) }}">
        <img width="150" height="150" src="{{ Gravatar::src($forum->user->email) }}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="">
    </a>
                                            <p class="qt-date">{{ $forum->published_at->diffForHumans() }}</p>
                                            <p style="float: right;">Comment : 1</p>
                                            <h5 class="tit qt-ellipsis-2 qt-t">
        <a class="" href="{{ secure_url('forum/' . $forum->slug ) }}">
            {{ $forum->title }}   </a> <ul class="qt-tags ">
													@foreach($forum->tags as $tag)
													<li>
														 <a>
															{{ $tag }}
														  </a>
													</li>
                                                    @endforeach
												</ul>
    </h5>

                                        </div>
                                        <!-- ITEM INLINE END ========================= -->
                                        @empty
                                        <h1>Nothing Yet</h1>
                                        @endforelse

                                       
                                        <!-- ITEM INLINE END ========================= -->


                                       
                                        <!-- ITEM INLINE END ========================= -->
                                    </div>
                                </div>

						
						<!-- ITEM MEDIUM END ========================= -->
					</div>
				   
				</div>
<center>{!! $forums->links() !!}</center> 
			</div>
			<!-- ======================= CONTENT SECTION END ======================= -->

		</div>
@endsection