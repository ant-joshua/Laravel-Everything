@extends('layouts.app')
@section('head')
	<title>{{ Auth::user()->name }} | Profile </title>
@endsection
@section('content')
<style type="text/css">


h1 {
  display: block;
  font-size: 50px;
  margin: 25px auto 0;
  width: 975px;
}

h1>small {
  color: #aaaaaa;
  font-size: .5em;
}




figure.profile-picture {
  background-position: center center;
  background-size: cover;
  border: 5px #efefef solid;
  border-radius: 50%;
  bottom: -50px;
  box-shadow: inset 1px 1px 3px rgba(0,0,0,0.2), 1px 1px 4px rgba(0,0,0,0.3);
  height: 148px;
  left: 150px;
  position: absolute;
  width: 148px;
  z-index: 3;
}

div.profile-stats {
  bottom: 0;
  border-top: 1px solid rgba(0,0,0,0.5);
  left: 0;
  padding: 15px 15px 15px 350px;
  position: absolute;
  right: 0;
  z-index: 2;
  height: 250px;
  margin-bottom: -100px;
  /* Generated Gradient */
  background: -moz-linear-gradient(top,  rgba(255,255,255,0.5) 0%, rgba(0,0,0,0.51) 3%, rgba(0,0,0,0.75) 61%, rgba(0,0,0,0.5) 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0.5)), color-stop(3%,rgba(0,0,0,0.51)), color-stop(61%,rgba(0,0,0,0.75)), color-stop(100%,rgba(0,0,0,0.5)));
  background: -webkit-linear-gradient(top,  rgba(255,255,255,0.5) 0%,rgba(0,0,0,0.51) 3%,rgba(0,0,0,0.75) 61%,rgba(0,0,0,0.5) 100%);
 background: -o-linear-gradient(top,  rgba(255,255,255,0.5) 0%,rgba(0,0,0,0.51) 3%,rgba(0,0,0,0.75) 61%,rgba(0,0,0,0.5) 100%);
  background: -ms-linear-gradient(top,  rgba(255,255,255,0.5) 0%,rgba(0,0,0,0.51) 3%,rgba(0,0,0,0.75) 61%,rgba(0,0,0,0.5) 100%);
  background: linear-gradient(to bottom,  rgba(255,255,255,0.5) 0%,rgba(0,0,0,0.51) 3%,rgba(0,0,0,0.75) 61%,rgba(0,0,0,0.5) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#80ffffff', endColorstr='#80000000',GradientType=0 );

}

div.profile-stats ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

div.profile-stats ul li {
  color: #efefef;
  display: block;
  float: left;
  font-size: 24px;
  font-weight: bold;
  margin-right: 50px;
  text-shadow: 1px 1px 2px rgba(0,0,0,0.7)
}

div.profile-stats li span {
  display: block;
  font-size: 16px;
  font-weight: normal;
}

div.profile-stats a.follow {
  display: block;
  float: right;color: #ffffff;
  margin-top: 5px;
  text-decoration: none;
  
  /* This is a copy and paste from Bootstrap */
  background-color: #49afcd;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #49afcd;
  background-image: -moz-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#5bc0de), to(#2f96b4));
  background-image: -webkit-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: -o-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: linear-gradient(to bottom, #5bc0de, #2f96b4);
  background-repeat: repeat-x;
  border-color: #2f96b4 #2f96b4 #1f6377;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff2f96b4', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
  display: inline-block;
  padding: 4px 12px;
  margin-bottom: 0;
  font-size: 14px;
  line-height: 20px;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  border-radius: 4px;
}

div.profile-stats a.follow.followed {
  
  /* Once again copied from Boostrap */
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #5bb75b;
  background-image: -moz-linear-gradient(top, #62c462, #51a351);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#62c462), to(#51a351));
  background-image: -webkit-linear-gradient(top, #62c462, #51a351);
  background-image: -o-linear-gradient(top, #62c462, #51a351);
  background-image: linear-gradient(to bottom, #62c462, #51a351);
  background-repeat: repeat-x;
  border-color: #51a351 #51a351 #387038;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff62c462', endColorstr='#ff51a351', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

header>h1 {
  bottom: -50px;
  color: #354B63;
  font-size: 40px;
  left: 350px;
  position: absolute;
  z-index: 5;
}
</style>
		<div id="maincontent" class="qt-main qt-paper">
		<!-- ======================= HEADER SECTION ======================= -->
					<!-- HEADER CAPTION ========================= -->
					<div class="qt-pageheader qt-pageheader-short qt-negative" data-bgimage="
					https://unsplash.it/975/300
					" data-parallax="1">
						<div class="qt-headercontainer">
							<div class="qt-container">
								<div data-200-top="opacity:1" data--250-top="opacity:0">
									 <figure class="profile-picture" 
    style="background-image: url('{{ Gravatar::src( Auth::user()->email) }}')">
  </figure>
  <div class="profile-stats">
    <ul>
      <li>13    <span>Projects</span></li>
      <li>1,354 <span>Commits</span></li>
      <li>32    <span>Following</span></li>
      <li>324   <span>Followers</span></li>
    </ul>
    <a href="#" class="follow">
     	Edit Profile
    </a>
    <h1>Sid Heart <small>Admin</small></h1>
  </div>

								</div>
							</div>
						</div>
					</div>
					<!-- HEADER CAPTION END ========================= -->
					<!-- ======================= HEADER SECTION END ======================= -->
		</div>
<h1>Your Posts</h1>
<center><h3>Under Development</h3></center>

@endsection