@extends('layouts.app')

@section('content')

        <!-- ======================= MAIN SECTION  ======================= -->
        <div id="maincontent" class="qt-main qt-paper">

            <!-- ======================= HEADER SECTION ======================= -->
            <!-- HEADER CAPTION ========================= -->
            <div class="qt-pageheader qt-pageheader-short qt-negative" data-bgimage="http://i.imgur.com/zaWE2O2.jpg" data-parallax="1">
            <div style="padding-top: 350px;" class="hide-on-xl-only ">
    
</div>
                <div class="qt-headercontainer">
                    <div class="qt-container">
                        <div data-200-top="opacity:1" data--250-top="opacity:0">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel panel-default">
                                            <h1 class="qt-caption qt-spacer-s">Register</h1>
                                            <div class="panel-body">
                                                <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                                                    {{ csrf_field() }}

                                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                        <label for="name" class="col-md-4 control-label">Name</label>

                                                        <div class="col-md-6">
                                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                                            @if ($errors->has('name'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('name') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                                        <div class="col-md-6">
                                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                                                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                                        <div class="col-md-6">
                                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-6 col-md-offset-4">
                                                            <br>
                                                            <button type="submit" class="qt-btn qt-btn-primary qt-btn-xl">
                                                                Register
                                                            </button>
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
