@extends('layouts.app')
@section('head')
	<title>Home | Majestic-x</title>
@endsection
@section('content')

		<!-- ======================= MAIN SECTION  ======================= -->
		<div id="maincontent" class="qt-main qt-paper">

			<!-- ======================= SLIDER SECTION ======================= -->
			<!-- SLIDESHOW  ========================= -->
			<div class="slider qt-material-slider qt-hero-slider" data-timeout="4000">
				<ul class="slides">
				@forelse($sliders as $slider)
					<li>
						<div class="qt-part-archive-item qt-part-archive-item-slide qt-slider-caption qt-vc qt-negative">
							<div class="qt-part-archive-item-header qt-content-primary-dark" data-bgimage="{{ secure_url('images/slider/thumb/' . $slider->image)}}" data-parallax="0" data-attachment="local">
								<div class="qt-vc">
									<div class="qt-headercontainer qt-vi-bottom">
										<div class="qt-container">
											<ul class="qt-tags">
											</ul>
											<h2 class="qt-fontsize-h2 qt-caption">{{ $slider->title }}</h2>
											<p class="qt-spacer-s hide-on-med-and-down">{{ $slider->content }}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				@empty
					<li>
						<div class="qt-part-archive-item qt-part-archive-item-slide qt-slider-caption qt-vc qt-negative">
							<div class="qt-part-archive-item-header qt-content-primary-dark" data-bgimage="https://wallpaperscraft.com/image/game_warrior_world_of_warcraft_wrath_of_the_lich_king_94753_1920x1080.jpg" data-parallax="0" data-attachment="local">
								<div class="qt-vc">
									<div class="qt-headercontainer qt-vi-bottom">
										<div class="qt-container">
											<ul class="qt-tags">
												<li><a href="#">Category name</a></li>
											</ul>
											<h2 class="qt-fontsize-h2 qt-caption">16 Ways to Completely Revamp Your Bike</h2>
											<p class="qt-spacer-s hide-on-med-and-down">Some text to give some more info before we decide to click and enter in this page. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed iaculis ipsum elit, in porta ligula imperdiet eu. Lorem ipsum dolor sit amet, consectetur adipiscing
												elit. Donec pellentesque orci ante, nec aliquam libero auctor eget.</p>
											<p class="qt-spacer-s"><a href="#temporary-link" class="qt-btn qt-btn-primary qt-btn-xl">Read More</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="qt-part-archive-item qt-part-archive-item-slide qt-slider-caption qt-vc qt-negative">
							<div class="qt-part-archive-item-header qt-content-primary-dark" data-bgimage="https://wallpaperscraft.com/image/game_warrior_world_of_warcraft_wrath_of_the_lich_king_94753_1920x1080.jpg" data-parallax="0" data-attachment="local">
								<div class="qt-vc">
									<div class="qt-headercontainer qt-vi-bottom">
										<div class="qt-container">
											<ul class="qt-tags">
												<li><a href="#">Category name</a></li>
											</ul>
											<h2 class="qt-fontsize-h2 qt-caption">16 Ways to Completely Revamp Your Bike</h2>
											<p class="qt-spacer-s hide-on-med-and-down">Some text to give some more info before we decide to click and enter in this page. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed iaculis ipsum elit, in porta ligula imperdiet eu. Lorem ipsum dolor sit amet, consectetur adipiscing
												elit. Donec pellentesque orci ante, nec aliquam libero auctor eget.</p>
											<p class="qt-spacer-s"><a href="#temporary-link" class="qt-btn qt-btn-primary qt-btn-xl">Read More</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				@endforelse
				</ul>
				<div class="row qt-nopadding qt-hero-slider-index">
				@forelse($sliders as $slider)
					<div class="col m3 qt-hero-slider-index-item qt-negative qt-active">
						<div class="qt-vc">
							<div class="qt-vi">
								<h5 class="qt-tit qt-ellipsis-3 qt-t">{{ $slider->title }}</h5>
							</div>
						</div>
						<a href="#" class="qt-hover" data-qtslidegoto=""></a>
						<div class="qt-bg" data-bgimage="{{ secure_url('images/slider/thumb/' . $slider->image )}}">
						</div>
					</div>
				@empty
				<!-- INDEX ITEM -->
					<div class="col m3 qt-hero-slider-index-item qt-negative qt-active">
						<div class="qt-vc">
							<div class="qt-vi">
								<h5 class="qt-tit qt-ellipsis-3 qt-t">16 Ways to Completely Revamp Your Bike</h5>
							</div>
						</div>
						<a href="#" class="qt-hover" data-qtslidegoto="0"></a>
						<div class="qt-bg" data-bgimage="images/medium/13.jpg">
						</div>
					</div>
					<!-- INDEX ITEM END -->
					<!-- INDEX ITEM -->
					<div class="col m3 qt-hero-slider-index-item qt-negative qt-active">
						<div class="qt-vc">
							<div class="qt-vi">
								<h5 class="qt-tit qt-ellipsis-3 qt-t">How to Get Hired in the Internet Industry</h5>
							</div>
						</div>
						<a href="#" class="qt-hover" data-qtslidegoto="1"></a>
						<div class="qt-bg" data-bgimage="images/medium/3.jpg">
						</div>
					</div>
					<!-- INDEX ITEM END -->
					<!-- INDEX ITEM -->
					<div class="col m3 qt-hero-slider-index-item qt-negative qt-active">
						<div class="qt-vc">
							<div class="qt-vi">
								<h5 class="qt-tit qt-ellipsis-3 qt-t">10 Things Everyone Hates About Email</h5>
							</div>
						</div>
						<a href="#" class="qt-hover" data-qtslidegoto="2"></a>
						<div class="qt-bg" data-bgimage="images/medium/34.jpg">
						</div>
					</div>
					<!-- INDEX ITEM END -->
					<!-- INDEX ITEM -->
					<div class="col m3 qt-hero-slider-index-item qt-negative qt-active">
						<div class="qt-vc">
							<div class="qt-vi">
								<h5 class="qt-tit qt-ellipsis-3 qt-t">Never Mess With Memes And Here's The Reasons Why</h5>
							</div>
						</div>
						<a href="#" class="qt-hover" data-qtslidegoto="3"></a>
						<div class="qt-bg" data-bgimage="images/medium/27.jpg">
						</div>
					</div>
					<!-- INDEX ITEM END -->
				@endforelse

				</div>
			</div>
			<!-- SLIDESHOW TESTIMONIAL END ========================= -->
			<!-- ======================= SLIDER SECTION END ======================= -->

			

			<!-- ======================= CUSTOM CARDS SECTION ======================= -->
			<!-- POSTS CAROUSEL ================================================== -->
			<div class="">
				<div class="qt-slickslider-container qt-slickslider-cards">
					<div class="qt-slickslider qt-invisible qt-animated qt-slickslider-multiple" data-slidestoshow="4" data-slidestoscroll="1" data-variablewidth="false" data-arrows="true" data-dots="true" data-infinite="true" data-centermode="false" data-pauseonhover="true"
					  data-autoplay="false" data-arrowsmobile="false" data-centermodemobile="false" data-dotsmobile="false" data-slidestoshowmobile="1" data-variablewidthmobile="true" data-infinitemobile="false" data-slidestoshowipad="3">
						@forelse($blogs as $blog)
						<!-- SLIDESHOW ITEM -->
						<div class="qt-item qt-item-card">

							<!-- CARD SIMPLE ========================= -->
							<div class="qt-part-archive-item qt-part-archive-item-card-interactive qt-interactivecard qt-paper">
								<div class="qt-part-archive-item-header qt-content-primary-dark" data-bgimage="{{ secure_url('images/blog/thumb/' . $blog->image )}}" data-parallax="0">
									<div class="qt-topmetas">
										<div class="qt-container">
											<p class="qt-item-metas qt-small">
												<span class="qt-posttype"><i class="dripicons-ticket"></i> {{ $blog->published_at->diffForHumans() }}</span>
												<a class="right qt-activate-card" href="#">
						<i class="dripicons-cross"></i>
					</a>
											</p>
										</div>
									</div>
									<div class="qt-vc qt-titles qt-negative">
										<div class="qt-vi-bottom">
											<div class="qt-container">
												<ul class="qt-tags ">
													@forelse($blog->tags as $tag)
													<li>
														 <a href="#">
														 {{ $tag }}
														  </a>
													</li>
								                	@empty
								                	No Tag Here
								                	@endforelse
												</ul>
												<h4 class="qt-title qt-ellipsis-2 qt-t qt-spacer-s">
						<a href="#temporary-link" class="qt-activate-card">
							{{ $blog->title }}						</a>
					</h4>
												<p class="qt-small qt-details qt-spacer-s">
													<a class="right qt-activate-card" href="#">
							Read More <i class="dripicons-arrow-thin-right"></i>
						</a>
												</p>
												<p class="qt-actionpart">
													<a href="{{ secure_url('blog/' . $blog->slug )}}" class="qt-btn qt-btn-primary">
							Read More
						</a>
												</p>
											</div>
										</div>
									</div>
								</div>


								<div class="qt-part-archive-item-morecontents qt-cardtabs">
									<ul class="tabs qt-nopadding">
										<li class="tab col s3"><a href="#" data-activatetab="details"><h6>Details</h6></a></li>
										<li class="tab col s3"><a href="#" data-activatetab="related"><h6>Related</h6></a></li>
									</ul>
									<div class="col s12 qt-the-content" data-details>
										<div class="qt-container">
											<h4 class="qt-spacer-m">{{ $blog->title }}</h4>
											<div class="qt-small qt-spacer-s">
												{!! Markdown::parse(Str_limit($blog->content, 100)) !!}
											</div>
										</div>
									</div>
									
									<div class="col s12 qt-the-content qt-hidden" data-related>
										<div class="qt-container">
											<h4 class="qt-spacer-m">
					Related Post
				</h4>
											<hr class="qt-spacer-s">
											<div class="row qt-lowpadding">
											@foreach($blog->tags as $tag)
												
													<div class="col s4">



													<!-- CARD MINI ========================= -->
													<a href="#temporary-link" class="qt-part-archive-item qt-part-archive-item-card-mini">
														<div class="qt-item-image" data-bgimage="{{ secure_url('images/medium/35.jpg')}}" data-parallax="0" data-bgattachment="local">
														</div>
														<p class="qt-ellipsis-3 qt-small">
															inject tags retrieve related tags blogs only</p>
													</a>
													<!-- CARD MINI END ========================= -->
												</div>
												
											@endforeach
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- CARD SIMPLE ========================= -->
						</div>
						<!-- SLIDESHOW ITEM END -->
						@empty
						
							<h1 style="color: white; text-align: center;">No Post Yet</h1>
						
						@endforelse
						<!-- SLIDESHOW ITEM -->

					</div>
				</div>
			</div>
			<!--  POSTS CAROUSEL END ================================================== -->
			<!-- ======================= CUSTOM CARDS SECTION END ======================= -->


			<!-- ======================= CONTENT SECTION ======================= -->
			<div id="qtcontents" class="qt-container qt-vertical-padding-l">
				<div class="row">
					<div class="col s12 m12 l12">


						<div class="qt-sectiontitle-inline">
							<h2 class="qt-inlinetitle">
							Popular Videos <a class="qt-inlinelink"><span>View More</span></a>
						</h2>
						</div>
						<hr class="qt-spacer-m">

						<div class="row">
						 @foreach($videoList as $video)
					<div class="col s12 m4 qt-spacer-s">

						<!-- ITEM MEDIUM  ========================= -->
						<div class="qt-part-archive-item qt-part-archive-item-medium">

							<a data-fancybox="gallery" href="https://www.youtube.com/embed/{{ $video->id->videoId }}"><img src="{{ $video->snippet->thumbnails->high->url }}"></a>
							<div class="qt-itemcontents">

								<p class="qt-small qt-details">
									<a href="#author-url" class="qt-author-thumb"><img src="{{ secure_url('images/authors/4.jpg')}}" alt="Author" width="50" height="50"></a> <a href="#author-url" class="qt-authorurl">Majestic-x</a> |{{ $video->snippet->publishedAt }}
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


						<hr class="qt-clearfix qt-spacer-m">

						<!-- EXTRA -->

						

						<hr class="qt-clearfix">
					</div>
					

				</div>
			</div>
			<!-- ======================= CONTENT SECTION END ======================= -->


			<!-- ======================= NEWSLETTER SECTION ======================= -->
			<div class="qt-relative qt-vertical-padding-l qt-center qt-content-primary qt-negative" data-bgimage="{{ secure_url('images/get-connected-bg.jpg')}}" data-parallax="1">
				<div class="qt-container">
					<h2>Get Connected</h2>
					<h3 class="qt-text-secondary">Join Our Teamspeak 3 Server</h3>
					<a href="ts3server:ts3.majestic-x.com" class="qt-btn qt-btn-primary qt-btn-xl qt-fullwidth">Click Here</a>
				</div>
				<hr class="qt-spacer-s">
				
			</div>
			<!-- ======================= NEWSLETTER SECTION ======================= -->


			<!-- ======================= CONTENT SECTION ======================= -->
			<div id="qtcontents" class="qt-container qt-vertical-padding-l">
				<div class="row">
					<div class="col s12 m12 l12">


						<div class="qt-sectiontitle-inline">
							<h2 class="qt-inlinetitle">
							Portfolio <a href="{{ secure_url('portfolio')}}" class="qt-inlinelink"><span>View More</span></a>
						</h2>
						</div>
						<hr class="qt-spacer-m">

						<div class="row">
						@forelse($portfolios as $portfolio)
							<div class="col s12 m4">


								<!-- ITEM MEDIUM  ========================= -->
								<div class="qt-part-archive-item qt-part-archive-item-medium">

									<a data-fancybox="gallery" href="{{ secure_url('images/portfolio/' . $portfolio->image )}}"><img src="{{ secure_url('images/portfolio/thumb/' . $portfolio->image )}}"></a>
									<div class="qt-itemcontents">

										<p class="qt-small qt-details">
											<a href="#author-url" class="qt-author-thumb"><img src="images/authors/1.jpg" alt="Author" width="50" height="50"></a> <a href="#author-url" class="qt-authorurl">{{ $portfolio->user->name }}</a> | {{ $portfolio->published_at->diffForHumans() }}
										</p>
										<h5 class="qt-title qt-ellipsis-2 qt-t ">
			<a href="#temporary-link">
				{{ $portfolio->title }}			</a>
		</h5>


									</div>
								</div>
								<!-- ITEM MEDIUM END ========================= -->
							</div>
						@empty
							<h1>No Portfolio Posted Yet</h1>
						@endforelse
							
						

						</div>


						<hr class="qt-clearfix qt-spacer-m">

						<!-- EXTRA -->

						<hr class="qt-clearfix">
					</div>
					

				</div>
			</div>
			<!-- ======================= CONTENT SECTION END ======================= -->


			<!-- ======================= CUSTOM CARDS SECTION ======================= -->

			<div class="row qt-nopadding">
				<div class="col s12 m4">

					<!-- CARD SIMPLE ========================= -->
					<div class="qt-part-archive-item qt-part-archive-item-customcard qt-negative">
						<div class="qt-part-archive-item-header">
							<div class="qt-vc">
								<div class="qt-headercontainer qt-vi-bottom">
									<div class="qt-container">
										<div>
											<h3 class="qt-caption qt-spacer-s">
							<a href="#custom-link-here">
								Painkiller					</a>
						</h3>
											<p class="qt-item-metas qt-small">
												Ceo/Developer/Gamer <a class="right" href="#link-to-post">
								Read Now <i class="dripicons-arrow-thin-right"></i>
							</a>
											</p>

										</div>
									</div>
								</div>
							</div>
							<div class="qt-header-bg" data-bgimage="images/ceo/painkiller.jpg" data-parallax="0" data-attachment="relative">
							</div>
						</div>
					</div>
					<!-- CARD SIMPLE END ========================= -->
				</div>
				<div class="col s12 m4">

					<!-- CARD SIMPLE ========================= -->
					<div class="qt-part-archive-item qt-part-archive-item-customcard qt-negative">
						<div class="qt-part-archive-item-header">
							<div class="qt-vc">
								<div class="qt-headercontainer qt-vi-bottom">
									<div class="qt-container">
										<div>
											<h3 class="qt-caption qt-spacer-s">
							<a href="#custom-link-here">
								CrazyDude7						</a>
						</h3>
											<p class="qt-item-metas qt-small">
												Ceo/Gamer <a class="right" href="#link-to-post">
								Read Now <i class="dripicons-arrow-thin-right"></i>
							</a>
											</p>

										</div>
									</div>
								</div>
							</div>
							<div class="qt-header-bg" data-bgimage="images/ceo/crazydude7.jpg" data-parallax="0" data-attachment="relative">
							</div>
						</div>
					</div>
					<!-- CARD SIMPLE END ========================= -->
				</div>
				<div class="col s12 m4">




					<!-- CARD SIMPLE ========================= -->
					<div class="qt-part-archive-item qt-part-archive-item-customcard qt-negative">
						<div class="qt-part-archive-item-header">
							<div class="qt-vc">
								<div class="qt-headercontainer qt-vi-bottom">
									<div class="qt-container">
										<div>
											<h3 class="qt-caption qt-spacer-s">
							<a href="#custom-link-here">
								Spartan#419						</a>
						</h3>
											<p class="qt-item-metas qt-small">
												Ceo/Programmer/Gamer <a class="right" href="#link-to-post">
								Read Now <i class="dripicons-arrow-thin-right"></i>
							</a>
											</p>

										</div>
									</div>
								</div>
							</div>
							<div class="qt-header-bg" data-bgimage="images/ceo/spartan.jpg" data-parallax="0" data-attachment="relative">
							</div>
						</div>
					</div>
					<!-- CARD SIMPLE END ========================= -->
				</div>
			</div>

			<!-- ======================= CUSTOM CARDS SECTION END ======================= -->



		</div>
		<!-- ======================= MAIN SECTION END ======================= -->
		@endsection