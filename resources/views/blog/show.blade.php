@extends('layouts.app')

@section('head')
<title>
	{{ $blog->title }}
</title>
@endsection
@section('content')
	<!-- ======================= MAIN SECTION  ======================= -->
		<div id="maincontent" class="qt-main qt-paper">

			<!-- ======================= HEADER SECTION ======================= -->
			<!-- HEADER CAPTION ========================= -->
			<div class="qt-pageheader qt-negative" data-bgimage="{{ url('images/blog/thumb/' . $blog->image )}}" data-parallax="1">
				<div class="qt-headercontainer">
					<div class="qt-container">
						<ul class="qt-tags">
							<li>@forelse($blog->tags as $tag)
						 <a href="#">
						 {{ $tag }}
						  </a>
                	@empty
                	No Tag Here
                	@endforelse</li>
						</ul>
						<div data-200-top="opacity:1" data--250-top="opacity:0">
							<h1 class="qt-caption qt-spacer-s">{{ $blog->title }}</h1>
							<p class="qt-item-metas">

								<a href="#author-url" class="qt-author-thumb"><img src="{{ Gravatar::src($blog->user->email) }}" alt="Author" width="50" height="50"></a> <a href="#author-url" class="qt-authorurl">{{ $blog->user->name }}</a> | {{ $blog->published_at->diffForHumans() }}
							</p>
							
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
						<div class="qt-the-content">
						{!! Markdown::parse($blog->content) !!}
						
						
						<h3 class="qt-spacer-m" style="margin-bottom: 15px;"><span>Comment</span></h3>
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
			             @foreach($blog->comment('created_at', 'desc')->paginate(5) as $comment)
					            <div class="qt-part-archive-item qt-part-archive-item-inline">
					                                            <a class="qt-inlineimg" href="{{ url('forum/' . $blog->slug ) }}">
					        <img width="150" height="150" src="{{ Gravatar::src($comment->user->email) }}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="">
					    </a>
                            <p class="qt-date">{{ $comment->published_at->diffForHumans() }}</p>
                            <h5 class="tit qt-ellipsis-2 qt-t">
					        <a class="" href="{{ url('forum/' . $blog->slug ) }}">
					            {{ $comment->comment }}   </a> <ul class="qt-tags ">
					                         
					                        </ul>
					    </h5>

                                        </div>
             		 @endforeach
						 <div id="comments" class="comments-area comments-list qt-part-post-comments qt-spacer-s">
							<div id="respond" class="comment-respond">
							<h4 id="reply-title" class="comment-reply-title qt-spacer-s">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/demos/vlogger/demo/michael-wittmann-to-airfix-how-the-tiger-tank-became-a-brand-icon/#respond" style="display:none;"><i class="mdi-navigation-cancel icon-l"></i></a></small></h4> 
							{!! Form::open(['files'=>false, 'id' => 'qw-commentform' ,'class' => 'qt-clearfix'])   !!}
							 
							    <hr class="qt-spacer-s"><div class="input-field">
							    {!! Form::textarea('comment', null, ['class'=>'materialize-textarea', 'id'=>'my-editor', 'required'=>'required','aria-required'=>true]) !!}
							    <label for="comment" class="">Comment*</label></div>
							    <hr class="qt-spacer-s">
							  {!! Form::submit('Post Comment', array( 'class'=>'qt-btn qt-btn-primary qt-btn-xl' )) !!}
							{!! Form::close() !!}
							</div><!-- #respond -->

							</div>
						</div>
					</div>
					<div class="col s12 m12 l1">
						<hr class="qt-spacer-m">
					</div>
					<div class="qt-sidebar col s12 m12 l3">
						<!-- SIDEBAR ================================================== -->
						<div id="qtSidebar" class="qt-widgets qt-sidebar-main qt-content-aside row qt-masonry">
							
						
							<div class="col s12 m3 l12 qt-ms-item">
								<div class="qt-widget">
									<h5 class="qt-widget-title"><span>Last posts</span></h5>
									<div class="qt-widget-categories qt-widget-list">

									@foreach($lastposts as $post)
										<!-- ITEM INLINE  ========================= -->
										<div class="qt-part-archive-item qt-part-archive-item-inline">
											<a class="qt-inlineimg" href="#temporary-link">
		<img width="150" height="150" src="imagestemplate/thumbnail/31.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="">
	</a>
											<p class="qt-date">July 25, 2017</p>
											<h6 class="tit qt-ellipsis-2 qt-t">
		<a class="" href="#temporary-link">
			{{ $post->title }}	</a>
	</h6>

										</div>
										<!-- ITEM INLINE END ========================= -->

										@endforeach
										
									</div>
								</div>
							</div>
							<div class="col s12 m3 l12 qt-ms-item">
								<div class="qt-widget">
									<h5 class="qt-widget-title"><span>Most popular</span></h5>
									<div class="qt-widget-categories qt-widget-list">


										<!-- ======= ITEM ======= -->


										<!-- ITEM MEDIUM  ========================= -->
										<!-- 
										<div class="qt-part-archive-item qt-part-archive-item-medium">

											<div class="qt-part-archive-item-header qt-content-primary-dark" data-bgimage="imagestemplate/medium/35.jpg" data-parallax="0" data-attachment="local">
												<div class="qt-topmetas">
													<p class="qt-item-metas qt-small">
														<span class="qt-posttype"><i class="dripicons-align-justify"></i>05:37</span>
														<a class="qt-secondaryaction right tooltipped qt-tooltipped" data-position="left" data-delay="20" data-tooltip="Save for later"><i class="dripicons-clock"></i></a>
													</p>
												</div>

												<ul class="qt-tags qt-bottommetas">
													<li><a href="#">Category name</a></li>
												</ul>

											</div>
											<div class="qt-itemcontents">

												<p class="qt-small qt-details">
													<a href="#author-url" class="qt-author-thumb"><img src="imagestemplate/authors/1.jpg" alt="Author" width="50" height="50"></a> <a href="#author-url" class="qt-authorurl">Anthony Rother</a> | 03 October 2016
												</p>
												<h5 class="qt-title qt-ellipsis-2 qt-t ">
			<a href="#temporary-link">
				Quiz: How Much Do You Know about Memes?			</a>
		</h5>


											</div>
										</div>
										-->
										<!-- ITEM MEDIUM END ========================= -->
										<!-- ======= ITEM END ======= -->
										
										<h3>Under Development</h3>
									</div>
								</div>
							</div>

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

			<!-- ======================= UPCOMING POST SECTION ======================= -->


			
			<!-- ======================= UPCOMING POST SECTION END ======================= -->

			<!-- ======================= RELATED SECTION ======================= -->
			<div class="qt-content-primary-dark qt-negative qt-related-section qt-vertical-padding-l">
				<div class="qt-container">
					<div class="qt-sectiontitle-inline">
						<h3 class="qt-inlinetitle">
						Related news <a class="qt-inlinelink"><span>View More</span></a>
					</h3>
						<hr class="qt-clearfix  qt-spacer-s hide-on-med-and-up">
						<span class="qt-carouselcontrols">
						<a class="qt-roundicon-circle" data-slickprev="#relatedslider">
							<i class="dripicons-chevron-left"></i>
						</a>
						<a class="qt-roundicon-circle" data-slicknext="#relatedslider">
							<i class="dripicons-chevron-right"></i>
						</a>
					</span>
					</div>
					<hr class="qt-spacer-m">
					<div id="relatedslider">
						<!-- POSTS CAROUSEL ================================================== -->
						<div class="row">
							<div class="qt-slickslider-container qt-slickslider-externalarrows">
								<div class="qt-slickslider qt-invisible qt-animated qt-slickslider-multiple" data-slidestoshow="3" data-variablewidth="false" data-arrows="false" data-dots="false" data-infinite="true" data-centermode="false" data-pauseonhover="true" data-autoplay="false"
								  data-arrowsmobile="false" data-centermodemobile="false" data-dotsmobile="false" data-slidestoshowmobile="1" data-variablewidthmobile="true" data-infinitemobile="false">


									<!-- SLIDESHOW ITEM -->
									<div class="qt-item col s12 m4">


										<!-- ITEM MEDIUM  ========================= -->
										<div class="qt-part-archive-item qt-part-archive-item-medium">

											<div class="qt-part-archive-item-header qt-content-primary-dark" data-bgimage="imagestemplate/medium/32.jpg" data-parallax="0" data-attachment="local">
												<div class="qt-topmetas">
													<p class="qt-item-metas qt-small">
														<span class="qt-posttype"><i class="dripicons-align-justify"></i>05:37</span>
														<a class="qt-secondaryaction right tooltipped qt-tooltipped" data-position="left" data-delay="20" data-tooltip="Save for later"><i class="dripicons-clock"></i></a>
													</p>
												</div>

												<ul class="qt-tags qt-bottommetas">
													<li><a href="#">Category name</a></li>
												</ul>

											</div>
											<div class="qt-itemcontents">

												<p class="qt-small qt-details">
													<a href="#author-url" class="qt-author-thumb"><img src="imagestemplate/authors/4.jpg" alt="Author" width="50" height="50"></a> <a href="#author-url" class="qt-authorurl">Anthony Rother</a> | 03 October 2016
												</p>
												<h5 class="qt-title qt-ellipsis-2 qt-t ">
			<a href="#temporary-link">
				15 Useful Tips From Experts In Honey			</a>
		</h5>


											</div>
										</div>
										<!-- ITEM MEDIUM END ========================= -->
									</div>
									<!-- SLIDESHOW ITEM END -->


									<!-- SLIDESHOW ITEM -->
									<div class="qt-item col s12 m4">


										<!-- ITEM MEDIUM  ========================= -->
										<div class="qt-part-archive-item qt-part-archive-item-medium">

											<div class="qt-part-archive-item-header qt-content-primary-dark" data-bgimage="imagestemplate/medium/30.jpg" data-parallax="0" data-attachment="local">
												<div class="qt-topmetas">
													<p class="qt-item-metas qt-small">
														<span class="qt-posttype"><i class="dripicons-align-justify"></i>05:37</span>
														<a class="qt-secondaryaction right tooltipped qt-tooltipped" data-position="left" data-delay="20" data-tooltip="Save for later"><i class="dripicons-clock"></i></a>
													</p>
												</div>

												<ul class="qt-tags qt-bottommetas">
													<li><a href="#">Category name</a></li>
												</ul>

											</div>
											<div class="qt-itemcontents">

												<p class="qt-small qt-details">
													<a href="#author-url" class="qt-author-thumb"><img src="imagestemplate/authors/2.jpg" alt="Author" width="50" height="50"></a> <a href="#author-url" class="qt-authorurl">Anthony Rother</a> | 03 October 2016
												</p>
												<h5 class="qt-title qt-ellipsis-2 qt-t ">
			<a href="#temporary-link">
				5 Things Everyone Gets Wrong About Sandwich			</a>
		</h5>


											</div>
										</div>
										<!-- ITEM MEDIUM END ========================= -->
									</div>
									<!-- SLIDESHOW ITEM END -->


									<!-- SLIDESHOW ITEM -->
									<div class="qt-item col s12 m4">


										<!-- ITEM MEDIUM  ========================= -->
										<div class="qt-part-archive-item qt-part-archive-item-medium">

											<div class="qt-part-archive-item-header qt-content-primary-dark" data-bgimage="imagestemplate/medium/2.jpg" data-parallax="0" data-attachment="local">
												<div class="qt-topmetas">
													<p class="qt-item-metas qt-small">
														<span class="qt-posttype"><i class="dripicons-align-justify"></i>05:37</span>
														<a class="qt-secondaryaction right tooltipped qt-tooltipped" data-position="left" data-delay="20" data-tooltip="Save for later"><i class="dripicons-clock"></i></a>
													</p>
												</div>

												<ul class="qt-tags qt-bottommetas">
													<li><a href="#">Category name</a></li>
												</ul>

											</div>
											<div class="qt-itemcontents">

												<p class="qt-small qt-details">
													<a href="#author-url" class="qt-author-thumb"><img src="imagestemplate/authors/1.jpg" alt="Author" width="50" height="50"></a> <a href="#author-url" class="qt-authorurl">Anthony Rother</a> | 03 October 2016
												</p>
												<h5 class="qt-title qt-ellipsis-2 qt-t ">
			<a href="#temporary-link">
				Quiz: How Much Do You Know about Memes?			</a>
		</h5>


											</div>
										</div>
										<!-- ITEM MEDIUM END ========================= -->
									</div>
									<!-- SLIDESHOW ITEM END -->


									<!-- SLIDESHOW ITEM -->
									<div class="qt-item col s12 m4">


										<!-- ITEM MEDIUM  ========================= -->
										<div class="qt-part-archive-item qt-part-archive-item-medium">

											<div class="qt-part-archive-item-header qt-content-primary-dark" data-bgimage="imagestemplate/medium/28.jpg" data-parallax="0" data-attachment="local">
												<div class="qt-topmetas">
													<p class="qt-item-metas qt-small">
														<span class="qt-posttype"><i class="dripicons-align-justify"></i>05:37</span>
														<a class="qt-secondaryaction right tooltipped qt-tooltipped" data-position="left" data-delay="20" data-tooltip="Save for later"><i class="dripicons-clock"></i></a>
													</p>
												</div>

												<ul class="qt-tags qt-bottommetas">
													<li><a href="#">Category name</a></li>
												</ul>

											</div>
											<div class="qt-itemcontents">

												<p class="qt-small qt-details">
													<a href="#author-url" class="qt-author-thumb"><img src="imagestemplate/authors/3.jpg" alt="Author" width="50" height="50"></a> <a href="#author-url" class="qt-authorurl">Anthony Rother</a> | 03 October 2016
												</p>
												<h5 class="qt-title qt-ellipsis-2 qt-t ">
			<a href="#temporary-link">
				20 Gifts You Can Give Your Boss if They Love Emails			</a>
		</h5>


											</div>
										</div>
										<!-- ITEM MEDIUM END ========================= -->
									</div>
									<!-- SLIDESHOW ITEM END -->


									<!-- SLIDESHOW ITEM -->
									<div class="qt-item col s12 m4">


										<!-- ITEM MEDIUM  ========================= -->
										<div class="qt-part-archive-item qt-part-archive-item-medium">

											<div class="qt-part-archive-item-header qt-content-primary-dark" data-bgimage="imagestemplate/medium/22.jpg" data-parallax="0" data-attachment="local">
												<div class="qt-topmetas">
													<p class="qt-item-metas qt-small">
														<span class="qt-posttype"><i class="dripicons-align-justify"></i>05:37</span>
														<a class="qt-secondaryaction right tooltipped qt-tooltipped" data-position="left" data-delay="20" data-tooltip="Save for later"><i class="dripicons-clock"></i></a>
													</p>
												</div>

												<ul class="qt-tags qt-bottommetas">
													<li><a href="#">Category name</a></li>
												</ul>

											</div>
											<div class="qt-itemcontents">

												<p class="qt-small qt-details">
													<a href="#author-url" class="qt-author-thumb"><img src="imagestemplate/authors/2.jpg" alt="Author" width="50" height="50"></a> <a href="#author-url" class="qt-authorurl">Anthony Rother</a> | 03 October 2016
												</p>
												<h5 class="qt-title qt-ellipsis-2 qt-t ">
			<a href="#temporary-link">
				20 Gifts You Can Give Your Boss if They Love Emails			</a>
		</h5>


											</div>
										</div>
										<!-- ITEM MEDIUM END ========================= -->
									</div>
									<!-- SLIDESHOW ITEM END -->


									<!-- SLIDESHOW ITEM -->
									<div class="qt-item col s12 m4">


										<!-- ITEM MEDIUM  ========================= -->
										<div class="qt-part-archive-item qt-part-archive-item-medium">

											<div class="qt-part-archive-item-header qt-content-primary-dark" data-bgimage="imagestemplate/medium/37.jpg" data-parallax="0" data-attachment="local">
												<div class="qt-topmetas">
													<p class="qt-item-metas qt-small">
														<span class="qt-posttype"><i class="dripicons-align-justify"></i>05:37</span>
														<a class="qt-secondaryaction right tooltipped qt-tooltipped" data-position="left" data-delay="20" data-tooltip="Save for later"><i class="dripicons-clock"></i></a>
													</p>
												</div>

												<ul class="qt-tags qt-bottommetas">
													<li><a href="#">Category name</a></li>
												</ul>

											</div>
											<div class="qt-itemcontents">

												<p class="qt-small qt-details">
													<a href="#author-url" class="qt-author-thumb"><img src="imagestemplate/authors/3.jpg" alt="Author" width="50" height="50"></a> <a href="#author-url" class="qt-authorurl">Anthony Rother</a> | 03 October 2016
												</p>
												<h5 class="qt-title qt-ellipsis-2 qt-t ">
			<a href="#temporary-link">
				10 Things Everyone Hates About Email			</a>
		</h5>


											</div>
										</div>
										<!-- ITEM MEDIUM END ========================= -->
									</div>
									<!-- SLIDESHOW ITEM END -->


									<!-- SLIDESHOW ITEM -->
									<div class="qt-item col s12 m4">


										<!-- ITEM MEDIUM  ========================= -->
										<div class="qt-part-archive-item qt-part-archive-item-medium">

											<div class="qt-part-archive-item-header qt-content-primary-dark" data-bgimage="imagestemplate/medium/4.jpg" data-parallax="0" data-attachment="local">
												<div class="qt-topmetas">
													<p class="qt-item-metas qt-small">
														<span class="qt-posttype"><i class="dripicons-align-justify"></i>05:37</span>
														<a class="qt-secondaryaction right tooltipped qt-tooltipped" data-position="left" data-delay="20" data-tooltip="Save for later"><i class="dripicons-clock"></i></a>
													</p>
												</div>

												<ul class="qt-tags qt-bottommetas">
													<li><a href="#">Category name</a></li>
												</ul>

											</div>
											<div class="qt-itemcontents">

												<p class="qt-small qt-details">
													<a href="#author-url" class="qt-author-thumb"><img src="imagestemplate/authors/2.jpg" alt="Author" width="50" height="50"></a> <a href="#author-url" class="qt-authorurl">Anthony Rother</a> | 03 October 2016
												</p>
												<h5 class="qt-title qt-ellipsis-2 qt-t ">
			<a href="#temporary-link">
				The Pros and Cons of Love			</a>
		</h5>


											</div>
										</div>
										<!-- ITEM MEDIUM END ========================= -->
									</div>
									<!-- SLIDESHOW ITEM END -->

								</div>
							</div>
						</div>
						<!--  POSTS CAROUSEL END ================================================== -->
					</div>
				</div>
			</div>
			<!-- ======================= RELATED SECTION END ======================= -->
		</div>
		<!-- ======================= MAIN SECTION END ======================= -->

@endsection