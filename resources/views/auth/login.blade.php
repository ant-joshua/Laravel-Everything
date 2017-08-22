@extends('layouts.app')
@section('head')
    <title>Login</title>
@endsection
@section('content')

        <!-- ======================= MAIN SECTION  ======================= -->
        <div id="maincontent" class="qt-main qt-paper">

            <!-- ======================= HEADER SECTION ======================= -->
            <!-- HEADER CAPTION ========================= -->
            <div class="qt-pageheader qt-pageheader-short qt-negative" data-bgimage="http://wallpapercave.com/wp/nai0TUD.jpg" data-parallax="1">
            <div style="padding-top: 300px;" class=" hide-on-xl-only ">
    
</div>
                <div class="qt-headercontainer">
                    <div class="qt-container">
                        <div data-200-top="opacity:1" data--250-top="opacity:0">
                           <div class="container">
                                <div class="row">
                                
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel panel-default">
                                            <h1 class="qt-caption qt-spacer-s">Login</h1>
                                            <div class="panel-body">
                                             @if (session('status'))
                                            <div class="alert alert-success">
                                               <h4 style="color: green;">{{ session('status') }}</h4> 
                                               <a href="{{ url('forum')}}">Click Here to Go Back</a>
                                            </div>
                                              @endif

                                              @if (session('warning'))
                                                
                                              <h2 style="color: yellow;">{{ session('warning') }}</h2>  
                                         
                                              @endif
                                            <div class="alert-warning">
                                              @foreach( $errors->all() as $error )
                                                <h3 style="color: red;">{{ $error }}</h3><br>
                                              @endforeach
                                            </div>
                                                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                                                    {{ csrf_field() }}

                                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                                        <div class="col-md-6">
                                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                                            @if ($errors->has('email'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                        <label for="password" class="col-md-4 control-label">Password</label>

                                                        <div class="col-md-6">
                                                            <input id="password" type="password" class="form-control" name="password" required>

                                                            @if ($errors->has('password'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('password') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-6 col-md-offset-4">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-8 col-md-offset-4">
                                                            <button type="submit" class="qt-btn qt-btn-primary qt-btn-xl">
                                                                Login
                                                            </button>

                                                            <a class="qt-btn qt-btn-primary qt-btn-xl" href="{{ route('password.request') }}">
                                                                Forgot Your Password?
                                                            </a>

                                                             <a class="qt-btn qt-btn-primary qt-btn-xl" href="{{ url('register') }}" style="text-align: right;">
                                                               Register
                                                            </a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- HEADER CAPTION END ========================= -->
@endsection
