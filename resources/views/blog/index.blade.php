@extends('layouts.app')
@section('head')
	<title>Blog</title>
@endsection

@section('content')
	
		<!-- ======================= MAIN SECTION  ======================= -->
		<div id="maincontent" class="qt-main qt-paper">

			<!-- ======================= HEADER SECTION ======================= -->
			<!-- HEADER CAPTION ========================= -->
			<div class="qt-pageheader qt-pageheader-short qt-negative" data-bgimage="
			@foreach($blogbanners as $blogbanner)
			{{ secure_url('images/blog/banner/' . $blogbanner->image  )}}
			@endforeach
			" data-parallax="1">
				<div class="qt-headercontainer">
					<div class="qt-container">
						<div data-200-top="opacity:1" data--250-top="opacity:0">
							<h1 class="qt-caption qt-spacer-s">Blog News</h1>
						</div>
					</div>
				</div>
			</div>
			<!-- HEADER CAPTION END ========================= -->
			<!-- ======================= HEADER SECTION END ======================= -->

			<!-- ======================= CONTENT SECTION ======================= -->
			<div id="qtcontents" class="qt-container qt-vertical-padding-l">
				<div class="row">
					<div class="col s12 m12 l8">
					@forelse($blogs as $blog)
						<!-- ITEM LARGE ========================= -->
						<div class="qt-part-archive-item qt-part-archive-item-large">
							<div class="qt-part-archive-item-header qt-content-primary-dark" data-bgimage="{{ secure_asset('images/blog/thumb/' . $blog->image )}}" data-parallax="0">
								<div class="qt-topmetas">
									<div class="qt-container">
										<p class="qt-item-metas qt-small">
											<span class="qt-posttype"><i class="dripicons-align-justify"></i>5" Comment</span>
											
										</p>
									</div>
								</div>
								<div class="qt-vc">
									<div class="qt-headercontainer qt-vi-bottom">
										<div class="qt-container">
											<ul class="qt-tags">
												<li>
													@forelse($blog->tags as $tag)
														 <a href="#">
														 {{ $tag }}
														  </a>
								                	@empty
								                	No Tag Here
								                	@endforelse
												</li>
											</ul>
											<div>
												<h4 class="qt-caption qt-spacer-s">
							<a href="#temporary-link">
								{{ $blog->title }}						</a>
						</h4>
												<p class="qt-item-metas qt-small">

													<a href="#author-url" class="qt-author-thumb"><img src="{{ Gravatar::src($blog->user->email) }}" alt="Author" width="50" height="50"></a> <a href="#author-url" class="qt-authorurl">{{ $blog->user->name }}</a> | {{ $blog->published_at->diffForHumans() }}
													<a class="right" href="#temporary-link">
								Read More <i class="dripicons-arrow-thin-right"></i>
							</a>
												</p>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="qt-itemcontents qt-spacer-s">
								<p>
									<a href="{{ url('blog/' . $blog->slug )}}" class="qt-btn qt-readmore qt-btn-xl qt-btn-primary">Read More</a> {!! Markdown::parse(Str_limit($blog->content, 100)) !!}
								</p>
							</div>
						</div>
						<!-- ITEM LARGE END ========================= -->
						<hr class="qt-clearfix">
						@empty
						<h1>No Blog Posted Yet</h1>
						<!-- ITEM LARGE END ========================= -->
						<hr class="qt-clearfix">
						@endforelse
						

					</div>
					<div class="col s12 m12 l1">
						<hr class="qt-spacer-m">
					</div>
					<div class="qt-sidebar col s12 m12 l3">
						<!-- SIDEBAR ================================================== -->
						<div id="qtSidebar" class="qt-widgets qt-sidebar-main qt-content-aside row qt-masonry">
							
							
							<div class="col s12 m3 l12 qt-ms-item">
								<div class="qt-widget">
									<h5 class="qt-widget-title"><span>Find by tag</span></h5>
									<div class="qt-widget-tags">
										<ul class="qt-tags">
										@foreach($tags as $tag)
											<li><a href="#">{{ $tag }}</a></li>
										@endforeach
										</ul>
									</div>
								</div>
							</div>




						</div>
						<!-- SIDEBAR END ================================================== -->
					</div>
				</div>

			</div>
			<!-- ======================= CONTENT SECTION END ======================= -->


		</div>
		<div class="qt-content-primary qt-negative">
		<div class=" qt-container" style="padding: 40px;">
		
		
			{!! $blogs->render() !!}
		
		</div>
		
		</div>
		
		<!-- PAGINATION END ========================= -->

		<!-- ======================= MAIN SECTION END ======================= -->
@endsection