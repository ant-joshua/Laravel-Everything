@extends('layouts.app')

@section('head')
	<title>Portfolio</title>
@endsection

@section('content')
<!-- ================================ MENU END  ================================================================ -->

		<!-- ======================= MAIN SECTION  ======================= -->
		<div id="maincontent" class="qt-main qt-paper">

			<!-- ======================= HEADER SECTION ======================= -->
			<!-- HEADER CAPTION ========================= -->
			<div class="qt-pageheader qt-pageheader-short qt-negative" data-bgimage="{{ secure_url('images/818978.png')}}" data-parallax="1">
				<div class="qt-headercontainer">
					<div class="qt-container">
						<div data-200-top="opacity:1" data--250-top="opacity:0">
							<h1 class="qt-caption qt-spacer-s">Portfolio</h1>
						</div>
					</div>
				</div>
			</div>
			<!-- HEADER CAPTION END ========================= -->
			




			<!-- ======================= HEADER SECTION END ======================= -->
			<div id="qtcontents" class="qt-container qt-vertical-padding-l">
				<div class="row">
					@foreach($portfolios as $portfolio)
					<div class="col s12 m4 qt-spacer-s">

						<!-- ITEM MEDIUM  ========================= -->
						<div class="qt-part-archive-item qt-part-archive-item-medium">

							<a data-fancybox="gallery" href="{{ secure_url('images/portfolio/' . $portfolio->image )}}"><img src="{{ secure_url('images/portfolio/thumb/' . $portfolio->image )}}"></a>
							<div class="qt-itemcontents">

								<p class="qt-small qt-details">
									<a href="#author-url" class="qt-author-thumb">{{ Gravatar::src($portfolio->user->email) }}</a> <a href="#author-url" class="qt-authorurl">{{ $portfolio->user->name }}</a> | {{ $portfolio->published_at->diffForHumans() }}
								</p>
								<h5 class="qt-title qt-ellipsis-2 qt-t ">
			<a href="#temporary-link">
				{{ $portfolio->title }}				</a>
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
				<div class=" qt-container" style="padding: 40px;">
		
					{!! $portfolios->render() !!}
				
				</div>
			</div>
			<!-- PAGINATION END ========================= -->

		</div>
		<!-- ======================= MAIN SECTION END ======================= -->

@endsection