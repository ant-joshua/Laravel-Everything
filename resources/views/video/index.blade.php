@extends('layouts.app')

@section('head')
	<title>Video</title>
@endsection

@section('content')
<!-- ================================ MENU END  ================================================================ -->

		<!-- ======================= MAIN SECTION  ======================= -->
		<div id="maincontent" class="qt-main qt-paper">

			<!-- ======================= HEADER SECTION ======================= -->
			<!-- HEADER CAPTION ========================= -->
			<div class="qt-pageheader qt-pageheader-short qt-negative" data-bgimage="{{ secure_url('images/video-banner.jpg')}}" data-parallax="1">
				<div class="qt-headercontainer">
					<div class="qt-container">
						<div data-200-top="opacity:1" data--250-top="opacity:0">
							<h1 class="qt-caption qt-spacer-s">Video's</h1>
						</div>
					</div>
				</div>
			</div>
			<!-- HEADER CAPTION END ========================= -->
			




			<!-- ======================= HEADER SECTION END ======================= -->
			<div id="qtcontents" class="qt-container qt-vertical-padding-l">
				<div class="row">
					@foreach($videoList as $video)
					<div class="col s12 m4 qt-spacer-s">

						<!-- ITEM MEDIUM  ========================= -->
						<div class="qt-part-archive-item qt-part-archive-item-medium">

							<a data-fancybox="gallery" href="https://www.youtube.com/embed/{{ $video->id->videoId }}"><img src="{{ $video->snippet->thumbnails->high->url }}"></a>
							<div class="qt-itemcontents">

								<p class="qt-small qt-details">
									<a href="#author-url" class="qt-author-thumb"><img src="images/authors/4.jpg" alt="Author" width="50" height="50"></a> <a href="#author-url" class="qt-authorurl">Majestic-x</a> |{{ $video->snippet->publishedAt }}
								</p>
								<h5 class="qt-title qt-ellipsis-2 qt-t ">
			<a href="#temporary-link">
				{!! Markdown::parse(Str_limit($video->snippet->title, 50)) !!}	</a>
		</h5>


							</div>
						</div>
						<!-- ITEM MEDIUM END ========================= -->
					</div>

					@endforeach
					
				
				</div>

			</div>
			<!-- ======================= CONTENT SECTION END ======================= -->


			<!-- PAGINATION ========================= -->
			<div class="qt-pagination qt-content-primary qt-negative">
				<ul class="pagination qt-container">
					<li>
						<h3>Pages</h3></li>
					<li class="item waves-effect"><a href="#!" class=""><i class="dripicons-chevron-left"></i></a></li>
					<li class="item waves-effect"><a href="#!" class=""><i class="dripicons-chevron-right"></i></a></li>


					<li class="item active"><a href="#!" class="disabled">1</a></li>
					<li class="item waves-effect"><a href="#!">2</a></li>
					<li class="item waves-effect"><a href="#!">3</a></li>
					<li class="item waves-effect"><a href="#!">4</a></li>
					<li class="item waves-effect"><a href="#!">5</a></li>
					<li class="item waves-effect"><a href="#!">6</a></li>
					<li class="item waves-effect"><a href="#!">7</a></li>


				</ul>
			</div>
			<!-- PAGINATION END ========================= -->




		</div>
		<!-- ======================= MAIN SECTION END ======================= -->

@endsection