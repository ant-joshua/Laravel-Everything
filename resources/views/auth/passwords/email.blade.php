@extends('layouts.app')

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
                                            <div class="panel-heading">Reset Password</div>
                                            <div class="panel-body">
                                                @if (session('status'))
                                                    <div class="alert alert-success">
                                                        {{ session('status') }}
                                                    </div>
                                                @endif

                                                <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                                                    {{ csrf_field() }}

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

                                                    <div class="form-group">
                                                        <div class="col-md-6 col-md-offset-4" style="padding-top: 30px;">
                                                            <button type="submit" class="qt-btn qt-btn-primary qt-btn-xl">
                                                                Send Password Reset Link
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
@endsection
